<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>delete data</title>
</head>
<?php
	$con=mysql_connect("localhost","root","")or die("connectio not found").mysql_error();
	$db=mysql_select_db("bus")or die("database not found").mysql_error();
	
	if(isset($_GET['id']))
{
$h=$_GET['id'];
$a = mysql_query("SELECT * FROM bus.schedule WHERE id='$h'");
while($res=mysql_fetch_array($a))
{

$res = mysql_query("DELETE FROM bus.schedule WHERE id=".$h);
if($res)
echo ("<SCRIPT LANGUAGE='JavaScript'>
 							 window.alert('Deleted Successfully')
						 window.location.href='deletedt.php'</SCRIPT>");
}
}
?>
<body>
<form method="post">

</form>
</body>
</html>
