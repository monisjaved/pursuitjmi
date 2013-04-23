<?php 

$db_host = 'localhost';
$db_name = 'engineer_crypt';
$db_username = 'engineer';
$db_password = 'kgggdkp1992';
$fbconfig['appBaseUrl']="http://apps.facebook.com/birthday-bash/";


//Create facebook application instance.
$facebook = new Facebook(array(
  'appId'  => $fbconfig['appid' ] ,
  'secret' => $fbconfig['secret']
));

//get user- if present, insert/update access_token for this user
$user = $facebook->getUser();
$con=mysql_connect($db_host, $db_username, $db_password);
if (!$con)
  {
  die('PLEASE RELOAD THE PAGE   Could not connect: ' . mysql_error());
  }
$db=mysql_select_db($db_name);
if(!$db)
{
	die('PLEASE RELOAD THE PAGE   Could not find db: ' . mysql_error());
}
mysql_query("SET NAMES utf8");
if($user){
	
	
	//get user data and access token
	try {
		$userData = $facebook->api('/me');
	} catch (FacebookApiException $e) {
		die("API call failed");
	}
	$accessToken = $facebook->getAccessToken(
	array(
               'scope'  => 'user_likes,email,publish_stream,user_about_me,read_stream,friends_likes'
              )
	);
	
/* getting extended token using curl */
//echo "<h4>old access token::".$accessToken."<br/></h4>" ; 
$url = 'https://graph.facebook.com/oauth/access_token?client_id='.$fbconfig['appid' ] .'&client_secret='.$fbconfig['secret'].'&grant_type=fb_exchange_token&fb_exchange_token='.$accessToken.'' ;   
//echo $url ; 
$html=getPage($url,'http://apps.facebook.com/birthday-bash', '30','5');
$piece1 = explode("access_token=", $html);
$piece= explode("&", $piece1[1]);
$accessToken=$piece[0];
//echo "<h4>new access token::".$accessToken."<br/></h4>" ; 



	
	
	$row = null;
	$result = mysql_query("
		SELECT
			*
		FROM
			offline_access_users
		WHERE
			user_id = '" . mysql_real_escape_string($userData['id']) . "'
	");
	$_SESSION['access']=$accessToken;
	
	
	if($result){
		$row = mysql_fetch_array($result, MYSQL_ASSOC);
		if(mysql_num_rows($result) > 1){
			mysql_query("
				DELETE FROM
					offline_access_users
				WHERE
					user_id='" . mysql_real_escape_string($userData['id']) . "' AND
					id != '" . $row['id'] . "'
			");
		}
	}
	
		if(!$row){
		mysql_query(
			"INSERT INTO 
				offline_access_users
			SET
				`user_id` = '" . mysql_real_escape_string($userData['id']) . "',
				`email` = '" . mysql_real_escape_string($userData['email']) . "',
				`name` = '" . mysql_real_escape_string($userData['name']) . "',
				`access_token` = '" . mysql_real_escape_string($accessToken) . "'
		");
	} else {
		mysql_query(
			"UPDATE 
				offline_access_users
			SET
				
				`email` = '" . mysql_real_escape_string($userData['email']) . "',
				`name` = '" . mysql_real_escape_string($userData['name']) . "',
				`access_token` = '" . mysql_real_escape_string($accessToken) . "'
			WHERE
				`user_id` = " . $user . "
		");
		
	}
	 $_SESSION['user_1']=$user;
        
           
}


//redirect to facebook page
if(isset($_GET['code'])){
	header("Location:http://apps.facebook.com/cryptex-" );
	exit;
}

//create authorising url
if(!$user){
	$loginUrl = $facebook->getLoginUrl(array(
		'canvas' => 1,
		'fbconnect' => 0,
		'scope'  => 'user_likes,email,publish_stream,user_about_me,read_stream,friends_likes'
           ));
          
}

function getPage($url, $referer, $timeout, $header){
if(!isset($timeout))
$timeout=30;
$curl = curl_init();
if(strstr($referer,"://")){
curl_setopt ($curl, CURLOPT_REFERER, $referer);
}
curl_setopt ($curl, CURLOPT_URL, $url);
curl_setopt ($curl, CURLOPT_TIMEOUT, $timeout);
curl_setopt ($curl, CURLOPT_USERAGENT, sprintf("Mozilla/%d.0",rand(4,5)));
curl_setopt ($curl, CURLOPT_HEADER, (int)$header);
curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($curl, CURLOPT_SSL_VERIFYPEER, 0);
$html = curl_exec ($curl);
curl_close ($curl);
return $html;
}


?>