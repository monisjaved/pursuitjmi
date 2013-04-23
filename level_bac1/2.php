<!-- f()-->
<script>
function xorEncode(txt, pass) {

    var ord = []
    var buf = ""

    for (z = 1; z <= 255; z++) {ord[String.fromCharCode(z)] = z}

    for (j = z = 0; z < txt.length; z++) {
        buf += String.fromCharCode(ord[txt.substr(z, 1)] ^ ord[pass.substr(j, 1)])
        j = (j < pass.length) ? j + 1 : 0
    }

    return buf

}

</script><strong>

 <?php

//http://rumkin.com/tools/cipher/atbash.php

$flag=0;
if (isset($_POST['pass']))
{
	$pass=$_POST['pass'];
	if($user) //if user is logged in 
	{
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			$verify=0;
			if($pass=="String.Class") $flag =1;
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
	  	$query="UPDATE `level` SET `level`=3,`time`=".time()." WHERE uid = ".$user."";
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
<center></strong>Enter Code word  To Move to Next Level :</strong><form name="input" action="" method="post">
<strong>Code word: </strong><input type="text" name="pass">
<input type="submit" value="Submit">
</form>
Code word is in source.<br><!-- Bro YOu always need hint ? http://rumkin.com/tools/cipher/          -->
</center>

<script>
function f() {
var foo =  xorEncode("String.Class", "pass")
var bar = xorEncode(foo, "pass")
alert("password is "+bar)
 }
</script>
<?php } 


?>