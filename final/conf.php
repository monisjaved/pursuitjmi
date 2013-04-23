<?php


$db_host = 'localhost';
$db_name = 'engineer_crypt';
$db_username = 'engineer';
$db_password = 'kgggdkp1992';


$con=mysql_connect($db_host, $db_username, $db_password);
if (!$con)
  {
  die('PLEASE RELOAD THE PAGE   Could not connect: ' . mysql_error());
  }
$db=mysql_select_db($db_name,$con);



if(!$db)
{
	die('PLEASE RELOAD THE PAGE   Could not find db: ' . mysql_error());
}


?>