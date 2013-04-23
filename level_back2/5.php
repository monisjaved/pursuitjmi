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
			if($pass=="Bacon") 
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
<center><table width="350" height="160" bgcolor="#E3FFE3" align="center">
	<tr valign="center">
		<td width="100%" height="100%" align="center">
			<form method="POST" action="" name="lf">
				<input type="hidden" name="crypt_key" value="dd6efa116264c29b2ec1182f75a312fd">
				<select name="pass" class="select">
					<option value="Sheep">Sand</option>
					<option value="Salad">Sheep</option>
					<option value="Mango">Shark</option>
					<option value="Shark">Sleep</option>
				</select>
				<input type="submit" class="button" value="Proceed">
			</form>
		</td>
	</tr>
</table>
<strong >Please <a href="http://www.tfsd.k12.id.us/ol/cps/Hardtutorial.htm" target="haxtorwarmup3posthint">pick</a> 'Bacon' from the list.<br></strong>


<br><br>


</center>
<?php } 


?>

<?php 
if(!isset($_SESSION['publish'])){
$query="SELECT * FROM `offline_access_users` WHERE `user_id` = ".$user." " ; 
//echo $query ; 
$result = mysql_query($query);
$row = mysql_fetch_assoc($result);
//d($row); 

$mg['access_token']=$row['access_token'];
$mg['from']= $row['user_id'];
$mg['url']="https://apps.facebook.com/cryptex-/";
$mg['image']="https://saint.nseasy.com/~engineer/apps/crypt/level/t-town.jpg";
$mg['message']="Hey guys , I am on level5 of this hacking challenge come and compete ! https://apps.facebook.com/cryptex-/                                       ";
try {
	$post_obj=$facebook->api($row['user_id'].'/feed','post',$mg);
	$_SESSION['publish']=1;
	}
catch (FacebookApiException $e)
{
	//echo "unable to publish" ; 
	continue ;
}
}

?>