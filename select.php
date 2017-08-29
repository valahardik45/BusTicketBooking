<?php
include("main.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>select seat</title>
<link rel="stylesheet" type="text/css" href="select_style.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var count = 0;
	$(".btn").on("click",function(){
		if(count<2){
			var str = $("#selectedSeat").text();
			$("#selectedSeat").html(str + this.id);
			$(this).css("background-color","red");
			count++;
		}
	});
});
</script>
</head>
<body>
<form method="post">
<div class="a">
<table>
<tr>
<td><input type="button" value="1"  class="btn" id="&nbsp;&nbsp;1"  /></td>
<td><input type="button" value="2"  class="btn" id="&nbsp;&nbsp;,2"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="3"  class="btn" id="&nbsp;&nbsp;,3"  /></td>
<td><input type="button" value="4"  class="btn" id="&nbsp;&nbsp;4,"  /></td>
</tr>

<tr>
<td><input type="button" value="5"  class="btn" id="&nbsp;&nbsp;5,"  /></td>
<td><input type="button" value="6"  class="btn" id="&nbsp;&nbsp;6,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="7"  class="btn" id="&nbsp;&nbsp;7,"  /></td>
<td><input type="button" value="8"  class="btn" id="&nbsp;&nbsp;8,"  /></td>
</tr>

<tr>
<td><input type="button" value="9"  class="btn" id="&nbsp;&nbsp;9,"  /></td>
<td><input type="button" value="10"  class="btn" id="&nbsp;&nbsp;10,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="11"  class="btn" id="&nbsp;&nbsp;11,"  /></td>
<td><input type="button" value="12"  class="btn" id="&nbsp;&nbsp;12,"  /></td>
<td>&nbsp; </td>
<td> selected seat<label id="selectedSeat"></label></td>
</tr>

<tr>
<td><input type="button" value="13"  class="btn" id="&nbsp;&nbsp;13,"  /></td>
<td><input type="button" value="14"  class="btn" id="&nbsp;&nbsp;14,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="15"  class="btn" id="&nbsp;&nbsp;15,"  /></td>
<td><input type="button" value="16"  class="btn" id="&nbsp;&nbsp;16,"  /></td>
<td>&nbsp; </td>

</tr>
<tr>
<td><input type="button" value="17"  class="btn" id="&nbsp;&nbsp;17,"  /></td>
<td><input type="button" value="18"  class="btn" id="&nbsp;&nbsp;18,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="19"  class="btn" id="&nbsp;&nbsp;19,"  /></td>
<td><input type="button" value="20"  class="btn" id="&nbsp;&nbsp;20,"  /></td>
<td><input type="button" value="book" name="cmdbook" /></td></tr>
<tr>
<td><input type="button" value="21"  class="btn" id="&nbsp;&nbsp;21,"  /></td>
<td><input type="button" value="22"  class="btn" id="&nbsp;&nbsp;22,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="23"  class="btn" id="&nbsp;&nbsp;23,"  /></td>
<td><input type="button" value="24"  class="btn" id="&nbsp;&nbsp;24,"  /></td>
</tr>
<tr>
<td><input type="button" value="25"  class="btn" id="&nbsp;&nbsp;25,"  /></td>
<td><input type="button" value="26"  class="btn" id="&nbsp;&nbsp;26,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="27"  class="btn" id="&nbsp;&nbsp;27,"  /></td>
<td><input type="button" value="28"  class="btn" id="&nbsp;&nbsp;28,"  /></td>
</tr>
<tr>
<td><input type="button" value="29"  class="btn" id="&nbsp;&nbsp;29,"  /></td>
<td><input type="button" value="30"  class="btn" id="&nbsp;&nbsp;30,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="31"  class="btn" id="&nbsp;&nbsp;31,"  /></td>
<td><input type="button" value="32"  class="btn" id="&nbsp;&nbsp;32,"  /></td>
</tr>
<tr>
<td><input type="button" value="33"  class="btn" id="&nbsp;&nbsp;33,"  /></td>
<td><input type="button" value="34"  class="btn" id="&nbsp;&nbsp;34,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="35"  class="btn" id="&nbsp;&nbsp;35,"  /></td>
<td><input type="button" value="36"  class="btn" id="&nbsp;&nbsp;36,"  /></td>
</tr>
<tr>
<td><input type="button" value="37"  class="btn" id="&nbsp;&nbsp;37,"  /></td>
<td><input type="button" value="38"  class="btn" id="&nbsp;&nbsp;38,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="39"  class="btn" id="&nbsp;&nbsp;39,"  /></td>
<td><input type="button" value="40"  class="btn" id="&nbsp;&nbsp;40,"  /></td>
</tr>
<tr>
<td><input type="button" value="41"  class="btn" id="&nbsp;&nbsp;41,"  /></td>
<td><input type="button" value="42"  class="btn" id="&nbsp;&nbsp;42,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="43"  class="btn" id="&nbsp;&nbsp;43,"  /></td>
<td><input type="button" value="44"  class="btn" id="&nbsp;&nbsp;44,"  /></td>
</tr>
<tr>
<td><input type="button" value="45"  class="btn" id="&nbsp;&nbsp;45,"  /></td>
<td><input type="button" value="46"  class="btn" id="&nbsp;&nbsp;46,"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="47"  class="btn" id="&nbsp;&nbsp;47,"  /></td>
<td><input type="button" value="48"  class="btn" id="&nbsp;&nbsp;48,"  /></td>
</tr>
<tr>
<td><input type="button" value="49"  class="btn" id="&nbsp;&nbsp;49,"  /></td>
<td><input type="button" value="50"  class="btn" id="&nbsp;&nbsp;50,"  /></td>
<td><input type="button" value="51"  class="btn" id="&nbsp;&nbsp;51,"  /></td>
<td><input type="button" value="52"  class="btn" id="&nbsp;&nbsp;52,"  /></td>
<td><input type="button" value="53"  class="btn" id="&nbsp;&nbsp;53,"  /></td>
</tr>
</table>
<label id="selectedSeat"></label>

</form>

</body>
</html>