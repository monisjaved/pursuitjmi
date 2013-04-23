<?php

session_start();
session_destroy();
session_start();
if($_SESSION['logged']==1)
header("location:index.php");


include "conf.php";


if(isset($_POST['uid'])){


$query="SELECT * FROM `offline_access_users` WHERE `user_id` = ".$_POST['uid']."";
$q=mysql_query($query);
if(!q)
   echo "unable to get information  : try again " ;
        	
//$row = mysql_fetch_array($q, MYSQL_ASSOC);
        	//d($row);
        	
        	if(mysql_num_rows($q) == 0 )
        			{
        			echo "Sorry, the user id entered is not present in the database.";
        			//$query="INSERT INTO `final`(`uid`, `level`,`time`,`name`) VALUES ('".$user."',0,".time().",'".$userData['name']."' )";
        			//$q=mysql_query($query);
        			}
        	else
        	{
        	
        	$query="SELECT * FROM `present` WHERE `uid` = ".$_POST['uid']."";
		$q=mysql_query($query);
		
		
			if(mysql_num_rows($q)> 0 )
        			{
        			echo "The user entered has already been logged in.";
        			
        			}else {
        				$_SESSION['uid']= $_POST['uid'];
        				$query="SELECT * FROM `offline_access_users` WHERE `user_id` = ".$_SESSION['uid']."";
		        		$q=mysql_query($query);
		        							if(!q)
		        								d("unable to get information  : try again " );
								        	
					$row = mysql_fetch_array($q, MYSQL_ASSOC);
					$_SESSION['name']= $row['name'];
					
        				$query="INSERT INTO `present`(`uid`,`name`) VALUES('".$_POST['uid']."','".$_SESSION['name']."')";
					$q=mysql_query($query);
					$_SESSION['logged']=1;
					
					
					
					header("location:index.php");
        			
        			
        			
        			
        			}
		
		
        			
        			
        	
        	
    				   
    		}// when uid exists





}// if isset





?>

<h1>  Welcome to Cryptex!!  </h1>
<form action ="" method="post" >
Please Enter the Player id : <br/>
<input type ="text" name ="uid" />

<input type="submit" />


</form>