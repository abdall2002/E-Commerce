<?php 	
	
	if(isset($_POST['submit']) )	
	{
	include 'config.php';
	$Username=$_POST['Username'];
	$Password=$_POST['password'];
	
	$query="SELECT * FROM `admin` WHERE `Admin_Username`='$Username' and `Admin_Password`='$Password'";
	$sql=mysqli_query($conn,$query);
	if($sql->num_rows>0)
	{
	session_start();
	$_SESSION['Username']= $Username;
	
	?>
	<script type="text/javascript">
	alert("Logged in successfully");
	
	</script>
	<?php	
	header("location: admincpanel.php");
	}
	else
	{
	?>
	
	<script type="text/javascript">
	alert("the username and password not found try agin");
	
	</script>
	
	<?php
	}
	
	}?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="register.css">

	<title>Login Form</title>
</head>
<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login For Admin</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="Username" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="password" name="password" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Sign Up</a></p>
		</form>
	</div>
</body>
</html>