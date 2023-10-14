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
    <title>The Chick House | Staff Panel</title>
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
    <header class="app-header"><a class="app-header__logo" href="index.html">The Chick House</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
     
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" >
        <div>
          <p class="app-sidebar__user-name">STAFF</p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
		<li><a class="app-menu__item active" href="purchasestock.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Purchase Stock</span></a></li>
		<li><a class="app-menu__item" href="eggstock.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">Egg Stock</span></a></li>
		<li><a class="app-menu__item" href="viewstock.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Stock</span></a></li>
		<li><a class="app-menu__item" href="consum.php"><i class="app-menu__icon fa fa-connectdevelop"></i><span class="app-menu__label">Consumption</span></a></li>
		<li><a class="app-menu__item" href="sales.php"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Sales</span></a></li>
		<li><a class="app-menu__item" href="salesinvoice.php"><i class="app-menu__icon fa fa-id-card-o"></i><span class="app-menu__label">Invoice</span></a></li>
		<li><a class="app-menu__item" href="logout.php"><i class="app-menu__icon fa fa-sign-out"></i><span class="app-menu__label">Logout</span></a></li>
	  </ul>
	  
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Purchase Stock</h1>
         
        </div>
        
      </div>
	  <form action="#" method="post">
      <div class="row">
        <div class="col-md-6">
		<div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">select Stock</h3>
            </div>
            <div class="tile-body"> 
              <select class="form-control" name="stockname">
                <optgroup label="Select Stock type">
                  <option value="food">Food</option>
                  <option value="medicine">Medicine</option>
                  <option value="bird">Birds</option>
                </optgroup>
              </select>
            </div>
          </div>
        </div>
        <div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">select Seller</h3>
            </div>
            <div class="tile-body"> 
              <select class="form-control" name="sellername">
                <optgroup label="Select seller">
                </optgroup>
              </select>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Quantity</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="qty" required>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Submitted</h3>
            </div>
            <div class="tile-body"> 
              <input class="btn btn-primary mr-2 mb-2" type="submit" value="Purchase" name="purchase">
			  
            </div>
          </div>
        </div>
		<form>
        <div class="col-md-12">
		<div class="page-header text-white bg-primary">
              <center><h2 class="mb-3 line-head" id="buttons">View Purchase Stock</h2></center>
          </div>
          <div class="tile">
            <h3 class="tile-title">Purchase Stocks</h3>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Date</th>
                  <th>Type</th>
                  <th>Seller ID</th>
                  <th>Qty</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>01</td>
                  <td>06/08/2022</td>
                  <td>Food</td>
                  <td>Shraddha</td>
                  <td>15</td>
                  <form method="post" action="#">
                  <td><button class="btn btn-outline-danger" name="delete" type="submit">Delete</button></td>
				  </form>
                </tr>  
				<tr>
                  <td>02</td>
                  <td>06/08/2022</td>
                  <td>Food</td>
                  <td>Shraddha</td>
                  <td>15</td>
                  <form method="post" action="#">
                  <td><button class="btn btn-outline-danger" name="delete" type="submit">Delete</button></td>
				  </form>
                </tr>            
              </tbody>
            </table>
          </div>
        </div>
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