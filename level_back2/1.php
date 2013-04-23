<?php
$flag=0;
if (isset($_REQUEST['pass']))
{
	$pass=$_REQUEST['pass'];
	if($user) //if user is logged in 
	{
		if($pass!="" || $pass !=NULL ) // password is not blank 
		{	
			
			if($pass=="level1lolt-town") $flag =1;
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
	  	$query="UPDATE `level` SET `level`=2,`time`=".time()." WHERE uid = ".$user."";
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
<center>
<table width="350" height="160" bgcolor="#E3FFE3" align="center">
	<tr valign="center">
		<td width="100%" height="100%">
			<form method="GET" action="#" name="lf" onSubmit="a(); return false;">
				Code word : <input name="pw" class="input">
				<input type="button" class="button" value="Go" onClick="a()">
			</form>
		</td>
	</tr>
</table>

<br><br>

<table width="450" height="80"  align="center">
	<tr valign="center">
		<td width="100%" height="100%" align="center">
			Code word is in source. <a href="http://www.pageresource.com/jscript/jpass.htm" target="t-towncomingfestivalhinttothelevel">javascript</a>
		</td>
	</tr>
</table>
</center>



<?php } ?>



<script>
<!--
function nono(e) {if (navigator.appName == 'Netscape' && (e.which == 3 || e.which == 2)) return false;
else if (navigator.appName == 'Microsoft Internet Explorer' && 
(event.button == 2 || event.button == 3)) { alert("oops");
return false;}return true;}
document.onmousedown=nono;document.onmouseup=nono;

function a(){
	thepw = 'level1';
	thepw = thepw+'lol';
	thepw = thepw + 't-town';
	if (document.lf.pw.value==thepw) {
		document.location = 'http://saint.nseasy.com/~engineer/apps/crypt/index.php?pass='+thepw; } else { alert('That is not correct. Please try again.');
	}
}

if (document.layers) window.captureEvents(Event.MOUSEDOWN);
if (document.layers) window.captureEvents(Event.MOUSEUP);
window.onmousedown=nono;window.onmouseup=nono;

document.lf.pw.focus();


-->
</script>





