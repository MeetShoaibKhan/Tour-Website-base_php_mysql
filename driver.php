<?php  
	
	session_start();
	include('conn.php');

	$query=mysqli_query($conn,"select * from drivers");
	if (mysqli_num_rows($query) == 0)
		{
			echo "Login Failed. No drivers Found!";
		}
	else{
				
		}
	if(isset($_POST['insert'])){
		
	
		$name=$_POST['name'];
		$age=$_POST['age'];
		$CNIC=$_POST['CNIC'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		
	
		$command="insert into customers (name,age,CNIC,phone,address,Gender) values ('$name','$age','$CNIC','$phone','$address','$gender')";
		if ($conn->query($command) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $command . "<br>" . $conn->error;
		}
	}
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Control page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700|Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
 		table,td,th
 		{
 			border : 1px solid black;
 			text-align: center;
 		}

 	</style>
</head>
<body>
	<div class="container">
	<h3>Drivers Data</h3>
	<form action="driver.php" method="POST">
		<div class="form-group">
		Enter Name :<input class="form-control" type="text" name="name">
		</div>
		<div class="form-group">
		Enter  Age:<input class="form-control" type="text" name="age">
		</div>
		<div class="form-group">
		Enter  CNIC:<input class="form-control" type="text" name="CNIC">
		</div>
		<div class="form-group">
		Enter  Phone:<input class="form-control" type="text" name="phone">
		</div>
		<div class="form-group">
		Enter  Address:<input class="form-control" type="text" name="address">
		</div>
		<div class="form-group">
		Enter  Gender:<input class="form-control" type="text" name="gender">
		</div>
		<input class="btn btn-primary" type="submit" name="insert">
	</form>


	<table class="table table-dark">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Age</th>
			<th scope="col">CNIC</th>
			<th scope="col">Phone</th>
			<th scope="col">Address</th>
			<th scope="col">Gender</th>
		</tr>
	</thead>
	<tbody>
 	<?php  
 	while($row=mysqli_fetch_array($query)) {
 	 ?>
 		<tr>
 			<td scope="row"><?php echo $row[0]; ?></td>
 			<td><?php echo $row[1]; ?></td>
 			<td><?php echo $row[2]; ?></td>
 			<td><?php echo $row[3]; ?></td>
 			<td><?php echo $row[4]; ?></td>
 			<td><?php echo $row[5]; ?></td>
 			<td><?php echo $row[6]; ?></td>
 		</tr>
 	<?php }?>
 	</tbody>
 	</table>


 	



</div>





													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>