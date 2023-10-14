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
	</style>
</head>
<body>
 <?php include('navigation.php'); ?>
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/coffee1.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Aramane Estate</h3>
                     <p>A Green Heaven</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/coffee2.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Beautiful Estate</h3>
                     <p>The Greenland</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/pepper1.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Aramane Estate</h3>
                     <p>A Malanadu Estate</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <div class="services-bar">
            <h1 class="my-4">Our Best Plantations </h1>
            <!-- Services Section -->
            <div class="row">
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Coffee</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="images/coffee3.jpg" alt="coffee">
                     </div>
                     
                     <div class="card-footer">
                        <a href="cofimg.php" class="btn btn-primary"> View Images</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Pepper</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="./images/pepper4.jpg" alt="pepper">
                     </div>
                  
                     <div class="card-footer">
                        <a href="pepimg.php" class="btn btn-primary">View Images</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 mb-4">
                  <div class="card h-100">
                     <h4 class="card-header">Arecanut</h4>
                     <div class="card-img">
                        <img class="img-fluid" src="./images/areca1.jpg" alt="cardomom">
                     </div>
                    
                     <div class="card-footer">
                        <a href="arecaimg.php" class="btn btn-primary">View Images</a>
                     </div>
                  </div>
               </div>
            </div>
		</div>
		</div>
    <!--footer starts from here-->
    <?php include('footer1.php'); ?>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</php>