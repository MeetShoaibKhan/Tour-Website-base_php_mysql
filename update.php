<?php
	
	session_start();
	include('conn.php');


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



else if(isset($_POST['update'])){

		
		$id=$_POST['id'];
		$name=$_POST['name'];
		$age=$_POST['age'];
		$CNIC=$_POST['CNIC'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		
	
		$command="UPDATE customers SET name = '$name', age = '$age', CNIC = '$CNIC', phone = '$phone', address = '$address', gender = '$gender'  WHERE cu_id = '$id'";
		if ($conn->query($command) === TRUE) {
		    echo "Update successfull";
		} else {
		    echo "Error: " . $command . "<br>" . $conn->error;
				}


	}

else if(isset($_GET['del'])){

		$id = $_GET['del'];

		$command = "DELETE FROM customers WHERE cu_id = '$id'";
		if($conn->query($command) == TRUE)
		{
			echo 'Delete successfull';
		}
		else {
			echo "Error" . $command . "<br>" . $conn->error;
		}

}



	?>


