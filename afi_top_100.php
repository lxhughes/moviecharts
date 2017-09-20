<?

// This works except for Bechdel is always coming up blank, and it takes forever and then starts to time out. Try doing it piecemeal.

$afi_top_100_titles = array(
	array("rank"=>1,"title"=>"Citizen Kane","year"=>1941),
	array("rank"=>2,"title"=>"The Godfather","year"=>1972),
	array("rank"=>3,"title"=>"Casablanca","year"=>1942),
	array("rank"=>4,"title"=>"Raging Bull","year"=>1980),
/*	array("rank"=>5,"title"=>"Singin' In The Rain","year"=>1952),
	array("rank"=>6,"title"=>"Gone With The Wind","year"=>1939),
	array("rank"=>7,"title"=>"Lawrence Of Arabia","year"=>1962),
	array("rank"=>8,"title"=>"Schindler's List","year"=>1993),
	array("rank"=>9,"title"=>"Vertigo","year"=>1958),
	array("rank"=>10,"title"=>"The Wizard Of Oz","year"=>1939),
	array("rank"=>11,"title"=>"City Lights","year"=>1931),
	array("rank"=>12,"title"=>"The Searchers","year"=>1956),
	array("rank"=>13,"title"=>"Star Wars","year"=>1977),
	array("rank"=>14,"title"=>"Psycho","year"=>1960),
	array("rank"=>15,"title"=>"2001: A Space Odyssey","year"=>1968),
	array("rank"=>16,"title"=>"Sunset Blvd.","year"=>1950),
	array("rank"=>17,"title"=>"The Graduate","year"=>1967),
	array("rank"=>18,"title"=>"The General","year"=>1927),
	array("rank"=>19,"title"=>"On The Waterfront","year"=>1954),
	array("rank"=>20,"title"=>"It'S A Wonderful Life","year"=>1946),
	array("rank"=>21,"title"=>"Chinatown","year"=>1974),
	array("rank"=>22,"title"=>"Some Like It Hot","year"=>1959),
	array("rank"=>23,"title"=>"The Grapes Of Wrath","year"=>1940),
	array("rank"=>24,"title"=>"E.T. The Extra-Terrestrial","year"=>1982),
	array("rank"=>25,"title"=>"To Kill A Mockingbird","year"=>1962),
	array("rank"=>26,"title"=>"Mr. Smith Goes To Washington","year"=>1939),
	array("rank"=>27,"title"=>"High Noon","year"=>1952),
	array("rank"=>28,"title"=>"All About Eve","year"=>1950),
	array("rank"=>29,"title"=>"Double Indemnity","year"=>1944),
	array("rank"=>30,"title"=>"Apocalypse Now","year"=>1979),
	array("rank"=>31,"title"=>"The Maltese Falcon","year"=>1941),
	array("rank"=>32,"title"=>"The Godfather Part Ii","year"=>1974),
	array("rank"=>33,"title"=>"One Flew Over The Cuckoo'S Nest","year"=>1975),
	array("rank"=>34,"title"=>"Snow White And The Seven Dwarfs","year"=>1937),
	array("rank"=>35,"title"=>"Annie Hall","year"=>1977),
	array("rank"=>36,"title"=>"The Bridge On The River Kwai","year"=>1957),
	array("rank"=>37,"title"=>"The Best Years Of Our Lives","year"=>1946),
	array("rank"=>38,"title"=>"The Treasure Of The Sierra Madre","year"=>1948),
	array("rank"=>39,"title"=>"Dr. Strangelove","year"=>1964),
	array("rank"=>40,"title"=>"The Sound Of Music","year"=>1965),
	array("rank"=>41,"title"=>"King Kong","year"=>1933),
	array("rank"=>42,"title"=>"Bonnie And Clyde","year"=>1967),
	array("rank"=>43,"title"=>"Midnight Cowboy","year"=>1969),
	array("rank"=>44,"title"=>"The Philadelphia Story","year"=>1940),
	array("rank"=>45,"title"=>"Shane","year"=>1953),
	array("rank"=>46,"title"=>"It Happened One Night","year"=>1934),
	array("rank"=>47,"title"=>"A Streetcar Named Desire","year"=>1951),
	array("rank"=>48,"title"=>"Rear Window","year"=>1954),
	array("rank"=>49,"title"=>"Intolerance","year"=>1916),
	array("rank"=>50,"title"=>"The Lord Of The Rings: The Fellowship Of The Ring","year"=>2001),
	array("rank"=>51,"title"=>"West Side Story","year"=>1961),
	array("rank"=>52,"title"=>"Taxi Driver","year"=>1976),
	array("rank"=>53,"title"=>"The Deer Hunter","year"=>1978),
	array("rank"=>54,"title"=>"M*A*S*H","year"=>1970),
	array("rank"=>55,"title"=>"North By Northwest","year"=>1959),
	array("rank"=>56,"title"=>"Jaws","year"=>1975),
	array("rank"=>57,"title"=>"Rocky","year"=>1976),
	array("rank"=>58,"title"=>"The Gold Rush","year"=>1925),
	array("rank"=>59,"title"=>"Nashville","year"=>1975),
	array("rank"=>60,"title"=>"Duck Soup","year"=>1933),
	array("rank"=>61,"title"=>"Sullivan'S Travels","year"=>1941),
	array("rank"=>62,"title"=>"American Graffiti","year"=>1973),
	array("rank"=>63,"title"=>"Cabaret","year"=>1972),
	array("rank"=>64,"title"=>"Network","year"=>1976),
	array("rank"=>65,"title"=>"The African Queen","year"=>1951),
	array("rank"=>66,"title"=>"Raiders Of The Lost Ark","year"=>1981),
	array("rank"=>67,"title"=>"Who'S Afraid Of Virginia Woolf?","year"=>1966),
	array("rank"=>68,"title"=>"Unforgiven","year"=>1992),
	array("rank"=>69,"title"=>"Tootsie","year"=>1982),
	array("rank"=>70,"title"=>"A Clockwork Orange","year"=>1971),
	array("rank"=>71,"title"=>"Saving Private Ryan","year"=>1998),
	array("rank"=>72,"title"=>"The Shawshank Redemption","year"=>1994),
	array("rank"=>73,"title"=>"Butch Cassidy And The Sundance Kid","year"=>1969),
	array("rank"=>74,"title"=>"The Silence Of The Lambs","year"=>1991),
	array("rank"=>75,"title"=>"In The Heat Of The Night","year"=>1967),
	array("rank"=>76,"title"=>"Forrest Gump","year"=>1994),
	array("rank"=>77,"title"=>"All The President'S Men","year"=>1976),
	array("rank"=>78,"title"=>"Modern Times","year"=>1936),
	array("rank"=>79,"title"=>"The Wild Bunch","year"=>1969),
	array("rank"=>80,"title"=>"The Apartment","year"=>1960),
	array("rank"=>81,"title"=>"Spartacus","year"=>1960),
	array("rank"=>82,"title"=>"Sunrise","year"=>1927),
	array("rank"=>83,"title"=>"Titanic","year"=>1997),
	array("rank"=>84,"title"=>"Easy Rider","year"=>1969),
	array("rank"=>85,"title"=>"A Night At The Opera","year"=>1935),
	array("rank"=>86,"title"=>"Platoon","year"=>1986),
	array("rank"=>87,"title"=>"12 Angry Men","year"=>1957),
	array("rank"=>88,"title"=>"Bringing Up Baby","year"=>1938),
	array("rank"=>89,"title"=>"The Sixth Sense","year"=>1999),
	array("rank"=>90,"title"=>"Swing Time","year"=>1936),
	array("rank"=>91,"title"=>"Sophie's Choice","year"=>1982),
	array("rank"=>92,"title"=>"Goodfellas","year"=>1990),
	array("rank"=>93,"title"=>"The French Connection","year"=>1971),
	array("rank"=>94,"title"=>"Pulp Fiction","year"=>1994),
	array("rank"=>95,"title"=>"The Last Picture Show","year"=>1971),
	array("rank"=>96,"title"=>"Do The Right Thing","year"=>1989),
	array("rank"=>97,"title"=>"Blade Runner","year"=>1982),
	array("rank"=>98,"title"=>"Yankee Doodle Dandy","year"=>1942),
	array("rank"=>99,"title"=>"Toy Story","year"=>1995),
	array("rank"=>100,"title"=>"Ben-Hur","year"=>1959)*/
);

// Get and print the rest of the info.

echo "title,list_source,list_rank,year,imdb_id,genre,imdb_score,tomato_audience_rating,tomato_critic_rating,bechdel_rating,bechdel_dubious\n\r";

foreach($afi_top_100_titles as $movie){
	echo $movie["title"].",";
	echo "afi_top_100,";
	echo $movie["rank"].",";
	echo $movie["year"].",";
	
	// Encode title for url
	$url_title = urlencode($movie["title"]);
	
	// Get info from OMDB
	$omdb_url = "http://www.omdbapi.com/?t=".$url_title."&y=&plot=short&r=json&tomatoes=true";
	$omdb_data = utf8_encode(file_get_contents($omdb_url));
	$omdb_json = json_decode($omdb_data);
	
	// Echo the omdb info.
	echo $omdb_json->imdbID.",";
	echo "\"".$omdb_json->Genre."\",";
	echo $omdb_json->imdbRating.",";
	echo $omdb_json->tomatoUserRating.",";
	echo $omdb_json->tomatoRating.",";
	
	// Get info from Bechdel API.
	$imdbid = substr(2,$omdb_json->imdbID);
	$bechdel_url = "http://bechdeltest.com/api/v1/getMovieByImdbId?imdbid=".$imdbid;
	$bechdel_data = utf8_encode(file_get_contents($bechdel_url));
	$bechdel_json = json_decode($bechdel_data);
	
	// Echo the Bechdel info. 
	echo $bechdel_json->rating.",";
	echo $bechdel_json->dubious."\r\n";
}

?>