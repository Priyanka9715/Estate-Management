<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo "<script> location.href='index.php'; </script>";
}
?><!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Aramane Estate </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/footerstyle.css" rel="stylesheet">
	<style>
	.footer-distributed{
	background: #331a00;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 18px sans-serif;
	padding: 55px 50px;

} 
	</style>
</head>

<body>
    
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-light top-nav fixed-top">
        <div class="container">
            <a class="navbar-brand" href="file:///C:/xampp/htdocs/Aramane index.php">
            <img src="./images/loog.jpg" width="180" height="80" alt="logo">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link" href="home.php">Home</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="aboutus.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="services.php">Services</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="tourist.php">Places to Visit</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="mybook.php">My Bookings</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link" href="faqs.php">FAQ</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contactus.php">Contact</a>
                  </li>
				 <li class="nav-item">
                     <a class="nav-link" href="logout.php">Logout</a>
                  </li>
				 
               </ul>
            </div>
        </div>
    </nav>
	<!-- full Title -->
	<div class="full-title" style="background-image: url('images/coffee1.jpg')">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">Services
				<small>By Aramane Estate</small>
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Services</li>
			</ol>
		</div>
		<!-- Services Section -->
		<center>
		 
              
            <!-- Services Section -->
            <div class="row">
			<div class="col-lg-4 mb-4">
                  <div class="">
                     <h4 class=""></h4>
                     <div class="card-img">
                        <img class="img-fluid" src="" alt="" />
                     </div>
                     <div class=""><br><br><br><br><br>
                        <p class="card-text"><b><h1>Our Serives Are :</h1></b></p>
                     </div>
                     <div class="">
                        <a href="" class=""></a>
                     </div>
                  </div>
               </div>
			   
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Home Stay</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/home2.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">Book Your homestay and visit many tourist places</p>
                     </div>
                    <div class="card-footer">
                        <a href="homestay.php" class="btn btn-primary">view</a>
                     </div>
                  </div>
               </div>
           
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Estate  Supplies</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/jeep1.jpg" alt="" />
                     </div>
                     <div class="card-body">
                        <p class="card-text">We provide the vehicals for loading the goods and transferring them to specified destiny.</p>
                     </div>
                     <div class="card-footer">
                        <a href="service.php" class="btn btn-primary">View</a>
                     </div>
                  </div>
               </div>
            </div>
			<br>
			<br>
			</center>
			
			</div>
			</div>
   <!--footer starts from here-->
    <?php include('footer1.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>