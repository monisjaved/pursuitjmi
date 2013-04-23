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
   $query="select * from final where link='start.php' and username='$_SESSION[var]'";
   $result=mysql_query($query) or die ("Result_error");
   $no=mysql_num_rows($result);
   $timestamp = time();
   $curtime= date("H:i:s",$timestamp);
   $site="start.php";
   if($no==0)
	  { 
		  $query="insert into final values('$_SESSION[var]','$site','$curtime')";
                                         
		  $result=mysql_query($query) or die ("Insert_error");
	  }

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Level 1</title>
</head>

<body link="#FF9900" bgcolor="#D0D0D0" >

       
        <?php  include "header2.php" ?>
        
         <div  align="center">
           <h3><font color="#DDDDDD"> You are logged in as <?php echo $_SESSION['var'];?> </font>
           </h3>
           <h3><a href="logout.php"><font color="#AAAAAA" face="Verdana, Arial, Helvetica, sans-serif"><u>To logout click here please...</font><font face="Verdana, Arial, Helvetica, sans-serif"><u></font></a></h3>
         </div>
		  <center>
		    <h1><font color="#CC0000"> Level 1</font></h1>
		  </center>
 <script language="javascript"  type="text/javascript">
    function password () 
	 {
        var d1, d2, d3, d4, d5, input;
        d1=document.bgColor;
        d2=document.linkColor;
        d3=d1.substring (1,5)+d2.substring (1,3);
        d4=d3.toUpperCase ();
        input=prompt("Password:","");
        if (input!=d3 && input!=d4) 
		   {

             alert("Are you crazy? Thats so easy!");
			
           }
        else 
		  {

         document.location.href=d3+".php";

		

         }
  }
</script>	
   
</body>
</html>


<?php }?> 