<?php $connect=mysql_connect("localhost","root","");
 mysql_select_db("registered",$connect) or die("CAN'T CONNECT TO DATABASE");
 $user=mysql_real_escape_string($_POST[username]);
 $pass=mysql_real_escape_string($_POST[password]);
 $query="select * from user where username='$user' and password='$pass'";
 $result=mysql_query($query);
 $check=mysql_num_rows($result);
 if($check==1)
   {
     session_start(); 
    // session_register($_POST['username']);
	$_SESSION['var']=$_POST[username];
    header('Location:start.php');
  }
  else 
  {?>
     <script language=JavaScript>
	 alert("Username and Password did not match");
	 </script>
<?php //header('Location:login.php');
	 include 'login.php';
  }
 
?>
