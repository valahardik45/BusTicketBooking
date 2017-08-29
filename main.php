<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="main_style.css" />
</head>
<body>
<div class="bg">
<div class='header1'>
Star Bus Ticket Booking
</div> 
<div class="header2">
<a href="index.php"><input type="button" name="cmdhome" value="Home" class="b1 b2"></a>
<a href="cust_sup.php">
<input type="button" name="cmdcust" value="Customer Support"class="b1 b2"></a> 
<?php
session_start();
if(isset($_SESSION["hardik"]))
{
	$a=$_SESSION["hardik"];
echo "<table align=left>
<tr>
<a href='print_ticket.php'><input type=button name='cmdprint' value='Print Ticket' class='b1 b2' /></a>
<a href='cancle_ticket.php'><input type=button name='cmdcancel'value='Cancel Ticket' class='b1 b2' /></a>
</tr>
</table>";

echo"
<table align=right>
<tr>
<td>
<div>
  <ul>
    <li>
      <ul>
        <a class='lst'>Hi $a</a>
	    <li><a class='lst' href=profile.php>Edit Profile</a></li>
        <li><a class='lst' href=process.php>Logout</a></li>
      </ul>
    </li>
  </ul>
</div>
</td>
</tr>
</table>
";
}
else
{
	echo "<table align=right>
	<tr><td>
		<div class='btn-group'>
  			<a class='lst' href=login.php><button class='button'>Login</button></a>
		</div>
	</td></tr></table>"
;}
?>
</div>
</div>
</body>
</html>