<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href='css/style.css' rel="stylesheet" type="text/css" >
<title>BACKTRACK</title>
<style type="text/css">
<!--
.style2 {font-family: "Courier New", Cambria, Courier, monospace}
-->
</style>
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
?>
<body onLoad=password() background='picture/font.jpg'  >
<center>
 <img src="picture/Backtrack Header.png" />
</center>

</center> 
<div id="menu">
				<ul>
					<li><a href="home.php" id="1"  >Home</a></li>
					<li><a href="login.php" id="2"  >LogIn</a></li>
					 <li><a href="http://algorhythm.csijmi.com/2011" id="3" >Back to Algorhythm </a></li>
					<li><a href="users.php" id="4" >Registrations</a></li >
					<li><a href="rule.php" id="5"  >Rules</a></li>
					<li><a href="prizes.php" id="6"  >Prizes</a></li>
                     <li><a href="contact.php" id="7"  >Contacts</a></li>
  </ul>
</div>
	
<br />
<script type=""  language="Javascript">
   var tl=new Array(
       "\nThis  is an online hacking test. ",
       "\nLog on! Each level will provide you with a new, harder clue to find a way to get to another level.",
       "\nWill you crack This test lets see...?"
                  );
var speed=1;
var index=0; text_pos=0;
var str_length=tl[0].length;
var contents, row;
function password()
{
  contents='';
  row=Math.max(0,index-9);
  while(row<index)
    contents += tl[row++] + '\r\n';
	//document.write( contents + tl[index].substring(0,text_pos) + "_");
 document.forms[0].elements[0].value = contents + tl[index].substring(0,text_pos) + "_";
  if(text_pos++==str_length)
  {
    text_pos=0;
    index++;
    if(index!=tl.length)
    {
      str_length=tl[index].length;
      setTimeout("password()",2000);
    }
  } else
    setTimeout("password()",speed);
}
</script>

 <form action=""  style="margin-top:-10px; "  >
 <center>
   <textarea name="textarea"  cols=155 rows=15 style=" width: 600px;height:175px;background: #000;padding:30px;font-size: 9pt; font-family: fixedsys, LucidaTerminal, monospace;color: #909090;text-align: left;overflow:auto;border: 1px"  ></textarea>
 </center>
</form>

