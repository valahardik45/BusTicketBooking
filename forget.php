<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include("main.php");
$con=mysql_connect("localhost","root","")or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
if(isset($_POST['cmdsubmit']))
	{
	$user=$_POST['username'];
	$fplace=$_POST['place'];
	$dupl="SELECT u_user FROM bus.user WHERE u_user='".$user."'";
	$result=mysql_query($dupl);
	if(mysql_num_rows($result)>0)
	{
		$place="SELECT u_place FROM bus.user WHERE u_place='".$fplace."'";
		$placeresult=mysql_query($place);
		if(mysql_num_rows($placeresult)>0)
		{
			session_start();
			$_SESSION['username']="$user";
			header("location:reset.php");
		}
		else
		{
		echo"<script>alert('Please Correct Place Name Given By You During Registration')</script>";
		}
	}
		else
		{
			echo"<script>alert('Enter Correct Username Or Favourite Place')</script>";
		}
}
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>forget password</title>
<link rel="stylesheet" type="text/css" href="forget_style.css">
</head>
<div class="header">
<h2> Forgot Password</h2>
</div>
<form method="post" >

	<div class="input-group">
	<input type="text" name="username" placeholder="Enter Username" />
	</div>
	<div class="input-group">
	<input type="text" name="place" placeholder="Enter Favourite" />
	</div>
	<center>
		<button type="submit" name="cmdsubmit" class="btn">Submit</button>
		<a href="login.php"><button type="button" name="cmdback" class="btn" style="cursor:pointer">Cancel</button></a>
	</center>	
    		     
</form>
<body>
</body>
</html>