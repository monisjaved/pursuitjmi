<strong><?php
$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	if($user) //if user is logged in 
	{
	
	if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="2449223.75969") 
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
	  	$query="UPDATE `level` SET `level`=13,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
        	
}//



if($flag==0){
?><!center>
"Once upon a time in Crypted Land there were two PNG buddies, Aang and Zuko. <br/><br/>

They were the fiercest of enemies.......<br/><br/>

One cloudy night they were battling on the walls of the town .<br/><br/>

Suddenly, Lightning struck and woooosh only one remained..... <br/><br/>

But, He was neither Aang nor Zuko. So who was the stranger?<br/><br/>

He was, as the native people named him, Zung.<br/><br/>

Given below is the image of Zung, he looks like Zuko, But Aang's Soul is at the core.<br/><br/>

I have forgotten the date and time of this event, But i believe Aang has a Superb Memory.<br/><br/>

One last thing, Because my mind is wired differently i only understand <font color="red">Julian data</font>"<br/><br/>

</strong><img src="level/Zung.png"></strong><form name="input" action="" method="post">
<strong>Enter Data :</strong><input type="text" name="pass">
<input type="submit" value="Submit">
</form><br/><br/><br/><hr/>
</center>
<?php } 


?>