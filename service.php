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
                     <a class="nav-link " href="home.php">Home</a>
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
    <!-- Page Content -->
    <div class="container">
	 
        <div class="services-bar">
            <h1 class="my-4">Our Estate Vehicle Supplies: </h1>
			<h3 class="my-4">For Rent... </h3>
            <!-- Services Section -->
            <div class="row">
			<?php
include("config.php");
$sql0 = "select * from services";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	$id=$row0[0];
	$name=$row0[1];
	$price=$row0[2];
	$desc=$row0[3];
	$img=$row0[4];
	?>
				<div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header"><?php echo $name; ?></h4>
                     <div class="card-img">
                        <img class="img-fluid" src="Admin/images/<?php echo $img; ?>" alt="">
                     </div>
                     <div class="card-body">
                        <p class="card-text" style="font-weight:900">Rs.<?php echo $price; ?>/day</p>
						<p class="card-text" style="font-weight:900"><?php echo $desc; ?></p>
                     </div>
                     <div class="card-footer">
                        <a href="tel:9567676543" class="btn btn-primary">Contact Now</a>
                     </div>
                  </div>
               </div>
	<?php
}
}
?>
</div>
</div>
</div>
</div>
               
               
			   
 <!--footer starts from here-->
    <?php include('footer1.php'); ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>