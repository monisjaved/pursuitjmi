<?php
session_start();

include_once "conf.php";
 $query="DELETE FROM `present` WHERE `uid` = '".$_SESSION['uid']."'";
	$q=mysql_query($query);


$_SESSION['logged']=0;
unset($_SESSION['logged']);
session_destroy();
echo "Thanks for playing ";




?><br/>
<a href="login.php" > Login </a>