<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE php>
<html lang="en">
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
	<style>
	body{
		background-color:whitesmoke;
	}
	</style>
</head>
<body>
    <?php include('navigation.php'); ?>
    <!-- Page Content -->
    <div class="container" style="width:100%;">
	 
        <div class="services-bar"style="width:100%;">
            <h1 class="my-4">Homestay Bookings</h1>
			        
			</div>
            <!-- Services Section -->
            <div class="row" style="width:100%;">
			<center><br>
			<table border="1" style="width:1100px;padding:5px;text-align:center;">
			<tr>
			<th>Sl.No</th>
			<th>Booked for</th>
			<th>Booked Till</th>
			<th>Guest Name</th>
			<th>Room</th>
			<th>Adults</th>
			<th>Children</th>
			<th></th>
			</tr>
			<?php
include("config.php");
$sql0 = "select * from hbooking where email='".$_SESSION['user']."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$hid=$row0[0];
	$name=$row0[1];
	$date1=$row0[2];
	$date2=$row0[3];
	$adult=$row0[4];
	$child=$row0[5];
	$room=$row0[9];
	$sl+=1;
	?>
    <tr>
			<td><?php echo $sl; ?>.</td>
			<td><?php echo $name; ?></td>
			<td><?php echo $date1; ?></td>
			<td><?php echo $date2; ?></td>
			<td><?php echo $room; ?></td>
			<td><?php echo $adult; ?></td>
			<td><?php echo $child; ?></td>
			<td><a href="mybook.php?delhid=<?php echo $hid; ?>"><button>Cancel Booking</button></a></td>
			
	</tr>
	<?php
}
}
?>

<?php
include("config.php");
if(isset($_GET['delhid']))
{
$delhid=$_GET['delhid'];

$sql = "delete from hbooking where id='".$delhid."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('booking DELETED');
</script>";
echo "<script> location.href='mybook.php'; </script>";
}
}

?>
			
			</table>
 </center>
			</div>   
			<br>
			<br>
			<hr>
			<br>
			<div class="services-bar"style="width:100%;">
            <h1 class="my-4">Service Bookings</h1>
			        
			</div>
            <!-- Services Section -->
            <div class="row" style="width:100%;">
			<center><br>
			<table border="1" style="width:1100px;padding:5px;text-align:center;">
			<tr>
			<th>Sl.No</th>
			<th>Booked for</th>
			<th>Estate Name</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Service</th>
			<th></th>
			</tr>
			<?php
include("config.php");
$sql0 = "select * from sbooking where email='".$_SESSION['user']."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$sid=$row0[0];
	$name=$row0[1];
	$phone=$row0[2];
	$date=$row0[3];
	$address=$row0[4];
	$service=$row0[7];
	$sl+=1;
	?>
    <tr>
			<td><?php echo $sl; ?>.</td>
			<td><?php echo $date; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $phone; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $service; ?></td>
			<td><a href="mybook.php?delsid=<?php echo $sid; ?>"><button>Cancel Booking</button></a></td>
			
	</tr>
	<?php
}
}
?>

<?php
include("config.php");
if(isset($_GET['delsid']))
{
$delsid=$_GET['delsid'];

$sql = "delete from sbooking where id='".$delsid."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('booking DELETED');
</script>";
echo "<script> location.href='mybook.php'; </script>";
}
}

?>
			
			</table>
 </center>
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
				</div>
				</div>
    </footer>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
