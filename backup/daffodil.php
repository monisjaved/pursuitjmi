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
   $query="select * from final where link='tanker.php'and username='$_SESSION[var]'";
   $result=mysql_query($query) or die ("quer");
   $no=mysql_num_rows($result);
   $timestamp = time();
   $curtime= date("H:i:s",$timestamp);
   $site="tanker.php";
   if($no==0)
	  {
		  $query="insert into final(username,link,time)values('$_SESSION[var]','$site','$curtime')";
		  $result=mysql_query($query) or die ("quer");
	  }

  ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Level 6</title>
</head>

<body>
<!--i neglected to upload password -->
           <?php
            include 'header2.php'
		  ?>
  <div align="center">
  <div  align="center">
           <h3><font color="#DDDDDD"> You are logged in as <?php echo $_SESSION['var'];?> </font>
           </h3>
           <h3><a href="logout.php"><font color="#AAAAAA" face="Verdana, Arial, Helvetica, sans-serif"><u>To logout click here please...</font><font face="Verdana, Arial, Helvetica, sans-serif"><u></font></a></h3>
         </div>
		  <center>
		    <h1><font color="#CC0000"> Level 6</font></h1>
		  </center>
<table   background='picture/pic1.jpg' id="table" border="1" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="15%" >
<tr>
<td width="100%">
<p  align="center"><font  color="#00FF33" size="2" face="Georgia, Times New Roman, Times, serif"><b >Password:</b></font>
<form name="a" action="daffodil.php" method="post">
<p align="center"><input   id="c" type="password" name="c" maxlength="25" size="16" > <br><br>
<input type="submit" name="g" value="Login"></p>
</form></td>
</tr>
</table>
</div><?php $val=$_POST[c];
       if($val==" ")
	    {
	    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=thebestoneisthis.php">';    
       exit; 
		}
		
	 ?>  
</body>
</html>
<?php } ?>