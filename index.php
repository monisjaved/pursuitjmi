<?php
// uset all cookies 
/*
if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}
*/
	setcookie("lookingforpass?", '', time()-1000);
        setcookie("lookingforpass?", '', time()-1000, '/');
        setcookie("tangelotown", '', time()-1000);
        setcookie("tangelotown", '', time()-1000, '/');

 // set new cookies 
$value = 'WaItWiLlKiLlMe';
setcookie("lookingforpass?",$value, time()+3600) or die('unable to create cookie');  
$value="nccraqguvfgbcde5c9d01e391e3482b9c6948f8e2a0aYW5vdGhlcnN0cmluZw==" ;
$value=stripslashes($value);
setcookie("tangelotown",$value, time()+3600) or die('unable to create cookie');  
    include_once "config/fbmain.php";
    
    //if user is logged in and session is valid.
    if ($user){
        //fql query example using legacy method call and passing parameter
        try{
            $fql            =   "select name, hometown_location, sex, pic_square from user where uid=" . $user;
            
            //http://developers.facebook.com/docs/reference/fql/
            $param  =   array(
                'method'    => 'fql.query',
                'query'     => $fql,
                'callback'  => ''
            );
            $fqlResult   =   $facebook->api($param);
        }
        catch(Exception $o){
            d($o);
        }
    }
    //set page to include default is home.php
    $page   =   isset($_REQUEST['page']) ? $_REQUEST['page'] : "home.php";
    include_once "template.php";
?>