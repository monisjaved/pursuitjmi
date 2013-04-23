<?php 
	if(( $_SERVER['HTTP_REFERER'] == "http://saint.nseasy.com/~engineer/apps/crypt/final/")||
	($_SERVER['HTTP_REFERER'] == "http://saint.nseasy.com/~engineer/apps/crypt/final/index.php")){
	
	
	$content = file_get_contents("../datasets.json");
	echo $content;
	
	
	
	}
	
	
	else echo "Sorry, you're not authorized. The datasets can only be accessed from the main console";


?>