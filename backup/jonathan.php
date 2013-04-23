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
   $query="select * from final where link='DagobertDuck.php' and username='$_SESSION[var]'";
   $result=mysql_query($query) or die ("quer");
   $no=mysql_num_rows($result);
   $timestamp = time();
   $curtime= date("H:i:s",$timestamp);
   $site="DagobertDuck.php";
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
<title>Level 4</title>
<style type="text/css">
<!--
.style2 {
	color: #FFCCFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style3 {color: #66CCFF}
-->
</style>
</head>

<body>
        
		    <?php
            include 'header2.php'
		    ?>   
            </h3>
         <div  align="center">
           <h3><font color="#DDDDDD"> You are logged in as <?php echo $_SESSION['var'];?> </font>
           </h3>
		<div  align="center">
           <h3><a href="logout.php"><font color="#AAAAAA" face="Verdana, Arial, Helvetica, sans-serif"><u>To logout click here please...</font><font face="Verdana, Arial, Helvetica, sans-serif"><u></font></a></h3>
         </div>
        <center>
          <h3 class="style1 style3">LEVEL 4  <center></h3>
        <object  data='lux.swf' width="300" height="0" type="all">
                  </object>
                <form action="look.php" method="post">  
         <table width="100%" height="100" border="0" align="center">
     
      <tr>
        <td width="344" height="47"><div align="right" class="style2">USERNAME</div></td>
        <td width="376"><label>
          <input type="text" name="username" id="username" />

        </label></td>
      </tr>
      <tr>
        <td height="43"><div align="right" class="style2">PASSWORD</div></td> <td width="376"><label>
		<input type="password" name="password" id="password" /></label>
      

      </tr>
      <tr>
        <td height="40" colspan="2">
          <div align="center">
            <input type="submit" name="submit" id="button" value="Submit"  style="margin-left:11%; padding-left:10px; padding-right:10px"/>
         </div>        </td>
      </tr>
    </table>
    </form>
        </h4></center>
        </p>
</body>
</html>
<?php } ?>