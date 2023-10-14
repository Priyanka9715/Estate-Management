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
    <<header class="app-header"><a class="app-header__logo" href="home.php">&nbsp;&nbsp;&nbsp; <span style="color:red;"> Gatty </span><span style="color:blue;"> Surgical </span></a>
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
        <li><a class="app-menu__item " href="home.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>
		<li><a class="app-menu__item " href="addstock.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Add Stock</span></a></li>
		<li><a class="app-menu__item " href="inward.php"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Inward Stock</span></a></li>
		<li><a class="app-menu__item " href="quote.php"><i class="app-menu__icon fa fa-eye"></i><span class="app-menu__label">View Quot Request</span></a></li>
		<li><a class="app-menu__item" href="addpro.php"><i class="app-menu__icon fa fa-circle-o"></i><span class="app-menu__label">Manage Products</span></a></li>
		<li><a class="app-menu__item active" href="generateinvoice.php"><i class="app-menu__icon fa fa-shopping-cart"></i><span class="app-menu__label">Generate Bill</span></a></li>
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
          <h1><i class="fa fa-dashboard"></i>Generating Invoice</h1>
          
        </div>
      </div>
         <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Invoice</h3>
            <div class="tile-body">
              <form class="row" action="#" method="post">
				<div class="form-group col-md-3">
                  <label class="control-label">Invoice No</label>
                  <input class="form-control" type="text" value="QT01" name="salesno" readonly="true">
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Phone No</label>
                  <input class="form-control" type="tel" name="phoneno"  required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="name" name="name" required>
                </div>
                <div class="form-group col-md-3 align-self-end">
                  <button class="btn btn-primary" type="submit" name="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
		<div class="col-md-12">
          <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Invoice Details</h3>
            
            </div>
            <div class="tile-body">
              <h5>Bill No:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i>GSI01</i></h5>
              <h5>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i>Jack</i></h5>
              <h5>Phone No:&nbsp&nbsp&nbsp&nbsp<i>9900778854</i></h5>
			  <!--<a class="btn btn-info" id="demoNotify" href="#">Sample Notification</a>-->
            </div><br><br>
			<form class="row" method="post" action="#">
				<div class="form-group col-md-3">
                  <label class="control-label">Product Name</label>
				  <select class="form-control" name="type">
				  <optgroup label="Select Stock">
							        	<option>--Select--</option>
										<option value="Surgical Kit">Surgical Kit</option>
										<option value="Hand Glows">Hand Glows</option>
										<option value="Puls Meter">Puls Meter</option>
										<option value="	Water Bed">	Water Bed</option>
										<option value="Thermometer">Thermometer</option>
										<option value="Face Mask">	Face Mask</option>
										<option value="Knee Pad">Knee Pad</option>
										
					<optgroup>
				  </select>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Quantity</label>
                  <input class="form-control" min="1" type="number" placeholder="Quantity" name="qty" required>
                </div>
				
                <div class="form-group col-md-3 align-self-end">
                  <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-fw fa-lg fa-check-circle"></i>Add</button>
                </div>
              </form>
          </div>
        </div>
		
		<div class="col-md-12">
		<div class="page-header text-white bg-primary">
              <center><h3 class="mb-3 line-head" id="buttons">Display</h3></center>
          </div>
          <div class="tile">
            <h3 class="tile-title"></h3>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>price</th>
                  <th>Total price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>			
                <tr>
                  <td>01</td>
				  <td>Thermometer</td>
                  <td>20</td>
                  <td>250</td>
                  <td>5000</td>
                  <form method="post" action="">
                  <td><button class="btn btn-outline-danger" name="delete" type="submit">Delete</button></td>
				  </form>
                </tr>
				<tr>
                  <td>02</td>
				  <td>Puls Meter</td>
                  <td>10</td>
                  <td>1000</td>
                  <td>10000</td>
                  <form method="post" action="">
                  <td><button class="btn btn-outline-danger" name="delete" type="submit">Delete</button></td>
				  </form>
                </tr>
              </tbody>
            </table>
			 <table class="table table-hover">
							<td colspan="2">&nbsp;</td>
							<td><b>Total Amount</b></td>
							<td><b>Rs. &nbsp;15000</b></td>
							<form method="post" action="geninvoice.php">
							<td><button class="btn btn-outline-success" name="confirm" type="submit">Confirm</button></td>
							</form>
							
						</tr>
			 </table>				
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