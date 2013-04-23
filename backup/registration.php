<?php $connect=mysql_connect("localhost","root","");
 mysql_select_db("registered",$connect) or die("CAN'T CONNECT TO DATABASE");
$query="select * from user where username='$_POST[username]'";
$result=mysql_query($query); 
$check_user=mysql_num_rows($result);
if($check_user!=0)
   {
     //echo "USERNAME ALREADY EXIST ..PLEASE GO BACK AND ENTER DIFFERENT USERNNAME";
	 ?>
	 <script  language="javascript">
	 alert("USERNAME ALREADY EXIST ..PLEASE GO BACK AND ENTER DIFFERENT USERNNAME");
	  </script>
	  <?php
	  }
   else
   {
     $insert_query="insert into user (firstname, lastname, gender,    mobileno,college,dob,email,username,password)values('$_POST[fname]','$_POST[lname]','$_POST[gender]','$_POST[mobile]','$_POST[college]','$_POST[dob]','$_POST[email]','$_POST[username]','$_POST[password]')" ;

    $insert=mysql_query($insert_query)or  die(mysql_error());
     header('Location:http://localhost/php/login.php');
  }
  mysql_close($connect);
?>









