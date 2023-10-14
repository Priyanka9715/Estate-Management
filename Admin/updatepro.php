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
    <title>Gatty Surgical | Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
   <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.php">&nbsp;&nbsp;&nbsp; <span style="color:red;"> Gatty </span><span style="color:blue;"> Surgical </span></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="" alt="">
        <div>
          <p class="app-sidebar__user-name">Admin</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
		<li><a class="app-menu__item " href="addstock.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Add Stock</span></a></li>
		<li><a class="app-menu__item" href="inward.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Inward Stock</span></a></li>
		<li><a class="app-menu__item" href="quote.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Quot Request</span></a></li>
		<li><a class="app-menu__item active" href="addpro.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">Manage Products</span></a></li>
		<li><a class="app-menu__item" href="generateinvoice.php"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Generate Bill</span></a></li>
		<li><a class="app-menu__item" href="viewinvoice.php"><i class="app-menu__icon fa fa-id-card-o"></i><span class="app-menu__label">View Invoice</span></a></li>
		<li><a class="app-menu__item" href="credit.php"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Credit Info</span></a></li>
		<li><a class="app-menu__item" href="eggstock.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">Add Staff</span></a></li>
		<li><a class="app-menu__item" href="eggstock.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">View User</span></a></li>
		<li><a class="app-menu__item" href="eggstock.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">View feedback</span></a></li>
		<li><a class="app-menu__item" href="viewstock.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Report</span></a></li>
		<li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
        
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Update Product</h1>
          
        </div>
        
      </div>
	  <form action="#" method="post">
      <div class="row">
        <div class="col-md-6">
		<div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Product Name</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="stock" value="Surgical Kit" readonly>
            </div>
          </div>
        </div>
        <div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Brand</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="date"  value="Helio">
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Available Quantity</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="qty"  value="80" readonly>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Image</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="file" name="img"  value="">
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6" style="margin-left:25%;">
          <div class="">
            <center><div class="tile-body"> 
              <input class="btn btn-primary mr-2 mb-2" type="submit" value="UPDATE PRODUCT" name="addstock">
            </div></center>
          </div>
        </div>
		</form>
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