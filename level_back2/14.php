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
			if($pass=="appendthistotangelotownanotherstring") 
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
	  	$query="UPDATE `level` SET `level`=15,`time`=".time()." WHERE uid = ".$user."";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo 'Good.!  Click <a href="index.php">here</a> to move to next level ' ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/"</script>' ;
			}
        	
}//


//set cookie tangelotown=a08825a3c3f5cf7e499c2ae7ffd0afc3
//Rot 13 appendthisto  :  nccraqguvfgb
//Base64 anotherstring :  YW5vdGhlcnN0cmluZw==
if($flag==0){
?><center><!-- https://www.google.co.in/search?q=one+way+hashes+are+fixed+lenght --><form name="input" action="" method="post">
<strong>Enter Data :</strong><input type="text" name="pass">
<input type="submit" value="Submit">
</form><br/><br/><br/><hr/><!-- %3D%3D replace by == -->
</center>
<?php } 


?>