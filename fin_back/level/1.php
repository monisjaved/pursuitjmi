<strong>

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
			if($pass=="Your FORCE is strong") $flag =1;
			else
			{
				echo "incorrect answer :Try again ( Trailing spaces are not good ) ";
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
	  	$query="UPDATE `final` SET `level`=2,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/final"</script>' ;
			}
        	
}

if($flag==0){
?><center></strong>Enter Code word  To Move to Next Level :<br/>
HINT: Berlin is very nice this time of the year!!
</strong><form name="input" action="" method="post"><strong>Code word: </strong><input type="text" name="pass" so="youneedpass"><input type="submit" value="Submit">
</form>
<!-- The internet is for Homo Sapiens ,, not the Bots  -->
</center>

<?php } 


?>