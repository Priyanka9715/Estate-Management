<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE php>
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
</head>
<body>
    <?php include('nav.php'); ?>
    <!-- Page Content -->
    <div class="container">
	 
        <div class="services-bar">
            <h1 class="my-4">Our Services : </h1>
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
	$desc=$row0[2];
	$img=$row0[3];
	?>
				<div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header"><?php echo $name; ?></h4>
                     <div class="card-img">
                        <img class="img-fluid" src="services/<?php echo $img; ?>" alt="">
                     </div>
                     <div class="card-body">
                        <p class="card-text" style="font-weight:900"><?php echo $desc; ?></p>
                     </div>
                     <div class="card-footer">
                        <a href="services.php?delid=<?php echo $id; ?>" class="btn btn-primary">Delete</a>
                     </div>
                  </div>
               </div>
	<?php
}
}
if(isset($_GET['delid']))
{
	$delid=$_GET['delid'];
	$sql1 = "delete from services where id='".$delid."'";
	if(mysqli_query($con,$sql1))
	{
		echo "<script>
					alert('service Deleted');
				</script>";
				echo "<script> location.href='services.php'; </script>";
	}
	
}
?>
</div>
</div>
</div>
</div>
               
               
			   
 <!--footer starts from here-->
    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col">
					<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
					<p class="mb10">Aramane Estate</p>
					<p><i class="fa fa-location-arrow"></i> Aramane Estate - Magehalli Village,Gendehalli Post,Belur Taluk,Hassan District ,Karnataka - 577175 </p>
					<p><i class="fa fa-phone"></i> +91-9482874807 </p>
					<p><i class="fa fa fa-envelope"></i> aramane122@gmail.com </p>
               </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col">
            <div class="footer-logo">
				<a href="#"><img src="images/loog.jpg"width="180" height="80" alt=""/></a>
			</div>
           <p class="copyright text-center">All Rights Reserved. &copy; 2018 <a href="#">Aramane Estate</a> Design By : 
				<a href="https://php.design/">php design</a>
            </p>
            <ul class="social_footer_ul">
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>
		<div class="col-lg-3 col-md-6 col-sm-6" align="right">
					<h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
					<ul class="footer_ul_amrc">
						<li><a href="allman.php">Our Team </a></li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Our Services</a></li>
						<li><a href="contact.php">Get In Touch</a></li>
					</ul>
				</div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>