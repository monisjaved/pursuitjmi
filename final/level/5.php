<strong>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>



<?php
$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0; 
			if($pass=="FyDO0") $flag =1;
			else
			{
				echo "Incorrect answer :Try again  ";
			}
			
			
		}
		else
		{
			echo "empty text box " ; 
		}
		
}
if($flag==1)
{
	  	$query="UPDATE `final` SET `level`=6,`current_time`='".time()."' WHERE uid = '".$_SESSION['uid']."'";
        	$q=mysql_query($query);
        	if(!q)
        		echo "Answer is correct but we have database issues <br/>Try again or refresh page  : Try again " ;
        	else
        		{
        		echo "Congrats!!  You've finished all the levels" ;
        		echo '<script>window.location = "http://saint.nseasy.com/~engineer/apps/crypt/final"</script>' ;
			}
        	
}

if($flag==0){
?><center></strong>
A long time ago in a galaxy far far away.....<br/>
Amidst the war between the Rebel Alliance and the Galactic Empire , Luke the captain of the ship 
Millennium Falcon faces heavy bombardment on his spaceship from the Empire Drones. He needs to activate the shields of his ship or it's hull will be destroyed. Unfortunately, his guidance and protection system on the ship has crashed. But still shields can be put back up by giving a specific dataset to the ship's console. The shields will power up only if the specific access code corresponding to the electromagnetic shield power is entered. Can you figure out the needed access code that can save the spaceship from its doom ??
<br/><br/>

</strong> <br/> <br/>
<form name="search" action="" method="get">
Search: <input type ="text" name ="search" /> 
<input type="submit" value="Submit">
</form>
<?php
if(isset($_GET['search'])) echo 'You searched for '.$_GET['search'];
?>




<br/> <br/>
<form name="input" action="" method="post">
Access Code: <input type="text" name="pass" so="youneedpass"><input type="submit" value="Submit">
</form>

<!-- The datasets can be found in the file datasets.php and the code for power needed for the shield is 8lWDZ   -->
</center>

<?php } 


?>