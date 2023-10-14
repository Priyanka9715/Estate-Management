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
<style>
	body{
		background-color:whitesmoke;
	}
	input{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px skyblue;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px skyblue;
	}</style> 
 </head>
   <body class="app sidebar-mini rtl">
<?php include('navigation.php')?>
	<center><br><br><br>
	<h1>SEARCH EMPLOYEE AND VIEW </h1><br><br>
    <form action="#" method="post">
    <input type="text" name="eid" placeholder="Enter Id for Search"/><br>
    <input type="submit" name="search" value="Search"/>
</form>

<?php
include("config.php");
if(isset($_POST['search']))
{
$eid=$_POST['eid'];
$sql = "select * from manager where eid='".$eid."' ";
$query_run = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query_run))
{
	?>
	<form action="#" method="post">
      <div class="row" width=100>
        <div class="col-md-6">
		<div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Employee Name</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="name" required value="<?php echo $row['name']?>"/>
            </div>
          </div>
        </div><br>
        <div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Date Of Birth</h3>
            </div><br>
            <div class="tile-body"> 
              <input class="form-control" type="date" name="dob" required value="<?php echo $row['dob']?>"/>
            </div>
          </div>
        </div><br>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Gender</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="gender" required value="<?php echo $row['gender']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Age</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="age" required value="<?php echo $row['age']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Phone Number</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="cno" required value="<?php echo $row['cno']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Email</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="email" required value="<?php echo $row['email']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Salary</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="salary" required value="<?php echo $row['salary']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Password</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="password" required value="<?php echo $row['password']?>"/>
            </div>
          </div>
        </div>
		<div class="col-md-6">
         <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Address</h3>
            </div>
            <div class="tile-body"> 
              <input class="form-control" type="text" name="address" required value="<?php echo $row['address']?>"/>
            </div>
          </div>
        </div>
      
		</form>
	<?php
}

}
?>  
 </center>
</body>
</php>

<?php
include("config.php");
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