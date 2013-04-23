<?php
session_start();
$_SESSION['var']!=' ';
//so lets destroy whatever session there was and bring them to login page
session_destroy ();
header('Location:login.php'); 
?>
