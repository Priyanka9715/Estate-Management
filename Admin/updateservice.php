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
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
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
		box-shadow:1px 1px 2px 1px darkcyan;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}</style> 
 </head>
   <body class="app sidebar-mini rtl">
   <main class="app-content"> 
 <?php include('navigation.php'); ?>
    <!-- Page Content -->
<div>
  <form action="#" method="post">
<center>
<select name="id" required >
<option value="">select Service</option>
<?php
include("config.php");
$id=$_POST['id'];
$sql0 = "select * from services";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	?>
    <option value="<?php echo $row0['id']?>"><?php echo $row0['name']?> - <?php echo $row0['id']?></option>
	<?php
}
}
?>
</select>
	<br>
	
<input type="submit" name="search" value="Search"/>
</form>
</center>
<?php
include("config.php");
if(isset($_POST['search']))
{
$id=$_POST['id'];
$sql0 = "select * from services where id='".$id."' ";
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
                        <img class="img-fluid" src="ser/<?php echo $img; ?>" alt="">
                     </div>
                     <div class="card-body">
                        <p class="card-text" style="font-weight:900">Rs.<?php echo $price; ?>/day</p>
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
				echo "<script> location.href='updateservice.php'; </script>";
	}
	
}
?>
</div>



<div>
<form action="#" method="post">
<center>
<select name="hid" required >
<option value="">select Homestay</option>
<?php
include("config.php");
$id=$_POST['id'];
$sql0 = "select * from homestay";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	?>
    <option value="<?php echo $row0['id']?>"><?php echo $row0['name']?> - <?php echo $row0['id']?></option>
	<?php
}
}
?>
</select>
	<br>
	
<input type="submit" name="hsearch" value="Search"/>
</form>
</center>
<?php
include("config.php");
if(isset($_POST['hsearch']))
{
$hid=$_POST['hid'];
$sql0 = "select * from homestay where id='".$hid."' ";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	$id=$row0[0];
	$name=$row0[1];
	$price=$row0[2];
	$img=$row0[3];
	?>
				<div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header"><?php echo $name; ?></h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/<?php echo $img; ?>" alt="">
                     </div>
					 <form method="POST" action="#">
                     <div class="card-body">
                        <p class="card-text" style="font-weight:900">Rs.<?php echo $price; ?>/day</p>
						Update Price<input class="form-control" type="text" name="price" value="<?php echo $price; ?>">
						<input class="form-control" type="text" name="homeid" value="<?php echo $id; ?>" hidden>
                     </div>
                     <div class="card-footer">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                     </div>
					 </form>
                  </div>
               </div>
	<?php
}
}
}
if(isset($_POST['update']))
{
	$price=$_POST['price'];
	$hid=$_POST['homeid'];
	$sql1 = "update homestay set price='".$price."' where id='".$hid."'";
	if(mysqli_query($con,$sql1))
	{
		echo "<script>
					alert('Price Updated');
				</script>";
				echo "<script> location.href='updateservice.php'; </script>";
	}
	
}
?>
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
  </body>
</html>



