z<script type ="text/javascript" >
// Encryption Algo
function encrypt(key, value) {
  var result="";
  for(i=0;i<value.length;++i)
  {
    result+=String.fromCharCode(key[i % key.length]^value.charCodeAt(i));
  }
  alert(result);
}

// Decryption Algo (Find Yourself :-p )

</script>

<strong>

<?php
//<!--goo.gl/7Byib-->
$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="Otherswontbethiseasy") $flag =1;
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
	  	$query="UPDATE `final` SET `level`=3,`current_time`='".time()."' WHERE uid = '".$_SESSION['uid']."'";
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
</strong><form name="input" action="" method="post"><strong> Always account for variable change. <br/>
Password: </strong><input type="text" name="pass" so="youneedpass"><input type="submit" value="Submit">
</form>
<!-- 	dur/goehldgskood,bml
	as{qvAgoehldgskood,bml
	as{qv002
	
	Bonus Hint : THe key will always be a number
	The key is "21"
	The exact encryption algo will decrypt 
	   -->
</center>

<?php } 


?>