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
	.footer-distributed{
	background: #331a00;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 18px sans-serif;
	padding: 55px 50px;

} 
.containerr{
	background: #fff;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 50%;
	align:center;
	
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
                     <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                 <li class="nav-item">
                     <a class="nav-link active" href="contact.php">Contact</a>
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
			<h1 class="mt-4 mb-3">Contact
				<small></small>
			</h1>
		</div>
	</div>

    <!-- Page Content -->
    <div class="container">
		<div class="breadcrumb-main">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active">Contact</li>
			</ol>
		</div>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->

         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7769.289369653648!2d75.75175707311406!3d13.18478876286501!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbad50636e4a12b%3A0x21963ce0e65cc77a!2sGendehalli%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1663148687683!5m2!1sen!2sin" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4 contact-right">
          <h3>Contact Details : </h3>
          <p><abbr title="location">Location</abbr>:
            <b>Aramane Estate ,Gendehalli Village, Beluru Taluk , Chickmagaluru district 
            <br>Karnataka-573115</b>
            <br>
          </p>
          <p>
            <abbr title="Phone">Phone no.</abbr>: (91) 9445609836
          </p>
          <p>
            <abbr title="Email">Email </abbr>:
            <a href="mailto:name@example.com">aramane122@gmail.com
            </a>
          </p>
          <p>
            
          </p>
        </div>
      </div>
      <!-- /.row -->
  
	 <br>
</div>
</div>
   <!--footer starts from here-->
     <?php include('footer.php'); ?>


<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
