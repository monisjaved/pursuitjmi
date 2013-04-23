<?php 
  
  
         if (isset($_GET['p']))
         	{
         	$i=$_GET['p'];
         
         		switch ($i)
         		{
         			 case 0:
    				    include "include/".$i.".php"; 
    				    break;
    				  case 1:
    				    include "include/".$i.".php"; 
    				    break;
    				 case  2:
    				    include "include/".$i.".php"; 
    				    break;
    				 case  3:
    				    include "include/".$i.".php"; 
    				    break;
  			 
         		}
         	}else{
         	
         	
 
         	
            	$query="SELECT * FROM `level` WHERE `uid` = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		d("unable to get information  : try again " );
        	
        	$row = mysql_fetch_array($q, MYSQL_ASSOC);
        	//d($row);
        	if(mysql_num_rows($q) == 0 )
        			{
        			echo "<strong >Welcome first time player <br/>This  is an online hacking test. <br/>
				<font color='red'><a href='#' target='_top'>play now </a></font>! Each level will provide you with a new, harder clue to find a way to get to another level.<br/>
				Will you crack This test lets see...?_<br/></strong>";
        			$query="INSERT INTO `level`(`uid`, `level`,`time`,`name`) VALUES ('".$user."',0,".time().",'".$userData['name']."' )";
        			$q=mysql_query($query);
        			}
        	else
        	{
        			//something 	
        	}		
        	
        	$i=$row['level'];$notfound=0;
        	switch ($i) {
  			  case 0:
    				    include "level/0.php"; 
    				    break;
  			  default:
    				    try {include "level/".$i.".php"; }
    				     catch (Exception $e) {  $notfound = 1 ;}
    				    break;
    			 }	
        	}
        	if( $notfound== 1 )
        		echo "<strong>FInally someone has ended the puzzle ! </strong>";
        		