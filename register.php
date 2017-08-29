<?php
include("main.php");  
$con=mysql_connect("localhost","root","") or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
if(isset($_POST['register']))
{
	$uname=$_POST['name'];
	$user=$_POST['username'];
	$upwd1=$_POST['upwd1'];
	$uplace=$_POST['place'];
	$umobile=$_POST['mobile'];

	$dupl="SELECT u_user FROM bus.user WHERE u_user='".$user."'";
	$result=mysql_query($dupl);
	
	$dupl1="SELECT u_user FROM bus.user WHERE u_mobile='".$umobile."'";
	$result1=mysql_query($dupl1);
	if ((mysql_num_rows($result) > 0 ) && (mysql_num_rows($result1) > 0))
		{
			echo "<script>alert('Username and mobile number are already Exists')</script>";
		}
		else if(mysql_num_rows($result) > 0)
			{
				echo ("<script language='JavaScript'>
					window.alert('Username Already Exists')</script>");
			}
			else if (mysql_num_rows($result1) > 0)
			{
   				echo ("<script language='JavaScript'>
				window.alert('Mobile No Already Exists')</script>");
			}
			else
			{
				mysql_query("insert bus.user set 
				u_id='',
				u_user='$user',
				u_name='$uname',
				u_pwd1='$upwd1',
				u_place='$uplace',
				u_mobile='$umobile'");
				echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Account Created Sucessfully')
										window.location.href='login.php'</script>");
			}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>User registration  </title>
	<link rel="stylesheet" type="text/css" href="register_style.css">
	<script language="javascript"> 
	function validation()
	{
		if(document.getElementById("txt1").value != document.getElementById("txt2").value)
		{
		alert('password is not same');
		document.getElementById("txt1").value="";
		document.getElementById("txt1").focus();
		document.getElementById("txt2").value="";
		return false;
		
		}
		else
		{
			return true;
		}
	}
	</script>
</head>
<body>
	<div class="header">
		<h4> Register a new Starbus account </h4>
	</div>
	<form method="post">
		<div class="input-group">
			
			<input type="text" name="name" placeholder="Enter name" required>
		</div>
		<div class="input-group">
			
			<input type="text" name="username" placeholder="Enter username"required>
		</div>
		<div class="input-group">
			
			<input type="password" id="txt1" name="upwd1" placeholder="Enter Password"  required>
		</div>
		<div class="input-group">
			
			<input type="password" id="txt2" name="upwd2"  placeholder="Confirm Password"  required>
		</div>
		<div class="input-group">
			
			<input type="text"  name="mobile"  placeholder="Enter Mobile Number"  required>
		</div>
        <div class="input-group">
			
			<input type="text" name="place" placeholder="Enter favorite Place"required>
		</div>
		
        <center>
		<input type="submit" name="register" class="btn" onclick="return validation();" value="Register">
		
		<P><div>
		 <a href="login.php">Back to Sign in</a></div>
		</center>
			
	</form>

</body>
</html>
