<?php

$con=mysql_connect("localhost","root","") or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();

if(isset($_POST['cmdsubmit']))
{	
$nam=$_POST['username'];	
$pas=$_POST['password_1'];
$sql=mysql_query("SELECT * FROM admin WHERE a_user='".$nam."'AND a_pwd='".$pas."' LIMIT 1");
if(mysql_num_rows($sql)==1)
{
	echo "you have successfully logged in";
	header("location:admin_data.php");
}
else
	{
	echo "<script>alert('Enter Username And Password correctly')</script>";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="admin_style.css">
</head>

<body>
<div class="bg">
<div class="header">
		<h2>Admin Login</h2>
	</div>
	<div role="form"
	>
	<form id="adminform" name="adminform" method="post">
	<div class="main1">

		<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter Your Username">
		</div>
		
		<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1" 
        placeholder="Enter Your Password">
		</div>
		
		<div class="input-group">
        
		<center><input type="submit" name="cmdsubmit" value="login" 
        class="btn"/> </button></a></center>
        <div class="input-group">
        <center><a href="forget.php">Forget Password?</a></center>
		</div>	
		
		</div>				
	</div>
</div>
</body>
</html>
