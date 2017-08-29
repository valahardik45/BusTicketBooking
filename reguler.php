<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="reguler_style.css">
<title>Untitled Document</title>
</head>
<body>
<form method="post">
<?php
$con=mysql_connect("localhost","root","") or die("connection not found").mysql_error();
$db=mysql_select_db("bus")or die("database not found").mysql_error();

include("main.php");
$a=$_SESSION["start"];
$b=$_SESSION["end"];
$c=$_SESSION["volvo"];
$d=$_SESSION["date"];
echo $a;
echo $b;
echo $c;
echo $d;
if($a == $b)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
   							 window.alert('Start Journey and End Journey are same')
								 window.location.href='index.php'</SCRIPT>");
}
else
{
$sql="select * from bus.schedule where type='".$c."' AND source='".$a."' AND dest='".$b."'";
$k=mysql_query($sql);
echo "<div class=ac>";
echo "<div class='label'>" .$a."&nbsp;to&nbsp;" .$b. "&nbsp;on&nbsp;" .$d."</div>";
echo "<table border=1 height=60	 width=600><th>Bus Number&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Distance&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Start&nbsp;&nbsp;&nbsp;&nbsp;</th><th>End&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Fare&nbsp;&nbsp;&nbsp;&nbsp;</th><th>Book Tickets&nbsp;&nbsp;&nbsp;&nbsp;</th>";
while($har=mysql_fetch_array($k))
{
echo "<tr><td align=center>".$har['busno']."</td>";
echo "<td align=center>".$har['dist']."</td>";
echo "<td align=center>".$har['dep_time']."</td>";
echo "<td align=center>".$har['arri_time']."</td>";
echo "<td align=center>".$har['price']."</td>";
echo "<td align=center> <a href='select.php'><input type=button class='bk' value='Select Seat'/></a>";
}
}
?>
</div>
</form>
</body>
</html>