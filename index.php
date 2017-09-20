<?

// Options
$options = array(
	"in_theaters" => "In Theaters Now",
	"top_rentals" => "Top Rentals"
);

// Get action variable from GET
$action = "in_theaters";
if(isset($_REQUEST['action']) && in_array($_REQUEST['action'],array_keys($options))) $action = $_REQUEST['action'];

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">

<!-- Example based on http://bl.ocks.org/mbostock/3887118 -->
<!-- Tooltip example from http://www.d3noob.org/2013/01/adding-tooltips-to-d3js-graph.html -->

<style>
button {
	corner-radius: 3px;
}
button .selected {
	background-color: #FF0000;
	color: #00FF00;
}

body {
  font: 11px sans-serif;
}

.axis path,
.axis line {
  fill: none;
  stroke: #000;
  shape-rendering: crispEdges;
}

.dot {
  stroke: #000;
}

.tooltip {
  position: absolute;
  width: 200px;
  height: 28px;
  pointer-events: none;
}
</style>
<body>
<h2>Rotten Tomatoes Rating Matrix: Critics vs. Users</h2>

<form method="GET" action="index.php?action=<?=$action?>">
	<? foreach($options as $key=>$label): ?>
		<button type="submit" name="action" value="<?=$key?>" class="button<? if($action==$key) echo " selected"; ?>"><?=$label?></button>
	<? endforeach; ?>
</form>

<script src="http://d3js.org/d3.v3.min.js"></script>

<script>
var margin = {top: 20, right: 20, bottom: 30, left: 40},
    width = 960 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

/* 
 * value accessor - returns the value to encode for a given data object.
 * scale - maps value to a visual display encoding, such as a pixel position.
 * map function - maps from data value to display value
 * axis - sets up axis
 */ 

// setup x 
var xValue = function(d) { return d.audience_score;}, // data -> value
    xScale = d3.scale.linear().range([0, width]), // value -> display
    xMap = function(d) { return xScale(xValue(d));}, // data -> display
    xAxis = d3.svg.axis().scale(xScale).orient("bottom");

// setup y
var yValue = function(d) { return d.critics_score;}, // data -> value
    yScale = d3.scale.linear().range([height, 0]), // value -> display
    yMap = function(d) { return yScale(yValue(d));}, // data -> display
    yAxis = d3.svg.axis().scale(yScale).orient("left");

// setup fill color
var cValue = function(d) { return d.Manufacturer;},
    color = d3.scale.category10();

// add the graph canvas to the body of the webpage
var svg = d3.select("body").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
    
// BACKGROUND COLORS
var band_width = 33;

// Critical Acclaim 
svg.append("rect")
    .attr("width", "100%")
    .attr("height", band_width+"%")
    .attr("fill", "rgba(10, 150, 20, 0.25)");      

// Audience Acclaim
svg.append("rect")
    .attr("width", band_width+"%")
    .attr("height", "100%")
    .attr("x",(100-band_width)+"%")
    .attr("fill", "rgba(10, 150, 20, 0.25)"); 
    
// Critical Disdain
svg.append("rect")
    .attr("width", "100%")
    .attr("height", band_width+"%")
    .attr("y",(100-band_width)+"%")
    .attr("fill", "rgba(150, 0, 0, 0.25)");     

// Audience Disdain
svg.append("rect")
    .attr("width", band_width+"%")
    .attr("height", "100%")
    .attr("fill", "rgba(150, 0, 0, 0.25)"); 

// Background Text    
svg.append('text').text('Wiseau Zone')
				.attr("font-size","2em")
				.attr("alignment-baseline","hanging")
                .attr('y', (100-band_width)+"%")
                .attr('fill', 'rgba(0, 0, 0, 0.25)')
                
svg.append('text').text('Spielberg Zone')
				.attr("font-size","2em")
				.attr("alignment-baseline","hanging")				
                .attr('x', (100-band_width)+"%")
                .attr('fill', 'rgba(0, 0, 0, 0.25)')                 

svg.append('text').text('Merchant-Ivory Zone')
				.attr("font-size","2em")
				.attr('x','20')
				.attr('width','20px')
				.attr("alignment-baseline","hanging")				
                .attr('fill', 'rgba(0, 0, 0, 0.25)')                  

svg.append('text').text('Diesel Zone')
				.attr("font-size","2em")
				.attr('x', (100-band_width)+"%")
				.attr('y', (100-band_width)+"%")
				.attr("alignment-baseline","hanging")				
                .attr('fill', 'rgba(0, 0, 0, 0.25)')  

svg.append('text').text('Paxton Zone')
				.attr("font-size","2em")
				.attr('x', band_width+"%")
				.attr('y', band_width+"%")
				.attr("alignment-baseline","hanging")				
                .attr('fill', 'rgba(0, 0, 0, 0.25)')  
    
// END BACKGROUND COLORS

// add the tooltip area to the webpage
var tooltip = d3.select("body").append("div")
    .attr("class", "tooltip")
    .style("opacity", 0);

// load data
var csv_file = "data.php?action=<?=$action?>";

d3.csv(csv_file, function(error, data) {

  // change string (from CSV) into number format
  data.forEach(function(d) {
    d.audience_score = +d.audience_score;
    d.critics_score = +d.critics_score;
//    console.log(d);
  });

  // don't want dots overlapping axis, so add in buffer to data domain
  xScale.domain([d3.min(data, xValue)-1, d3.max(data, xValue)+1]);
  yScale.domain([d3.min(data, yValue)-1, d3.max(data, yValue)+1]);

  // x-axis
  svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
    .append("text")
      .attr("class", "label")
      .attr("x", width)
      .attr("y", -6)
      .style("text-anchor", "end")
      .text("Audience Score");

  // y-axis
  svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
    .append("text")
      .attr("class", "label")
      .attr("transform", "rotate(-90)")
      .attr("y", 6)
      .attr("dy", ".71em")
      .style("text-anchor", "end")
      .text("Critic Score");

  // draw dots
  svg.selectAll(".dot")
      .data(data)
    .enter().append("circle")
      .attr("class", "dot")
      .attr("r", 3.5)
      .attr("cx", xMap)
      .attr("cy", yMap)
      .style("fill", function(d) { return color(cValue(d));}) 
      .on("mouseover", function(d) {
          tooltip.transition()
               .duration(200)
               .style("opacity", .9);
          tooltip.html(d["title"])
               .style("left", (d3.event.pageX + 5) + "px")
               .style("top", (d3.event.pageY + 5) + "px");
      })
      .on("mouseout", function(d) {
          tooltip.transition()
               .duration(500)
               .style("opacity", 0);
      });

  // draw legend
  var legend = svg.selectAll(".legend")
      .data(color.domain())
    .enter().append("g")
      .attr("class", "legend")
      .attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; });

  // draw legend colored rectangles
  legend.append("rect")
      .attr("x", width - 18)
      .attr("width", 18)
      .attr("height", 18)
      .style("fill", color);

  // draw legend text
  legend.append("text")
      .attr("x", width - 24)
      .attr("y", 9)
      .attr("dy", ".35em")
      .style("text-anchor", "end")
      .text(function(d) { return d;})
});

</script>
</body>
</html>