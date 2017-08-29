<?php	
include("main.php");
if(isset($_POST['login']))
{
	$con=mysql_connect("localhost","root","")or die("connectio not found").mysql_error();
	$db=mysql_select_db("bus")or die("database not found").mysql_error();
	if(isset($_POST["login"]))
	{
		$user=$_POST['user'];
		$pwd1=$_POST['pwd1'];
		$sql="SELECT * FROM bus.user WHERE u_user='".$user."'AND u_pwd1='".$pwd1."' LIMIT 1";
		
		$res=mysql_query($sql);
		if(mysql_num_rows($res)==1)
		{
			$_SESSION["hardik"]="$user";
			echo"<script>alert('You Are SuccessFuly Login')</script>";
			header("location:index.php");
			
		}
		else
		{
			echo"<script>alert('Enter Valid Username and Password')</script>";
		}
	}
	
}
/*function mb_send_mail(*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login</title>
<link rel="stylesheet" type="text/css" href="login_style.css">
<link rel ="stylesheet" type="text/css" href="slider.css">
</head>
<script type="text/javascript">
window.history.forward();
	function noBack()
	{
		window.history.forward();
	}
</script>
<body onLoad="noBack();"onpageshow="if(event.persisted) noBack();"onUnload=""> 
<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post">
		<div class="input-group">
		
		<input type="text"  name="user" placeholder= "Enter your username" required>
		</div>
		
		<div class="input-group">
		
		<input type="password" name="pwd1" 
        placeholder="Enter Your Password" required>
		</div>
		
		
       	<center><input type="submit" name="login" 
        value="Login" class="btn"/> </button></center></div>
        
        
        
        
        <center><a href="forget.php">Forget Password?</a></center>
			
			
			<center>New User? <a href="register.php">Sign up</a></center>
		
			
	</form>


</body>
</html>

