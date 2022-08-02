<?php
 
  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LctpKcZAAAAAKwyiPMqqZfo4mvYqWLy55gNe3Sq';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
        {
            $succMsg = 'Your contact request have submitted successfully.';
        }
        else
        {
            $errMsg = 'Robot verification failed, please try again.';
        }
   }
?>







<?php  
	
	session_start();
	include('conn.php');

	$query=mysqli_query($conn,"select * from customers");
	if (mysqli_num_rows($query) == 0)
		{
			echo "Login Failed. No Customers Found!";
		}
	else{
				
		}
	
			


	if(isset($_GET['ed'])){
		

		$id = $_GET['ed'];
	
		$query1=mysqli_query($conn,"select * from `customers` where cu_id = '$id' ");
		
		
		if (count($query1) == 1)
			{
			$row=mysqli_fetch_array($query1);
			$name=$row[1];
			$age=$row[2];
			$CNIC=$row[3];
			$phone=$row[4];
			$address=$row[5];
			$gender=$row[6];
			
			
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
	<h3>Customers Data</h3>





	<form action="update.php" method="POST">
		<input class="form-control" type="hidden" name="id" value="<?php if(isset($_GET['ed'])) echo $id; ?>">
		<div class="form-group">
		Enter Name :<input class="form-control" type="text" name="name" value="<?php if(isset($_GET['ed'])) echo $name; ?>">
		</div>
		<div class="form-group">
		Enter  Age:<input class="form-control" type="text" name="age" value="<?php if(isset($_GET['ed']))echo $age; ?>">
		</div>
		<div class="form-group">
		Enter  CNIC:<input class="form-control" type="text" name="CNIC" value="<?php if(isset($_GET['ed']))echo $CNIC; ?>">
		</div>
		<div class="form-group">
		Enter  Phone:<input class="form-control" type="text" name="phone" value="<?php if(isset($_GET['ed']))echo $phone; ?>">
		</div>
		<div class="form-group">
		Enter  Address:<input class="form-control" type="text" name="address" value="<?php if(isset($_GET['ed']))echo $address; ?>">
		</div>
		<div class="form-group">
		Enter  Gender:<input class="form-control" type="text" name="gender" value="<?php if(isset($_GET['ed']))echo $gender; ?>">
		</div>

		<div class="g-recaptcha" data-sitekey="6LctpKcZAAAAANA7YDEFJ1gXUjGvDzRyg8T0gey6"></div>

		<?php if(isset($_GET['ed'])) { ?>
		<input class="btn btn-primary" type="submit" name="update" value="update">
		<?php } else {?>	
		<input class="btn btn-primary" type="submit" name="insert">




		<?php }?>
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
			<th scope="col">Update</th>
			<th scope="col">Delete</th>
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

 			<td><a href="customer.php?ed= <?php echo $row[0]; ?>" class='btn btn-info' >Edit</a></td>
 			
 			<td><a href="update.php?del= <?php echo $row[0]; ?>" class='btn btn-danger' >Delete</a></td>
 		</tr>
 	<?php }?>
 	</tbody>
 	</table>


 	



</div>

													<!--Google reCaption-->
<script src='https://www.google.com/recaptcha/api.js'></script>



													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>