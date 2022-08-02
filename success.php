<?php
	session_start();
	
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('admin.php');
		exit();
	}
	include('conn.php');
	$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
	
?>
<!DOCTYPE html>
<html>
<head>
<title>MAin Admin Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700|Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	a
	{
		text-decoration: none;
		color: black;
	}
	a:hover
	{
		color: blue;
	}
</style>
</head>
<body>
	<div class="container">
	<h2>Login Success</h2>
	<h3><?php echo "Welcome Mr.".$row['fullname']; ?></h3>
	<br>
<!--	
	<form method="Post" action="">
		<input type="submit" value="Customer" name="customer">
		<input type="submit" value="Drivers" name="drivers">
		<input type="submit" value="Vehicles" name="vehicles">
		<input type="submit" value="Hotels" name="hotels">
		<input type="submit" value="Tours" name="tours">
	</form>
-->
	<button><a href="customer.php" target="_blank">Customers</a></button>
	<button><a href="driver.php" target="_blank">Drivers</a></button>
	<button><a href="vehicle.php" target="_blank">vehicles</a></button>
	<button><a href="hotel.php" target="_blank">Hotels</a></button>
	<button><a href="#" target="_blank">Tours</a></button>
	<button><a href="create_tours.php" target="_blank">Create Tours</a></button>






	<br>
	<br>
	<button><a href="logout.php">Logout</a></button>
</div>














													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>