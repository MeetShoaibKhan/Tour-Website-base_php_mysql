<?php
  session_start();
  include('conn.php');
  $id = $_GET['id'];
  $query=mysqli_query($conn,"select * from `tour` LEFT JOIN hotel ON hotel_id = hotel.h_id where tour.id = '$id'");
  $row=mysqli_fetch_array($query);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Info</title>
															<!--Bootstrap Link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700|Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<!-- Page Content -->
<div class="container">



<br>
    
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded" style="box-shadow: 1px 4px 3px rgba(0,0,0,0.4),
         1px 8px 13px rgba(0,0,0,0.1),
         1px 18px 23px rgba(0,0,0,0.1)">
      <a class="navbar-brand cc" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link cc" href="#" style="font-size: 18px">About<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link cc" href="#" style="font-size: 18px">Contact</a>
          </li>
        </ul>
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#" style="font-size: 15px"><i class="fa fa-wifi" aria-hidden="true"></i>
</a>
          </li>
        </ul>
      </div>
        </nav>







  <!-- Portfolio Item Heading -->
  <h1 class="my-4"><?php echo $row[6]; ?></h1>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-8">
      <img class="img-fluid" src="<?php echo $row[3]; ?>" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-3"><?php echo "Hotel :" . $row[5]; ?></h3>
      <p></p>
      <h3 class="my-3"><?php echo 'Rs.' . $row[2]; ?></h3>
      <!--<ul>
        <li>Lorem Ipsum</li>
        <li>Dolor Sit Amet</li>
        <li>Consectetur</li>
        <li>Adipiscing Elit</li>
      </ul>-->
    </div>

  </div>
  <!-- /.row -->



</div>
<!-- /.container -->
	
















													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>