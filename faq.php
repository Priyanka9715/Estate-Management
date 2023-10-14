<!DOCTYPE php>
<html lang="en">
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
                     <a class="nav-link active" href="faq.php">FAQ</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link " href="contact.php">Contact</a>
                  </li>
				  <li class="nav-item">
                     <a class="nav-link" href="user.php">Login</a>
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
	<!-- full Title -->
	<div class="full-title">
		<div class="container">
			<!-- Page Heading/Breadcrumbs -->
			<h1 class="mt-4 mb-3">FAQ
				<small></small>
			</h1>
		</div>
	</div>
	
    <!-- Page Content -->
   
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">FAQ</li>
			</ol>
		</div>

		<div class="faq-main">
			<div class="" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">
					  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is this website mainly used for..?</a>
					</h5>
				  </div>

				  <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
					<div class="card-body">
					 This website mainly deals with the management of Aramane Estate .This is the site which provides basic information about our estate and is mainly meant for the people one who wants to access the sevices provided by our estate . People can easily login or sign up with their respective accounts with this site and access  many provisions provided by our estate website . 
					</div>
				  </div>
				</div>
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingTwo">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What are the services provided by Aramane Estate..?</a>
					</h5>
				  </div>
				  <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="card-body">
					The main services provided by Aramane Estate are --
					<p><ul><li>Providing Employees : The nearby estates can request a services to provide specified number of employees for their estate to work for specified time period.
					       <li>Providing Machines  : The nearby estates can request a services to provide specified machines like spinkler jets , motors , spray machines , etc .
						   <li>Providing Vehicles  : The nearby estates can request a services to provide specified vehicles like pick up, jeeps , Tractors .
					</ul></p>
					</div>
				  </div>
				</div>
				<div class="card accordion-single">
				  <div class="card-header" role="tab" id="headingThree">
					<h5 class="mb-0">
					  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How to Book Aramane Homestay..?</a>
					</h5>
				  </div>
				  <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="card-body">
					Its very easy to book Aramane Homestay using this site. First you have to log in with your respective account with our website . Then you have to select Homestay option on the top of the screen . There will be a drop-down options showing Homestay Booking ; click on that and it will directly take you to the homestay booking application page . Fill Up the application completely and accurately and click on submit button your homestay will be booked.
					</div>
				  </div>
				</div>
			</div>
        </div>
<!--footer starts from here-->
  <?php include('footer.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>