<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>





	<form action="update.php" method="POST">
		<div class="form-group">
		Enter Name :<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="form-group">
		Enter  Age:<input class="form-control" type="text" name="age" value="<?php echo $age; ?>">
		</div>
		<div class="form-group">
		Enter  CNIC:<input class="form-control" type="text" name="CNIC" value="<?php echo $CNIC; ?>">
		</div>
		<div class="form-group">
		Enter  Phone:<input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>">
		</div>
		<div class="form-group">
		Enter  Address:<input class="form-control" type="text" name="address" value="<?php echo $address; ?>">
		</div>
		<div class="form-group">
		Enter  Gender:<input class="form-control" type="text" name="gender" value="<?php echo $gender; ?>">
		</div>
		<input class="btn btn-primary" type="submit" name="insert">
	</form>

	

</body>
</html>