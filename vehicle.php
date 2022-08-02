<?php  
	
	session_start();
	include('conn.php');

	$query=mysqli_query($conn,"select * from vehicle");
	if (mysqli_num_rows($query) == 0)
		{
			echo "Login Failed. No Vehicle Found!";
		}
	else{
				
		}
	if(isset($_POST['insert'])){
	
	
		$name=$_POST['name'];
		$model_name=$_POST['model_name'];
		$vin_number=$_POST['vin_number'];
		$type=$_POST['type'];
		$manufacturer=$_POST['manufacturer'];
		$status=$_POST['status'];
		$color=$_POST['color'];
		$nameplate=$_POST['nameplate'];
		$capacity=$_POST['capacity'];
		
	
		$command="insert into vehicle (name,model_name,vin_number,type,manufacturer,status,color,nameplate,capacity) values ('$name','$model_name','$vin_number','$type','$manufacturer','$status','$color','$nameplate','$capacity')";	
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
	<h3>Vehicle Data</h3>
	<form action="vehicle.php" method="POST">
		<div class="form-group">
		Enter name :<input class="form-control" type="text" name="name">
		</div>
		<div class="form-group">
		Enter model name :<input class="form-control" type="text" name="model_name">
		</div>
		<div class="form-group">
		Enter vin number :<input class="form-control" type="text" name="vin_number">
		</div>
		<div class="form-group">
		Enter type :<input class="form-control" type="text" name="type">
		</div>
		<div class="form-group">
		Enter manufacturer :<input class="form-control" type="text" name="manufacturer">
		</div>
		<div class="form-group">
		Enter status :<input class="form-control" type="text" name="status">
		</div>
		<div class="form-group">
		Enter color :<input class="form-control" type="text" name="color">
		</div>
		<div class="form-group">
		Enter nameplate :<input class="form-control" type="text" name="nameplate">
		</div>
		<div class="form-group">
		Enter capacity :<input class="form-control" type="text" name="capacity">
		</div>
		<input class="btn btn-primary" type="submit" name="insert">


	</form>


	<table class="table table-dark">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Model Name</th>
			<th scope="col">Vin Number</th>
			<th scope="col">Type</th>
			<th scope="col">Manufacturer</th>
			<th scope="col">Status</th>
			<th scope="col">Color</th>
			<th scope="col">Nameplate</th>
			<th scope="col">Capacity</th>
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
 			<td><?php echo $row[7]; ?></td>
 			<td><?php echo $row[8]; ?></td>
 			<td><?php echo $row[9]; ?></td>
 			
 		</tr>
 	<?php } ?>
 	</tbody>
 	</table>


 	



</div>





													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>