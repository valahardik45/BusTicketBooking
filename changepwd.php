<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="changepwd_style.css">
<title>Untitled Document</title>
</head>
<?php
include("main.php");
$con=mysql_connect("localhost","root","") or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
if(isset($_POST['cmdsubmit']))
{
	$a=$_SESSION['hardik'];
	$b=$_POST['pwdold'];
	$c=$_POST['pwdn'];
	$d=$_POST['pwdcn'];
	$sql="select * from bus.user where u_user= '".$a."'";
	$res=mysql_query($sql);
	while($e=mysql_fetch_array($res))
	{
		$old=$e['u_pwd1'];
		if($b == $old)
		{
		 mysql_query("update bus.user set u_pwd1='".$d."'where u_user='".$a."'");
			echo ("<SCRIPT LANGUAGE='JavaScript'>
   							 window.alert('Password changed Successfully')
								 window.location.href='profile.php'</SCRIPT>");
		}
		else
		{
			echo "<script>alert('Enter old Password Correctly')</script>";
		}

	}
} 

?>
<script language="javascript">
function validation()
{
if(document.getElementById("txt1").value != document.getElementById("txt2").value)
{
	alert('Password is not same');
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
<body>
<form method="post">
<div class="header">
<h4> Change Password </h4>
</div>
<div class="data">
	<div class="input-group">
		<input type="password" name="pwdold" placeholder="Old Password" required />
	</div>
	
    <div class="input-group">
		<input type="password" name="pwdn" id="txt1" placeholder="Enter Password" required />
	</div>
	
	<div class="input-group">
		<input type="password" name="pwdcn" id="txt2" placeholder="Confirm Password" required />
	</div>
	
		<center>	
		<button type="submit" name="cmdsubmit" class="btn">Submit</button>
		<a href="profile.php"><input type="button" value="Cancle" class="btn" /></a>
		</center>	
    </div> 
</div>
</form>
</body>
</html>
