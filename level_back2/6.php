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
			if($pass=="spaceship") 
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
	  	$query="UPDATE `level` SET `level`=7,`time`=".time()." WHERE uid = ".$user."";
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
?><strong>
<table width="350" height="160" bgcolor="#E3FFE3" align="center">
	<tr valign="center">
		<td width="100%" height="100%">
			<form method="POST" action="" >
				Password: <input name="pass" class="input" value="">
				<input type="submit" class="button" value="Go">
			</form>
		</td>
	</tr>

	<tr valign="">
		<td width="100%" height="100%" align="center">
			<a href="http://hax.tor.hu/pwfor4/" class="main" target="regularpasspage">Here</a> is the page that has the password.<br>
			<a href="http://www.apacheweek.com/features/http11" target="thisisthehint">Here</a> is a little hint.<br><!--Heard about telnet .................Never ?-->
		</td>
	</tr>
</table></strong>
<?php } 


?>