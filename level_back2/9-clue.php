<!--// a good user's name has got good password ! -->
<?php 


//http://www.tizag.com/mysqlTutorial/mysql-php-sql-injection.php

$db_host = 'localhost';
$db_name = 'engineer_crypt';
$db_username = 'engineer';
$db_password = 'kgggdkp1992';
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
$name_bad = stripslashes($_GET['user']) ; 
//echo $name_bad ;
$query_bad = "SELECT * FROM customers WHERE username='".$name_bad."' ";

$flag=1;
//echo $query_bad ;
$result = mysql_query($query_bad);
while ($row = mysql_fetch_assoc($result)) {
    echo "<br/>"; 
    print_r($row);
    $flag=$flag+1;
   echo "<br/>";
}
if($flag  ==1 )
	{
		echo "<h2>Try harder</h2> unix time ::".time();
	}
// input a' or '1
?>

<!--mysql !! -->


<hr/><hr/><hr/>
<form name="input" action="" method="get">
Username: <input type="text" name="user" ><br/>
password : [[ ??? ]]<br/>
<input type="submit" value="Submit"><br/>
</form>