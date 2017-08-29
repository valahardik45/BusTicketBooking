<?php
	$con=mysql_connect("localhost","root","")or die("connectio not found").mysql_error();
	$db=mysql_select_db("bus")or die("database not found").mysql_error();
	if(isset($_POST['cmdsubmit']))
{
	$bus=$_POST['txtbus'];
	$sj=$_POST['start'];
	$ej=$_POST['end'];
	$at=$_POST['txtar'];
	$dt=$_POST['txtdep'];
	$dis=$_POST['txtdis'];
	$type1=$_POST['type1'];
	$price=$_POST['pr'];
	if($sj == $ej)
	{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
   							 window.alert('Start Journey And End Journey are same')
								 window.location.href='addr.php'</SCRIPT>");
	}
	else
	{

	
	$sql=mysql_query("INSERT INTO bus.schedule set
	
	busno='$bus',
	dest='$ej',
	source='$sj',
	dist='$dis',
	dep_time='$dt',
	arri_time='$at',
	type='$type1',
	price='$price'");
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='admin_data.php'</SCRIPT>");
	}
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="addr_style.css">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body background="../bg.jpg">
<form method="post">
	<div class="header">
		<center><h2>BUS TIME</h2></center>
	</div>

<table>
	<tr><td>
		<div class="input-group">
			<input type="text"  name="txtbus" placeholder= "Enter your Bus Number" required>
		</div>
	</td></tr>
	<tr><td>	
		<select class="select" name="start">
		<option value="" disabled="disabled" selected="selected" required>Start Journey</option>
		<option value="Rajkot">Rajkot</option>
		<option value="Ahemdabad">Ahemdabad</option>
		<option value="Baroda">Baroda</option>
		</select>
	</td></tr>
	<tr><td>
		<select class="select" name="end">
		<option value="" disabled="disabled" selected="selected" required>End Journey</option>
		<option value="Ahemdabad">Ahemdabad</option>
		<option value="Rajkot">Rajkot</option>
		<option value="Baroda">Baroda</option>
		</select>
	</td></tr>
	<tr><td>
	<div class="input-group">
			<input type="text" name="txtdep" placeholder="Start Time" required>
		</div>
	</td></tr>
	<tr><td>
		<div class="input-group">
			<input type="text" name="txtar" placeholder="End Time" required>
		</div>
	</td></tr>
	<tr><td>
		<div class="input-group">
			<input type="text" name="txtdis" placeholder="Enter Distence" required  />
		</div>  
	</td></tr>
	<tr><td>
		<select class="select" name="type1">
		<option value="" disabled="disabled" selected="selected">Bus Type</option>
		<option value="reguler">Reguler</option>
		<option value="sleeper">Sleeper</option>
		</select>
	</td></tr>
	<tr><td>
		<div class="input-group">
			<input type="text" name="pr" placeholder="Enter Price" required/>
		</div>
	</td></tr>
</table>
	<center>
		<input type="submit" name="cmdsubmit" value="Submit" class="btn" />
		<a href="admin_data.php"><input type="button" align="right" value="Cancel" class="btn" /></a>	
	</center>
</form>
</body>
</html>
