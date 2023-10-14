<?php
session_start();
if(!isset($_SESSION['user']))
{
	echo "<script> location.href='index.php'; </script>";
}
if(isset($_GET['hstay'],$_GET['hid'],$_GET['a']))
{
	$room=$_GET['hstay'];
	$hid=$_GET['hid'];
	$price=$_GET['a'];
}
else
{
	echo "<script> location.href='homestay.php'; </script>";
}
include("config.php");
$date=date('Y-m-d');
$sql0 = "select date1,date2 from hbooking where hid='".$hid."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);
$dates=array();
$x=0;
if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	$dat1=$row0[0];
	$dat2=$row0[1];
	while($dat1<=$dat2)
	{
		$dates[]=$dat1;
		$dat1=date('Y-m-d', strtotime($dat1. '+1 days'));
		$x+=1;
		
	}
}
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
	
	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	
	
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/footerstyle.css" rel="stylesheet">
	<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: white;  
}  
.containerx {  
    padding: 50px;  
  background-color ;
border:2px solid brown ;  
}  
 .double{border-style:  double ;} 
 
input[type=text], input[type=number], input[type=date], textarea,input[type=tel] {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=number]:focus {  
  background-color: lightgreen;  
  outline: none;  
} 
label{
	font-weight:bold;
} 
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: green;  
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
	 <br>
<form action="#" method="POST" enctype="multipart/form-data">
<br><br>
  <div class="containerx">  
  <center>  <h1>WELCOME TO ARAMANE ESTATE HOMESTAY</h1> </center>
   <center>  <h2>Home Stay Booking </h2> </center>
<center>  <h3>Please fill the below form :</h3> </center>
<p >     
  <hr class="double">  
  <label> Guest Name </label>   
<input type="text" name="guestname" placeholder= "Guest Name"  pattern="[A-Za-z\s]+" title="letters only" required  />  
<input type="text" name="room" hidden required value="<?php echo $room; ?>" />  
<input type="text" name="hid" hidden required  value="<?php echo $hid; ?>"/>  
<input type="text" name="price" hidden required  value="<?php echo $price; ?>"/>  
<div>  
<label>   
Arriving Date:  
</label><br>  

<input type="text" name="date1" placeholder="Select Arrival Date" class="input1" readonly required  />
<script>
var disabledDates = <?php echo json_encode($dates); ?>;
$('.input1').datepicker({
	minDate:0,
    beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ disabledDates.indexOf(string) == -1 ]
    }
	
});
</script>

</div>
<div>  
<label>   
Departure Date:  
</label><br>  
<input type="text" name="date2" placeholder="Select Departure Date" class="input" readonly required />
<script>
var disabledDates = <?php echo json_encode($dates); ?>;
$('.input').datepicker({
	minDate:"+1D",
    beforeShowDay: function(date){
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ disabledDates.indexOf(string) == -1 ]
    }
	
});
</script>

<label>   
Number of Adults:  
</label><br>  
<input type="number" pattern="[1-9]{1}" title="number only" name="adults" required >  
</div> 
<div>  
<label>   
Number of Children:  
</label><br>  
<input type="number" name="children" pattern="[0-9]{1}" title="number only" required >  
</div> 
<label>   
Type:  
</label><br>  
<input type="text" name="type" placeholder="veg/nonveg" pattern="[A-Za-z]+" title="veg/non-veg only"  required >  
<label>
Phone :  
</label>  
<input type="tel" name="phone" placeholder="phone no."  pattern="[6-9]{1}[0-9]{9}" title="Phone number starts with 6-9 and remaing 9 digit with 0-9" size="10" required> 
<label>Current Address : </label> 
<textarea cols="80" rows="5" placeholder="Current Address" name="address" pattern="[A-Za-z0-9,-\s]+" title="valid address only" required></textarea>  
<label>Adhar :  
</label>  
<input type="file" name="image" placeholder="Valid Id Proof" required  > 
    <button type="submit" class="registerbtn" name="book">BOOK</button> </p>   
</form>

</div> 

<?php
if(isset($_POST['book']))
{
	error_reporting(1);
	include("config.php");
		
		$_SESSION['guestname']=$_POST['guestname'];
		$_SESSION['date1']=$_POST['date1'];
		$_SESSION['date2']=$_POST['date2'];
		$_SESSION['adults']=$_POST['adults'];
		$_SESSION['children']=$_POST['children'];
		$_SESSION['type']=$_POST['type'];
		$_SESSION['phone']=$_POST['phone'];
		$_SESSION['address']=$_POST['address'];
		$_SESSION['room']=$_POST['room'];
		$_SESSION['hid']=$_POST['hid'];
		$_SESSION['price']=$_POST['price'];
		$_SESSION['image']=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		if($_POST['date1']>$_POST['date2'])
		{
			echo "<script>
					alert('Select Valid dates');
				</script>";
			echo "<script> location.href='hbook.php'; </script>";
		}
		else
		{
			echo "<script> location.href='pay.php'; </script>";
		}
		
}
?>   
    <!--footer starts from here-->
    <?php include('footer1.php'); ?>

</body>
</php>
