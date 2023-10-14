<?php
session_start();
if(!isset($_SESSION['admin']))
{
	echo "<script> location.href='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:age" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Aramane Estate | Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	body{
		background-color:whitesmoke;
	}
	input{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px skyblue;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px skyblue;
	}</style> 
 </head>
   <body class="app sidebar-mini rtl">
   <main class="app-content">
 <?php include('navigation.php'); ?>
	
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
			<th>Guest Name</th>
			<th>Booked from</th>
			<th>Booked Till</th>
			<th>Email</th>			
			<th>Adults</th>
			<th>Children</th>
			<th>Room</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Id Proof</th>
			
			
			
			
			</tr>
			<?php
include("config.php");
$sql0 = "select * from hbooking";
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
	$phone=$row0[6];
	$address=$row0[7];
	$email=$row0[8];
	$room=$row0[9];
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
			<td><?php echo $phone; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo '<img src="data:image;base64,'.base64_encode($row0[14]).'"alt="image" style="width:100px;height:100px;">';?></td>
			
			
	</tr>
	<?php
}
}
?>

			
			</table>
 </center>
			</div>   
			       <br>
			       <br>
			</div>       
          

			
			</table>
 </center>
	</div>        		


</main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/plugins/select2.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
      $('#sl').click(function(){
      	$('#tl').loadingBtn();
      	$('#tb').loadingBtn({ text : "Signing In"});
      });
      
      $('#el').click(function(){
      	$('#tl').loadingBtnComplete();
      	$('#tb').loadingBtnComplete({ html : "Sign In"});
      });
      
      $('#demoDate').datepicker({
      	format: "dd/mm/yyyy",
      	autoclose: true,
      	todayHighlight: true
      });
      
      $('#demoSelect').select2();
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
	</div>
  </body>
</html>