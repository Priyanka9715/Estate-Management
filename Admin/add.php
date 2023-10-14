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
   <?php include('navigation.php')?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i>Add Employees</h1>
 </div>
      </div>
         <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Employee Details</h3>
            <div class="tile-body">
              <form class="row" action="#" method="post" enctype="multipart/form-data">
			  <div class="form-group col-md-3">
                  <label class="control-label">Employee Image</label>
                  <input class="form-control" type="file" name="image">
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Name</label>
                  <input class="form-control" type="text" name="name"  pattern="[A-Za-z\s]+" title="letters only" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Date of Birth</label>
                  <input class="form-control" type="date" name="dob" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Gender</label>
                  <input class="form-control" type="text" name="gender" pattern="[A-Za-z]+" title="male/female only" required>
                </div>
				
				<div class="form-group col-md-3">
                  <label class="control-label">Phone No</label>
                  <input class="form-control" type="text" name="cno" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" required>
                </div>
				
				<div class="form-group col-md-3">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Salary</label>
                  <input class="form-control" type="text" name="salary"  pattern="[0-9]+" title="only numbers" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Password</label>
                  <input class="form-control" type="text" name="password" pattern=".{8,}" title="Six or more characters" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Address</label>
                  <input class="form-control" type="text" name="address"  pattern="[A-Za-z0-9,-\s]+" title="valid address only" required>
                </div>
				<div class="form-group col-md-3">
                  <label class="control-label">Adhar Number</label>
                  <input class="form-control" type="text" name="adhar" pattern="[2-9]{12}" title="12 numeric characters only" required>
                </div>
                <div class="form-group col-md-3 align-self-end">
                  <button class="btn btn-primary" type="submit" name="add"><i class="fa fa-fw fa-lg fa-check-circle"></i>ADD</button>
                </div>
              </form>
            </div>
          </div>
        </div>
<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
	    $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$cno=$_POST['cno'];
		$email=$_POST['email'];
		$salary=$_POST['salary'];
		$password=$_POST['password'];
		$address=$_POST['address'];
		$adhar=$_POST['adhar'];
		$age=(date('Y')-date('Y',strtotime($dob)));
		$query = "insert into manager(image,name,dob,gender,age,cno,email,salary,password,address,adhar) values('".$file."','".$name."','".$dob."','".$gender."','".$age."','".$cno."','".$email."','".$salary."','".$password."','".$address."','".$adhar."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('ADD SUCCEFUL');
			</script>";
			echo "<script> location.href='home.php'; </script>";
		
}
?>		

	 
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