<?php
include("main.php");
if(isset($_POST['submit']))
{

 $a=$_POST['start'];
 $b=$_POST['end'];
 $c=$_POST['optvolvo'];
 $d=$_POST['date'];
 $_SESSION['start']="$a";
 $_SESSION['end']="$b";
 $_SESSION['volvo']="$c";
 $_SESSION['date']="$d";
 header("location:reguler.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="index_style.css">
<script language="javascript">
function validation()
{
if(document.getElementById("txt1").value == document.getElementById("txt2").value)
{
	alert(' same');
	//document.getElementById("txt1").value="";
	//	document.getElementById("txt1").focus();
	//document.getElementById("txt2").value="";
	return false;
}
else
{
	return true;
}
</script>
</head>
<body>

<form method="post">
<div class="ac">

	<!--<div class="input-group">
		<input type="text" name="start journey" placeholder="Start Journey">
	</div>
	<div class="input-group">
		<input type="text" name="end journey" placeholder="End Journey">
	</div> -->
<table><tr><td>	
<select class="select" name="start" id="txt1" required>
<option value="" disabled="disabled" selected="selected">Start Journey</option>
<option value="Rajkot">Rajkot</option>
<option value="Ahemdabad">Ahemdabad</option>
<option value="Baroda">Baroda</option>
</select></td>
<td>
<select class="select" name="end" id="txt2" required>
<option value="" disabled="disabled" selected="selected">End Journey</option>
<option value="Rajkot">Rajkot</option>
<option value="Ahemdabad">Ahemdabad</option>
<option value="Baroda">Baroda</option>
</select></td>	
	
<td>
<input type="date" class="cal" name="date" value="dd-mm-yyyy" required/></td></tr>
</td></tr></table>
<center><table>
<tr><td>
<input type="radio"  name="optvolvo" value="reguler" required/>Reguler
<input type="radio"  name="optvolvo" value="sleeper" required/>Sleeper</td></tr>
</table></center>
<center>

<input type="submit" name="submit" value="Search" class="btn" onclick="return validation();"/> </button></center>
</div>
</form>
</body>
</html>
<?php
include("slider.php");
?>