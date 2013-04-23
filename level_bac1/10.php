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
			if($pass=="sports complex") 
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
	  	$query="UPDATE `level` SET `level`=6,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
        	
}

if($flag==0){
?>
<center></strong>a spy was sent to b-town to seek out information<br/> 
	he sent information regarding a bomb attack on some place in t-town<br/>
	but he got confused with the dvorak keyboard layout<br/> 
	decode the msg<br/>
	where is the bomb attack ?</strong><form name="input" action="" method="post">
<strong>Password: </strong><input type="text" name="pass">
<input type="submit" value="Submit">
</form>
</center>
<!-- spy.txt -->
<?php } 


?>