<?php
session_start ();
if(!$_SESSION['var'])
{
session_unset (); //so lets destroy whatever session there was and bring them to login page
session_destroy ();
header( 'Location:unauthor.php'); 
}
else //otherwise, they can see the page
{
   $connect=mysql_connect("localhost","root","");
   mysql_select_db("registered",$connect) or die("CAN'T CONNECT TO DATABASE");
   $query="select * from final where link='start.php'and username='$_SESSION[var]'";
   $result=mysql_query($query) or die ("quer");
   $no=mysql_num_rows($result);
   $timestamp = time();
   $curtime= date("H:i:s",$timestamp);
   $site="start.php";
   if($no==0)
	  {
		  $query="insert into final(username,link,time)values('$_SESSION[var]','$site','$curtime')";
		  $result=mysql_query($query) or die ("quer");
	  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Level 2</title>
</head>

<body link="#FF9900" bgcolor="#D0D0D0">

         
          <?php include 'header2.php' ?>
         <div  align="center">
           <h3><font color="#DDDDDD"> You are logged in as <?php echo $_SESSION['var'];?> </font>
           </h3>
           <h3><a href="logout.php"><font  color="#AAAAAA" face="Verdana, Arial, Helvetica, sans-serif"><u>To logout click here please...</font><font face="Verdana, Arial, Helvetica, sans-serif"><u></font></a></h3>
         </div>
		  <center>
		    <h1><font color="#CC0000"> Level 2</font></h1>#AAAAAA
   
<table   background='picture/pic1.jpg' id="table" border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" >
<tr>
<td width="100%">
<p  align="center"><font  color="#00FF33" size="2" face="Georgia, Times New Roman, Times, serif"><b >Password:</b></font>
<form name="formular" method="post">
<p align="center"><input  type="password" name="c" maxlength="25" size="16" > <br><br>
<input type="submit" name="g" value="Check" onClick="javascript:check()"></p>
</form></td>
</tr>
</table>
		  </center>
          
 <script language="javascript"  type="text/javascript">
 function check() 
   {
    pass=unescape('%44%6F%77%68%61%74%65%76%65%72%75%64%6F');
    solution=pass.substr(0,8);
    passwd=document.formular.c.value;
    if (passwd == solution) 
	 {   
            
	   location.href=solution+".php";
            alert("good");
      }
    else
	{
	  alert("False!!!");
    }
  }
  </script>
  </body>
  </html>
  
  <?php } ?>