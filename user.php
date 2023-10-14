<?php
session_start();
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
	<link href="css/footerstyle.css" rel="stylesheet">
	<style>
	Body {  
	font-family: Calibri, Helvetica, sans-serif;  
	background-color:;  
	}  
  button {   
       background-color: #4CAF50;   
       width: 100%;  
        color: orange;   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
		 form {   
        border: 3px solid #f1f1f1;   
		}   
		input[type=text], input[type=password] {   
		width: 100%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid green;   
        box-sizing: border-box;   
		}  
		button:hover {   
        opacity: 0.7;   
		}   
		.cancelbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   
	.container {   
        padding: 25px;   
        background-color:;  
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
	<br>
	<br><br><br>
	<br>
    <center> <h1> Login Form </h1> </center>   
    <form action="#" method="post">  
        <div class="container">   
            <label>Email : </label>   
            <input type="text" placeholder="Enter Email" name="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>  
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" name="password" pattern=".{8,}" title="Eight or more characters" required>  
            <button type="submit" name="signin" >Login</button>                			           
			    </form>
<h3>New to Aramane Estate..?</h3><a href="user1.php">Register</a> 	
        </div>   
 
	
<?php
if(isset($_POST['signin']))
{
error_reporting(1);
include("config.php");
$name=$_POST['name'];
$password=$_POST['password'];
$sql = "select * from userregister where email='".$name."' and password='".$password."'";
$result = mysqli_query($con,$sql);
$count=mysqlI_num_rows($result);
if($count>0)
{ 
session_start();
$_SESSION['user']=$name;
$aid=$_SESSION['user'];
echo "<script>
alert('Login Successful as $aid');
</script>";
echo "<script> location.href='home.php'; </script>";
}
else
{
echo "<script>
alert('Invalid Username or Password');
</script>";
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