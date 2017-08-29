<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="profile_style.css">
<title>Untitled Document</title>
<?php
include("main.php");
$con=mysql_connect("localhost","root","") or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
$a=$_SESSION['hardik'];
$dupl = "SELECT * FROM bus.user WHERE u_user = '".$a."'"; 
		$result = mysql_query($dupl); 
		while($res=mysql_fetch_array($result))
{
?>	

</head>

<body>
<form method="post">
<div class="header">
	<h2>Dashboard</h2>
</div>

<div class="pro">

<label><h3>Profile</h3></label>
View and Edit your your name and mobile number. &nbsp;&nbsp;
<a href="editprofile.php"><button type="button" name="cmdpro" class="button" style="cursor:pointer">Manage</button></a>
<br />

<br />

<label><h3>Change Password</h3></label>
Edit your password here.&nbsp;&nbsp;
<a href="changepwd.php"><button type="button" name="cmdpro" class="button" style="cursor:pointer">Manage</button></a>
<br />
<center>
<a href="index.php"><input type="button" name="cmdback" value="Cancle" class="btn" /></a>


<!--<br />
<b><h3 style="font-size:16px">Name:</b><?php echo $res['u_name']  ?></h3>
<br />
<br />
<h3 style="font-size:16px">Username:<?php echo $res['u_user']  ?></h3>
<br />
<br />
<h3 style="font-size:16px">Mobile:<?php echo $res['u_mobile']  ?></h3>
<br />
<br />
<h3 style="font-size:16px">Favourite Place:<?php echo $res['u_place'] ?></h3>-->
</div>
</form>
</body>
</html>
<?php
}
?>	
