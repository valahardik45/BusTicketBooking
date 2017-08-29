<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="forget_style.css">
<title>Untitled Document</title>
</head>
<?php
include("main.php");
$con=mysql_connect("localhost","root","")or die("connectio not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
if(isset($_POST['cmdsubmit']))
{
	$new=$_POST['pwdnew'];
	$con=$_POST['pwdcon'];
	if($new !==$con)
	echo"<script>alert('password is not same')</script>";
	else if($new!="" && $con!="")
	{
	$ses=$_SESSION['username'];
	mysql_query("UPDATE bus.user set u_pwd1='$con' where u_user='$ses'");
	echo("<SCRIPT LANGUAGE='JavaScript'>
	window.alert('Succesfully Updated')
	window.location.href='login.php'</script>");
	session_destroy();
	}
}	
?>
<body>
<div class="header">
<h4> Reset Password </h4>
</div>
<form method="post" >
	<div class="input-group">
		<input type="password" name="pwdnew" placeholder="New Password" required>
		</div>
	
    <div class="input-group">
		<input type="password" name="pwdcon" placeholder="Confirm Password" required>
	</div>
	<div class="input-group">
		<center><button type="submit" name="cmdsubmit" class="btn">Submit</button></center>	
    </div>      
</form>
</body>
</html>
