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
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password],input[type=tel] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.containerx {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>    
<body>    
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
                     <a class="nav-link " href="index.php">Home</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="user.php" onclick="return confirm('You have to Log In Or Register')">Services</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="user.php" onclick="return confirm('You have to Log In Or Register')">Places to Visit</a>
                  </li>
                 
                  <li class="nav-item">
                     <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link" href="contact.php">Contact</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link active" href="user.php">Login</a>
                  </li>
				  <!--<li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <b>Login
				</b>
                     </a>
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                        <a class="dropdown-item" href="ologin.php">Owner</a>
                        <a class="dropdown-item" href="mlogin.php">Manager</a>
                        <a class="dropdown-item" href="elogin.php">Employee</a>
						<a class="dropdown-item"href="index.php" onclick="return confirm('Are you sure you want to Logout?')">Logout</a>
                     </div>
                  </li>-->
				  
               </ul>
            </div>
        </div>
    </nav>
	<br>
	<br><br><br>
	<center>
    <h2>Register Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="#" method="post">
    <div class="containerx">
      <h1>Register</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
	  <label for="name"><b>Name</b></label>
      <input type="text" name="name" id="name" placeholder="Enter Your Name" pattern="[A-Za-z\s]+" title="letters only" required>
      <label for="email"><b>Email :</b></label>
      <input type="text" placeholder="Enter Email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>	  
	  <label for="email"><b>Phone :</b></label>
      <input type="tel" placeholder="Enter Phone" name="phone" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" required>

	  <label for="address"><b>Current Address:</b></label>
      <input type="text" placeholder="Enter Address " name="address" pattern="[A-Za-z0-9,-\s]+" title="valid address only" required>
	  <label for="password"><b>Password :</b></label>
      <input type="password" placeholder="Enter Password" name="password" pattern=".{8,}" title="Eight or more characters" required>
	  <label for="psw-repeat"><b>Repeat Password :</b></label>
      <input type="password" placeholder="Enter Password Again" name="cpassword" pattern=".{8,}" title="Eight or more characters" required>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" name="save" class="signupbtn">Register</button>
      </div>
    </div>
	</center>
  </form>
</div>
<?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	$Email=$_POST['email'];

	$sql = "select * from userregister where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='home.php'; </script>";
	}
	else
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$password=$_POST['password'];
		
		
		if ($_POST['password'] != $_POST['cpassword']) {
   // fail!
   
   echo "<script>
				alert('Password invalid.');
			</script>";
}
else {
   // success :(

		

		$query = "insert into userregister(name,email,phone,address,password) values('".$name."','".$email."','".$phone."','".$address."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='user.php'; </script>";
		}
	}
}
?>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
		

     <!--footer starts from here-->
    <?php include('footer.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>