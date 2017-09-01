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
<script src="./jquery.min.js"></script>
<style>
	.selected{
		background-color:red !important;
	}
</style>
<script>
$(document).ready(function(){
	var count = 0;
	$(".btn").on("click",function(){
		var valu = this.id;
		var str2 = "";
		var str = $("#selectedSeat").text();
		str = $.trim(str);
		$("#selectedSeat").html(str);
		if(str.substring(0,2)==', '){
			$("#selectedSeat").html(str.substring(2));
		}
		if(count<5){
			if($.trim(str) == ''){
				$("#selectedSeat").html(str + this.id);
			}
			else {
				var content = $("#selectedSeat").text();
				if(content.indexOf(valu)>=0){
					if(content.indexOf(valu+', ')>=0){
						var contnt = content.replace((valu+', '),' ');
						$("#selectedSeat").html(contnt);
					}
					else{
						var contnt = content.replace(valu,' ');
						$("#selectedSeat").html(contnt);
					}
				}
				else{
					$("#selectedSeat").html(str + ", " + this.id);
				}
				
			}
			if($(this).attr("class")=="btn selected"){
				$(this).removeClass("selected");
				count--;
			}
			else if($(this).attr("class")=="btn"){
				$(this).addClass("selected");
				count++;
			}
		}
		else if($(this).attr("class")=="btn selected"){
			$(this).removeClass("selected");
			count--;
			if(str == ''){
				$("#selectedSeat").html(str + this.id);
			}
			else {
				var content = $("#selectedSeat").text();
				if(content.indexOf(valu)>=0){
					if(content.indexOf(valu+', ')>=0){
						var contnt = content.replace((valu+', '),' ');
						$("#selectedSeat").html(contnt);
					}
					else{
						var contnt = content.replace(valu,' ');
						$("#selectedSeat").html(contnt);
					}
				}
				else{
					$("#selectedSeat").html(str + ", " + this.id);
				}
				
			}
		}
		str = $("#selectedSeat").text();
		str = $.trim(str);
		if(str.substring(str.length-1)==','){
			$("#selectedSeat").html(str.substring(0,str.length-1));
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
				<td><input type="button" value="1"  class="btn" id="btn1"  /></td>
				<td><input type="button" value="2"  class="btn" id="btn2"  /></td>
				<td>&nbsp; </td>
				<td><input type="button" value="3"  class="btn" id="btn3"  /></td>
				<td><input type="button" value="4"  class="btn" id="btn4"  /></td>
			</tr>

			<tr>
				<td><input type="button" value="5"  class="btn" id="btn5"  /></td>
				<td><input type="button" value="6"  class="btn" id="btn6"  /></td>
				<td>&nbsp; </td>
				<td><input type="button" value="7"  class="btn" id="btn7"  /></td>
				<td><input type="button" value="8"  class="btn" id="btn8"  /></td>
</tr>

<tr>
<td><input type="button" value="9"  class="btn" id="btn9"  /></td>
<td><input type="button" value="10"  class="btn" id="btn10"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="11"  class="btn" id="btn11"  /></td>
<td><input type="button" value="12"  class="btn" id="btn12"  /></td>
<td>&nbsp; </td>
<td> selected seat</td>
</tr>

<tr>
<td><input type="button" value="13"  class="btn" id="btn13"  /></td>
<td><input type="button" value="14"  class="btn" id="btn14"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="15"  class="btn" id="btn15"  /></td>
<td><input type="button" value="16"  class="btn" id="btn16"  /></td>
</tr>
<tr>
<td><input type="button" value="17"  class="btn" id="btn17"  /></td>
<td><input type="button" value="18"  class="btn" id="btn18"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="19"  class="btn" id="btn19"  /></td>
<td><input type="button" value="20"  class="btn" id="btn20"  /></td>
<td><input type="button" value="book" name="cmdbook" /></td></tr>
<tr>
<td><input type="button" value="21"  class="btn" id="btn21"  /></td>
<td><input type="button" value="22"  class="btn" id="btn22"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="23"  class="btn" id="btn23"  /></td>
<td><input type="button" value="24"  class="btn" id="btn24"  /></td>
</tr>
<tr>
<td><input type="button" value="25"  class="btn" id="btn25"  /></td>
<td><input type="button" value="26"  class="btn" id="btn26"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="27"  class="btn" id="btn27"  /></td>
<td><input type="button" value="28"  class="btn" id="btn28"  /></td>
</tr>
<tr>
<td><input type="button" value="29"  class="btn" id="btn29"  /></td>
<td><input type="button" value="30"  class="btn" id="btn30"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="31"  class="btn" id="btn31"  /></td>
<td><input type="button" value="32"  class="btn" id="btn32"  /></td>
</tr>
<tr>
<td><input type="button" value="33"  class="btn" id="btn33"  /></td>
<td><input type="button" value="34"  class="btn" id="btn34"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="35"  class="btn" id="btn35"  /></td>
<td><input type="button" value="36"  class="btn" id="btn36"  /></td>
</tr>
<tr>
<td><input type="button" value="37"  class="btn" id="btn37"  /></td>
<td><input type="button" value="38"  class="btn" id="btn38"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="39"  class="btn" id="btn39"  /></td>
<td><input type="button" value="40"  class="btn" id="btn40"  /></td>
</tr>
<tr>
<td><input type="button" value="41"  class="btn" id="btn41"  /></td>
<td><input type="button" value="42"  class="btn" id="btn42"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="43"  class="btn" id="btn43"  /></td>
<td><input type="button" value="44"  class="btn" id="btn44"  /></td>
</tr>
<tr>
<td><input type="button" value="45"  class="btn" id="btn45"  /></td>
<td><input type="button" value="46"  class="btn" id="btn46"  /></td>
<td>&nbsp; </td>
<td><input type="button" value="47"  class="btn" id="btn47"  /></td>
<td><input type="button" value="48"  class="btn" id="btn48"  /></td>
</tr>
<tr>
<td><input type="button" value="49"  class="btn" id="btn49"  /></td>
<td><input type="button" value="50"  class="btn" id="btn50"  /></td>
<td><input type="button" value="51"  class="btn" id="btn51"  /></td>
<td><input type="button" value="52"  class="btn" id="btn52"  /></td>
<td><input type="button" value="53"  class="btn" id="btn53"  /></td>
</tr>
</table>
<label id="selectedSeat"></label>
</div>
</form>

</body>
</html>
