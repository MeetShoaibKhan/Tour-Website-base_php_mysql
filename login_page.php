<?php
	session_start();
	include('conn.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
</head>
<body>
	<h2>Login Form</h2>
	<form method="POST" action="login.php">

	<div class="form-group">
	<label>Username:</label> <input class="form-control" type="text" value="<?php if (isset($_COOKIE["user"])){echo $_COOKIE["user"];}?>" name="username">
	</div>

	<div class="form-group">
	<label>Password:</label> <input class="form-control" type="password" value="<?php if (isset($_COOKIE["pass"])){echo $_COOKIE["pass"];}?>" name="password"><br><br>
	</div>

	<div class="form-group form-check">
	<input class="form-check-input" type="checkbox" name="remember"><label class="form-check-label">remember me</label><br><br>
	</div>

	
	<input class="btn btn-primary" type="submit" value="Login" name="login">
	

	</form>
	
	<span>
	<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
		}
		unset($_SESSION['message']);
	?>
</span>
</body>
</html>