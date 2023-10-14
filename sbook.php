<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo "<script> location.href='index.php'; </script>";
}
if(isset($_GET['service'],$_GET['sid']))
{
	$service=$_GET['service'];
	$sid=$_GET['sid'];
}
else
{
	echo "<script> location.href='homestay.php'; </script>";
}
?>
<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Aramane Estate</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: pink;  
}  
.containerx {  
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=number], input[type=date], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=number]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
</head>  
<body>
     <?php include('navigation.php'); ?>
	
     </div>
	 <br>
	 <br>
    <!-- Page Content -->
	<br><br>
	<br><br>
	<br><br>

<form action="#" method="POST">  
  <div class="containerx">  
  <center>  <h1>WELCOME TO ARAMANE ESTATE HOMESTAY</h1> </center>
<center>  <h3>Please fill the below form :</h3> </center>  
    <center>  <h2>Service Booking</h2> </center>
  <hr>  
  <label> Guest Name </label>   
<input type="text" name="estate" placeholder= "Estate Name" required />  
<input type="text" name="service" hidden required value="<?php echo $service; ?>" />  
<input type="text" name="sid" hidden required  value="<?php echo $sid; ?>"/>  
<div>  
<label>
Phone :  
</label>  
<input type="text" name="phone" placeholder="phone no." size="10" required> 
<div>  
<label>   
Date On which This Service is needed:  
</label><br>  
<input type="date" name="date" >  
</div> 
Current Address :  
<textarea cols="80" rows="5" placeholder="Current Address" name="address" required>  
</textarea>  
    <button type="submit" class="registerbtn" name="book">BOOK</button>    
</form>
<?php
if(isset($_POST['book']))
{
	error_reporting(1);
	include("config.php");
		
		$estate=$_POST['estate'];
		$phone=$_POST['phone'];
		$date=$_POST['date'];
		$address=$_POST['address'];
		$service=$_POST['service'];
		$sid=$_POST['sid'];
 
		$query = "INSERT INTO `sbooking`(`name`, `phone`, `date`, `address`, `email`, `sid`, `service`) VALUES ('".$estate."','".$phone."','".$date."','".$address."','".$_SESSION['user']."','".$sid."','".$service."')";
           
            if(mysqli_query($con,$query))
			{
			echo "<script> location.href='servicebooked.php'; </script>";
			}
		
}
?>   
    <!--footer starts from here-->
   <?php include('footer.php'); ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>
