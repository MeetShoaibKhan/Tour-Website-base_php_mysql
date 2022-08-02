<?php


	session_start();
	include('conn.php');



	$query1=mysqli_query($conn,"select * from `tour` LEFT JOIN hotel ON hotel_id = hotel.h_id");
	
	if (mysqli_num_rows($query1) == 0)
		{
			echo "Failed. No tours Found!";
		}

	$query2=mysqli_query($conn,"select * from hotel");
	if (mysqli_num_rows($query2) == 0)
		{
			echo "No hotels Found!";
		}





	if(isset($_POST['login'])){

	
		$hotel=$_POST['hotel'];
		$price=$_POST['price'];
		$pic=$_POST['pic'];
	
		$command="insert into tour (hotel_id,price,pic) values ('$hotel','$price','$pic')";
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
	<title>Create tours</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700|Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<form style="" action="create_tours.php" method="POST">
		<label for="hotel">Hotels</label>
		<select name="hotel">
			<?php while($row = mysqli_fetch_array($query2)){ ?>
			<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
			<?php } ?>
		</select><br>
		<label for="price">Price</label>
		<input type="text" name="price"> <br>

		<label for="pic">Picture</label>
		<input type="text" name="pic">
		<input class="btn btn-primary" type="submit" value="Insert" name="insert">
    </form>
    













    <table class="table table-dark">
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Hotel ID</th>
			<th scope="col">Price</th>
			<th scope="col">Picture</th>
			<th scope="col">Hotel Name</th>
			<th scope="col">City</th>
			<th scope="col">Phone</th>
			<th scope="col">Star</th>
			<th scope="col">Address</th>

		</tr>
	</thead>
	<tbody>
 	<?php  
 	while($row=mysqli_fetch_array($query1)) {
 	 ?>
 		<tr>
 			<td scope="row"><?php echo $row[0]; ?></td>
 			<td><?php echo $row[1]; ?></td>
 			<td><?php echo $row[2]; ?></td>
 			<td><?php echo $row[3]; ?></td>
 			<td><?php echo $row[4]; ?></td>
 			<td><?php echo $row[6]; ?></td>
 			<td><?php echo $row[7]; ?></td>
 			<td><?php echo $row[8]; ?></td>
 			<td><?php echo $row[9]; ?></td>
 		</tr>
 	<?php }?>
 	</tbody>
 	</table>

























<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
<?php
    
    

?>