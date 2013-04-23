<strong>

<?php
$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="igotitfromyoosoof") $flag =1;
			else
			{
				echo "incorrect answer :Try again  ";
			}
			
			
		}
		else
		{
			echo "empty text box " ; 
		}
		
}
if($flag==1)
{
	  	$query="UPDATE `final` SET `level`=4,`current_time`='".time()."' WHERE uid = '".$_SESSION['uid']."'";
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
?><center></strong>
<img src = "images/fat.jpg" /><br/>
Enter Code word  To Move to Next Level :<br/>
</strong><form name="input" action="" method="post"><strong>Code word: </strong><input type="text" name="pass" so="youneedpass"><input type="submit" value="Submit">
</form>
</center>

<?php } 


?>