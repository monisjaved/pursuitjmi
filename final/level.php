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
            	$query="SELECT * FROM `final` WHERE `uid` = ".$_SESSION['uid']."";
        	$q=mysql_query($query);
        	if(!q)
        		d("unable to get information  : try again " );
        	
        	$row = mysql_fetch_array($q, MYSQL_ASSOC);
        	//d($row);
        	if(mysql_num_rows($q) == 0 )
        			{
        			echo "
        			  <img src = 'images/force.jpg' /> 
        			  <!-- The 900 year old Jedi Master will lead you to the next level   --> ";
        			  $time = time();
        		$query="INSERT INTO `final`(`uid`, `level`,`init_time`,`name`,`current_time`) VALUES ('".$_SESSION['uid']."',0,'".$time."','".$_SESSION['name']."' , '".$time."' )";
        			$q=mysql_query($query);
        			}
        	else
        	{
        			//something 	
        			
        	
        	$i=$row['level'];$notfound=0;
        	
  			  
    				    try {include "level/".$i.".php"; }
    				     catch (Exception $e) {  $notfound = 1 ;}
    				   
    			}
    				
        	}
        	if( $notfound== 1 )
        		echo "<strong>Finally someone has ended the puzzle ! </strong>";