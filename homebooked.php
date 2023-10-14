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
    <?php include('navigation.php'); ?>
	<form action="statuss.php">
	<br>
	 <center><p><h1> HOMESTAY HAS BEEN BOOKED FOR YOU SUCCESSFULLY...!!!</h1></p>
	 <center><p><h1> Heartly Welcome...</h1></p>
	 
 <p>
   <div class="col-md-4">
  <a class="btn btn-lg btn-secondary btn-block"href="mybook.php"><h2>View</h2></a><br>
  </p>
  </div>
  </center>
</form>
    <!-- /.container -->
    <!--footer starts from here-->
    <?php include('footer.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>