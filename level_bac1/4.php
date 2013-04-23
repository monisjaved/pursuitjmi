<script language='javascript'>
 var milisec=0
 var seconds=30
 var minutes=10000
 //document.d2.value='20'
 
function display(){
 
 if (milisec<=0){
    milisec=9
    seconds-=1
 }
 if (seconds<=-1){
    milisec=0
	minutes-=1
    seconds=59
 
 }
 if(minutes<=0){
 document.getElementById('t1').innerHTML="Time Over";
 
 
 }
 else
    milisec-=1
    document.getElementById('t1').innerHTML=minutes+"."+seconds+"."+milisec
    setTimeout("display()",100)
}
 
</script>

<body onLoad="display()">


<?php

$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	if($user) //if user is logged in 
	{
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="YouWannaGoToLevel5") 
				$flag =1;
			else
			{
				echo "incorrect answer :Try again ";
			}
			
			
		}
		else
		{
			echo "empty text box " ; 
		}
	}	
}
if($flag==1)
{
	  	$query="UPDATE `level` SET `level`=5,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
        	
}

if($flag==0){?><center><strong>Please wait or bypass This ! <br/><br/><br/><div id='t1'></div></center></strong></body><?php } ?><!-- I would have seen what bots see -->