<?

// Get action
$action = "in_theaters";
if(isset($_REQUEST['action'])){
	if($_REQUEST['action'] == "top_rentals") $url = "dvds/top_rentals.json";
	else $url = "movies/in_theaters.json";
}

// Get Rotten Tomatoes box office list
$rotten_tomatoes_url = "http://api.rottentomatoes.com/api/public/v1.0/lists/".$url."?limit=20&country=us&apikey=pcj52wfrtkwzmhkxch3ubnkb";
$rotten_tomatoes_data = utf8_encode(file_get_contents($rotten_tomatoes_url));
$rotten_tomatoes_json = json_decode($rotten_tomatoes_data);

// Print as CSV
echo "title,";
echo "audience_score,";
echo "critics_score";
echo "\r\n";

foreach($rotten_tomatoes_json->movies as $movie){
	echo $movie->title;
	echo ",";
	
	echo $movie->ratings->audience_score;
	echo ",";
	
	echo $movie->ratings->critics_score;
	echo "\r\n";
}

?>