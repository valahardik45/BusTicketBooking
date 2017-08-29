<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="deletedt_style.css" />
<script type="text/javascript">
function del_id(id)
{
	if(confirm('Sure to delete this record ?'))
	{
		window.location='delete.php?id='+id
	}
}
</script>
<title>Untitled Document</title>
</head>

<body background="bg.jpg">
<div class="header">
<center>
<h3>
Delete  Time Table
</center>

</div>
<form method="post">


<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("bus");
$rec=mysql_query("select * from bus.schedule");
echo "<table border=1 align=center>";
echo"<th>Id&nbsp;</th><th>Bus Number&nbsp;</th><th>Source&nbsp;</th><th>Destination&nbsp;</th><th>Distance&nbsp;</th><th>Start&nbsp;</th><th>End&nbsp;</th><th>Bus Type&nbsp;</th><th>Price&nbsp;</th>";
while($res=mysql_fetch_array($rec))
{
echo "<tr><td><b>".$res['id']."</td>";
echo "<td><b>".$res['busno']."</td>";
echo "<td><b>".$res['source']."</td>";
echo "<td><b>".$res['dest']."</td>";
echo "<td><b>".$res['dist']."</td>";
echo "<td><b>".$res['dep_time']."</td>";
echo "<td><b>".$res['arri_time']."</td>";
echo "<td><b>".$res['type']."</td>";
echo "<td><b>".$res['price']."</td>";
echo "<td align=center><b>
<a href=javascript:del_id(". $res[0]. ")>
<img src=picture/b_drop.png alt=DELETE></a></b></td>";
}
?>

</div>

</form>

</body>
</html>
