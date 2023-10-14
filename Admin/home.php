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
  </head>
   <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="home.php">&nbsp;&nbsp;&nbsp; <span style="color:red;"> Aramane </span><span style="color:blue;"> Estate </span></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      
   </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/ownerr1.jpg" alt="">
        
      </div>
	  <center><p class="app-sidebar__user-name" style="color:white;font-weight:900; font-size:20px;">Admin</p></center><br>
       <ul class="app-menu">
        <li><a class="app-menu__item active" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
		<li><a class="app-menu__item" href="add.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Add Manager</span></a></li>
		<li><a class="app-menu__item" href="empv.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Update Manager</span></a></li>
		<li><a class="app-menu__item" href="wages.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Update Wages</span></a></li>
		<li><a class="app-menu__item" href="uman1.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">View Manager</span></a></li>
		<li><a class="app-menu__item" href="vvemp.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Delete Manager</span></a></li>
		<li><a class="app-menu__item" href="alluser.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Users</span></a></li>
		<li><a class="app-menu__item" href="yearemp.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View All Employees</span></a></li>
		<li><a class="app-menu__item" href="hbookings.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Homestay Bookings</span></a></li>
		<li><a class="app-menu__item" href="harvest.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Harvesting Details</span></a></li>
		
		<li><a class="app-menu__item" href="yearexpense.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Expenses</span></a></li>
	
		<li><a class="app-menu__item" href="request.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Requests</span></a></li>
		<li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">Logout</span></a></li>
        
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
       
      </div>
            <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Managers</h4>
              <p><b>
			  <?php
include("config.php");
// Check connection
$sql="SELECT * FROM manager";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set  

  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Employees</h4>
              <p><b><?php
include("config.php");
// Check connection
$sql="SELECT * FROM employee";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set  

  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?></b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>Pending Requests</h4>
              <p><b>
			  <?php
include("config.php");
// Check connection
$sql="SELECT * FROM request where status=''";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set  

  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>Bookings</h4>
              <p><b>
			  <?php
include("config.php");
// Check connection
$sql="SELECT * FROM hbooking";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set  

  $rowcount=mysqli_num_rows($result);
  echo $rowcount;
  // Free result set
  mysqli_free_result($result);
  }
?>
</b></p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"></h3>
            <img src="estate.jpg" width="100%">
          </div>
        </div>
        </div>
      </div></div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
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