</head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sign Up</title>
<style type="text/css">
<!--
body {
	font-family:Arial, Helvetica, sans-serif;
}
th {
	font-family:Arial, Helvetica, sans-serif;
	font-size:12px;
}
reg {
	font-family:Arial, Helvetica, sans-serif;
	font-size:16px;
}

.details {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-weight: bold;
	text-decoration: underline;
}

label.error {
	font-size:9px;
	color: red;
}
label.error {
		background: url(images/unchecked.gif) no-repeat;
		padding-left: 16px;
		margin-left: .3em;
	}
label.valid {
		display: block;
		width: 16px;
		height: 16px;
	}
.signup{
	border-bottom:thick double;
	border-bottom-color:#000;
	border-bottom-style:solid;
	border-top:thick double;
	border-top-color:#000;
	border-top-style:solid;
	margin-left:25%;
	margin-right:25%
}
.border{
	border-bottom:1px solid #000;
	font:12px arial;
	color:#000;
	padding-left:3px;
}


-->
</style>
<link href="css/CalendarControl.css" rel="stylesheet" type="text/css">
<script src="js/CalendarControl.js" language="javascript"></script>
<script src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$("#signup").validate({
				submitHandler:function(form) {
					form.submit();
				},
				rules: {
					username: "required",
					password: "required",
					cpassword: {
						required: true,
						equalTo: "#password",
					},
					fname: "required",
					lname: "required",
					dob: {
						required: true
					},
					email: {
						required: true,
						email: true
					},
					mobile:"required",
					college: "required",
	
				},
				messages: {
				  cpassword: "Passwords don't match"
				}
			});
		});

</script>

</head>

<body background="picture/pic2.jpg">
<?php
            include 'header.php'
		?>
<form id="signup" name="signup" method="post" action="registration.php" class="signup">
<table width="70%" border="0" align="center">
  <tr>
    <th height="60" colspan="2" scope="col"><h1><u>Registration Page</u></h1></th>
  </tr>
  <div id="reg">
  <tr>

    <td class="border">Username*</td>
    <td width="50%" class="border">
      <label>
        <input type="text" name="username" id="username" />
      </label>
    </td>
  </tr>
  <tr>

    <td class="border">Password*</td>
    <td class="border"><label>
      <input type="password" name="password" id="password" />
    </label></td>
  </tr>
  <tr>
    <td class="border">Confirm Password*</td>
    <td class="border"><label>

      <input type="password" name="cpassword" id="cpassword" />
    </label></td>
  </tr>
  </div>
  <tr>
    <td id="perinfo" colspan="2" align="center"><h4><u>Personal Information</u></h4></td>
  </tr>
  <tr>

    <td class="border">First Name*</td>
    <td class="border"><label>
      <input type="text" name="fname" id="fname" />
    </label></td>
  </tr>
  <tr>
    <td class="border">Last Name*</td>
    <td class="border"><label>

      <input type="text" name="lname" id="lname" />
    </label></td>
  </tr>
  <tr>
    <td class="border">Gender*</td>
    <td id="gen" class="border"><label>
      <input type="radio" name="gender" value="M" id="Gender_0" />
      Male</label>

    <label>
      <input type="radio" name="gender" value="F" id="Gender_1" />
      Female</label></td>
  </tr>
  <tr>
    <td class="border">Date Of Birth*</td>
    <td class="border"><label>

      <input type="text" name="dob" id="dob" onfocus="showCalendarControl(this);"  />
    </label></td>
  </tr>
  <tr>
    <td class="border">Email ID*</td>
    <td class="border"><label>
      <input type="text" name="email" id="email" />
    </label></td>

  </tr>
  <tr>
    <td class="border">Mobile Number*</td>
    <td class="border"><label>
      <input type="text" name="mobile" id="mobile" />
    </label></td>
  </tr>
   <tr>
    <td class="border">College Name*</td>
    <td class="border"><label>
      <input type="text" name="college" id="college" />
    </label></td>
  </tr>
    <td align="right">&nbsp;</td>
    <td><label>
      <input type="submit" name="register" id="register" value="Register" />
      <input type="reset" name="reset" id="reset" value="Reset" />
    </label></td>
  </tr>

</table>
</form>
</body>
</html>
