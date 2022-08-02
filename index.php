<!DOCTYPE html>
<html>
<head>
	<title></title>
														<!--Bootstrap Link-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Cabin+Condensed:600,700|Karla&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




	<style type="text/css">
		
		body
{
	margin-top: 70px;
	font-family: 'Karla', sans-serif;
	background-color: rgb(232,229,223);



  background: url('backgroud2.jpg') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover;



}
.cc
{
	font-family: 'Cabin Condensed', sans-serif;

}
a
{
	color: gray;
	font-size: 10px;
}
a:hover
{
	color: white;
}

	</style>
</head>
<body >
	
	<div class="container">
		
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

<!--JUMBOTRON CODE-->
	<div  class="container">
	<div  class="jumbotron" style="margin-top: 30px;box-shadow: 1px 4px 3px rgba(0,0,0,0.4),
				 1px 8px 13px rgba(0,0,0,0.1),
				 1px 18px 23px rgba(0,0,0,0.1);">
		<h1 class="display-4 cc"><i class="fa fa-camera-retro" aria-hidden="true"></i>Welcome!</h1>
		<p>To see the login page press the button below. the web application is not fully complete. some functionalities will not work. So be Advise</p>
		<hr>
		<p>Press the button bellow To login</p>
		<a class="btn btn-primary btn-lg cc" href="admin.php"> Login here</a>
	</div>

			<div class="row" style="margin-top: 30px" >
				<div class="col-lg-12">
					<div class="card" style="background-color: rgb(232,229,223); box-shadow: 1px 4px 3px rgba(0,0,0,0.4),
				 1px 8px 13px rgba(0,0,0,0.1),
				 1px 18px 23px rgba(0,0,0,0.1);">
					  
					  <div class="card-body rounded">
					  	<p class="card-text"><a href="#">home >> about</a></p>
					  	<a href=""><i class="fa fa-twitter" aria-hidden="true"></i> </a>
					  	<a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i> </a>
					  	<a href=""><i class="fa fa-google-plus" aria-hidden="true"></i> </a>
					  	<a href=""><i class="fa fa-pinterest" aria-hidden="true"></i> </a>

					    <h5 class="card-title display-4 cc">Tour Website</h5>
					    <!-- <p class="card-text" style="padding-left:12px ">Some quick example text to build on the card title and make up the bulk of the card's content.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vehicula turpis eget magna dapibus, et ultrices</p> -->

					    <?php 
					    session_start();
						include('conn.php');
						$query=mysqli_query($conn,"select * from `tour` LEFT JOIN hotel ON hotel_id = hotel.h_id");
					    
					    while($row=mysqli_fetch_array($query)) { ?>
					    <div class="col-lg-4" style="float: left;">
					    <div class="card" style="width: 18rem;">
							  <img src="<?php echo "$row[3]" ?>" class="img-thumbnail" class="card-img-top" alt="...">
							  <div class="card-body">
							    <h5 class="card-title"><?php echo $row[6]; ?></h5>
							    <p class="card-text"><?php echo 'Rs.' . $row[2]; ?></p>
							    <p class="card-text"><?php echo $row[5]; ?></p>

							    <a href="info.php?id=<?php echo $row[1]; ?>" class="btn btn-primary" target="_blank">See more details</a>
							  </div>
						</div>

						</div>
						<?php 
						
						} ?>

					   
					   
					    <hr>





		










				  	  </div>
					</div>
				</div>
				<!--	
				
				<div class="col-lg-4">
					  <form class="form-inline">
					  	
					  	<div class="form-group mx-sm-3 mb-2">
					    	<label for="inputPassword2" class="sr-only cc">Search...</label>
					    	<input type="text" class="form-control" placeholder="search">
					  	</div>
					  	<button type="submit" class="btn btn-primary mb-2 cc">Search</button>
					  </form>
					  <nav class="navbar navbar-expand-lg navbar-dark bg-info rounded" style="margin-top: 20px;box-shadow: 1px 4px 3px rgba(0,0,0,0.4),
				 1px 8px 13px rgba(0,0,0,0.1),
				 1px 18px 23px rgba(0,0,0,0.1)">
					  	<h5 class="center cc">Recent Posts</h5>

					  </nav>
					  <br>
					  <div style="margin-left:15px ">
					    	<a href="#" style="border-bottom: 1px solid #333; width: 100%">CORRECT WAY TO USE A SANITARY TOWEL</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">If You’re Not Using Castor Oil, You’re Missing Out. Here Are 7 Things You Need To Know</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">How to Remove Dark Spots from Your Face and Hands (Try This Method!)</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">This Natural Recipe Will Make Your Facial Hair Disappear Forever</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">IF YOU’RE A WOMAN WITH CHIN WHISKERS, PAY ATTENTION. HERE’S WHAT IT MEANS!</a>
							<br>
						</div>
						<nav class="navbar navbar-expand-lg navbar-dark bg-info rounded" style="margin-top: 20px;box-shadow: 1px 4px 3px rgba(0,0,0,0.4),
				 1px 8px 13px rgba(0,0,0,0.1),
				 1px 18px 23px rgba(0,0,0,0.1)">
					  	<h5 class="center cc">Categories</h5>

					  </nav>	

				</div>
				-->
				</div>	
				

				<div class="rounded" style="margin-top: 30px;margin-bottom: 30px ;background-color: rgb(0,199,205);height:400px;box-shadow: 14px 14px 13px rgba(0,0,0,0.4),
				 8px 8px 13px rgba(0,0,0,0.1),
				 18px 18px 23px rgba(0,0,0,0.1);" >
					<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<h3 class="cc" style="padding:15px;color: green ">About This Theme</h3>
							<h4 class="cc" style="padding-left:15px;color: white ">Glimor</h4>
							<p style="padding-left:15px;color: white;font-size: 14px ">Gilmor is a free fashion Magazine Responsive WordPress theme. It is SEO Optimize with built in schema data markup for posts and breadcrumbs. More than 600+ Google web fonts to choose from and tons of premium-ish features.</p>
						</div>
						<div class="col-lg-4">
							<h3 class="cc" style="padding:15px;color: green ">Recent Posts</h3>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">CORRECT WAY TO USE A SANITARY TOWEL</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">If You’re Not Using Castor Oil, You’re Missing Out. Here Are 7 Things You Need To Know</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">How to Remove Dark Spots from Your Face and Hands (Try This Method!)</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">This Natural Recipe Will Make Your Facial Hair Disappear Forever</a>
							<br>
							<a href="#" style="border-bottom: 1px solid #333; width: 100%">IF YOU’RE A WOMAN WITH CHIN WHISKERS, PAY ATTENTION. HERE’S WHAT IT MEANS!</a>
							<br>
						</div>
						<div class="col-lg-4">
							<h3 class="cc" style="padding:15px;color: green ">Hot Topics</h3>
							
						</div>
					</div>
					</div>
				</div>		
		
	</div>
	
	<div class="footer-bottom">
        <div class="container">
            <p class="pull-left copyright">© Copyright Footer 2020 All right reserved. </p>
       
        </div>
    </div>








													<!--Javascripte,j.query Links-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>