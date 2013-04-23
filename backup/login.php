<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
-->
</style>
</head>

<body>
        <?php
            include 'header.php'
		?>

<form  name="login" id="login" method="post" onsubmit="return checkform(this)"  action="logincheck.php">
		 

    <table width="100%" height="100" border="0" align="center">
      <tr>
        <th height="75" colspan="2" scope="col" class="text"><h3><u><span class="style1"><u>LOGIN DETAILS</u></span></u></h3></th>
      </tr>
      <tr>
        <td width="344" height="47"><div align="right" class="style1">USERNAME</div></td>
        <td width="376"><label>
          <input type="text" name="username" id="username" />

        </label></td>
      </tr>
      <tr>
        <td height="43"><div align="right" class="style1">PASSWORD</div></td>
        <td><label>
          <input type="password" name="password" id="password" />
        <!-- <a href="#"><u>Forgot Password?</u></a>-->
        </label></td>

      </tr>
      <tr>
        <td height="40" colspan="2">
          <div align="center">
            <input type="submit" name="submit" id="button" value="Signin"  style="margin-left:11%; padding-left:10px; padding-right:10px"/>
            <input type="reset" name="reset" id="button2" value="Reset" style="margin-left:15px;  padding-left:5px; padding-right:5px" />
         </div>
          </td>
      </tr>

      <tr>
        <td height="41" align="right"><span class="style2">Don't have an Account? Create a New one</span></td>
        <td><a href="register.php"><img src='picture/register_button.jpg' align="middle" style="margin-left:10px" /></a></td>
      </tr>
    </table>
    </form>
		<script language="JavaScript" type="text/javascript">
<!--
function checkform (form )
{
  
  if (form.username.value == "" || form.password.value=="")
    {
	 if(form.username.value == "" && form.password.value=="") 
	    {
	      alert( "Please enter your  username  and password " );
		   return false;
		  } 
	  else if(form.username.value == "")
	     {
          alert( "Please enter your  username " );
		  return false;
		  }
	   else if (form.password.value=="")
	    {
	    alert( "Please enter your  password " );
        return false ;
	  }	
    }
  return true ;
}
//-->
</script>

</body>
</html>
