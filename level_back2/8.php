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
			if($pass=="sowasitthepassuwerelokingfor") 
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
	  	$query="UPDATE `level` SET `level`=9,`time`=".time()." WHERE uid = ".$user."";
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
?><center></strong>Enter Password To Move to Next Level :</strong><form name="input" action="" method="post">
<strong>Password: </strong><input type="text" name="pass">
<input type="submit" value="Submit">
</form><br/><br/><br/>
<Strong>
<table width="400" height="100" bgcolor="#D3FFD3" align="center">
	<tr valign="center">
		<td>
		VmpGb2QxTnJOVlpOU0docFVtMTRWbGx0ZEV0amJGVjNWMn
		</td>
	</tr>
	<tr valign="center">
		<td>
		QwYTJKSFVucFpWVlpQWVVaSmQwMVVXbGRTTTBKSVdWUkJlR014WkhGV2JHa
		</td>
	</tr>
	<tr valign="center">
		<td>
		HBVakZGZDFkclkzaFNiVlpZVTJ0c1YySlZXazlaYTJoQ1pWWmtWVk
		</td>
	</tr>
	<tr valign="center">
		<td>
		50Y0ZCV2EwcFRWVVpSZDFCUlBUMD0=<a href="http://en.wikipedia.org/wiki/Base64" target="haxtorlev3hint">&nbsp;&nbsp;&nbsp;:)</a>
		</td>
	</tr>


		</td>
	</tr>
</table>

</strong><hr/>This is a single string and not set of 4 strings ! <hr/>
</center><!-- I would have tried N times -->
<?php } 


?>