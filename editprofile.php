<?php
include("main.php");
$con=mysql_connect("localhost","root","")or die("connectio not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();
$a=$_SESSION['hardik'];
$hard = "SELECT * FROM bus.user WHERE u_user = '".$a."'"; 
		$result = mysql_query($hard); 
		while($res=mysql_fetch_array($result))
		{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="editprofile_style.css" rel="stylesheet" />

<title>Untitled Document</title>
</head>
<body>
<div class="header">
<label><h3> Profile</h3></label>
</div>
<form method="post">

<div class="pro">
<div class="input-group">
<label> Name</label>
<input type="text" name="txtname" value="<?php echo $res['u_name']?>" placeholder="Enter Username" required />
</div>
<div class="input-group">
<label> Mobile </label>
<input type="text" name="txtmob" value="<?php echo $res['u_mobile']?>" placeholder="Enter Mobile Number" maxlength="10" pattern="[1-9]{1}[0-9]{9}" required  />
</div>
<div class="input-group">
<label> Place</label>
<input type="text" name="txtplace" value="<?php echo $res['u_place']?>" placeholder="Enter Favourite"  required  />
</div>
<center>	
		<button type="submit" name="cmdsubmit" class="btn">Submit</button>
		<a href="profile.php"><input type="button" name="cmdback" value="Cancle" class="btn" /></a>
		</center>
</div>
</form>
</body>
</html>
<?php
}
if(isset($_POST['cmdsubmit']))
{
	$name=$_POST['txtname'];
	$a=$_SESSION['hardik'];
	$mobile=$_POST['txtmob'];
	$place=$_POST['txtplace'];
	mysql_query("update bus.user set 
	u_name='$name',
	u_place='$place',
	u_mobile='$mobile' 
	where u_user='$a' ");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
   							 window.alert('Profile Edited Successfully')
								 window.location.href='profile.php'</SCRIPT>");
								 }
	
?>