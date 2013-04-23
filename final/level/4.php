<script type ="text/javascript" >

// I'm Back and this time it's gonna be messy !!
function encrypt(key, value) {
  var result="";
  for(i=0;i<value.length;++i)
  {
    result+=String.fromCharCode(key[i % key.length]^value.charCodeAt(i));
  }
  //alert(result);
  document.write(result);
}


</script>



<?php
$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="wasthiseasy?") $flag =1;
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
	  	$query="UPDATE `final` SET `level`=5,`current_time`='".time()."' WHERE uid = '".$_SESSION['uid']."'";
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
<br/><br/>
<strong> The LORD said " I'm an egotistical ba**ard, and I name all my projects after myself. "  </strong>  <br/><br/>
</strong><form name="input" action="" method="post"><strong>Code word: </strong><input type="text" name="pass" so="youneedpass"><input type="submit" value="Submit">
<!--  krwvp<,)`tzvwc{nbehcqFaowdvehcw(ltd)`tzvwc{nbehcq)wgmafjl(dow    -->
</form>
</center>

<?php } 


?>