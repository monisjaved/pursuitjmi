<?php

    include_once "../config/fbmain.php";
    
    $query="UPDATE `final` SET `level`=1,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	
        	if(!q)
        	
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/final"</script>' ;
			}





?>