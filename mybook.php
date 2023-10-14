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
	<link href="css/footerstyle.css" rel="stylesheet">
	<style>
	body{
		background-color:whitesmoke;
	}
	.footer-distributed{
	background: #331a00;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 18px sans-serif;
	padding: 55px 50px;

} 
button{
	background-color:red;
	color: white;
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
                     <a class="nav-link " href="services.php">Services</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="tourist.php">Places to Visit</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="mybook.php">My Bookings</a>
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
	<br>
			<br>
			<br>
    <!-- Page Content -->
            <center><h1 class="my-4">Homestay Bookings</h1></center>
           <!-- Services Section --> 
	<br>
			<center>
			<table border="1" style="width:1100px;padding:5px;text-align:center;">
			<tr>
			<th>Sl.No</th>
			<th>Guest Name</th>
			<th>Booked from</th>
			<th>Booked Till</th>
			<th>Room</th>
			<th>Adults</th>
			<th>Children</th>
			<th>Food Type</th>
			<th>Amount</th>
			<th>Status</th>			
			<th>Id Proof</th>			
			
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
	$type=$row0[6];
	$room=$row0[10];
	$amt=$row0[12];
	$status=$row0[13];
	$doc=$row0[14];
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
			<td><?php echo $type; ?></td>
			<td><?php echo $amt; ?></td>
			<td><?php echo $status; ?></td>
			<td><?php echo '<img src="data:image;base64,'.base64_encode($row0[14]).'"alt="image" style="width:100px;height:100px;">';?></td>
			<td><?php if($status=='booked and Paid') { ?><a href="mybook.php?delhid=<?php echo $hid; ?>" onclick="return confirm('Are You Sure?')"><button>Cancel Booking</button></a><?php } ?></td>
			
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

$sql = "update hbooking set status='Cancelled. amount will be refunded' where id='".$delhid."'";
$sql = "delete from hbooking where id='".$delhid."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('Booking Cancelled amount will be refunded within 24 hours...');
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
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			
       
 <!--footer starts from here-->
  <?php include('footer1.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
