<?php
session_start();
if(!isset($_SESSION['manager']))
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
    <title>Aramane Estate| Manager</title>
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
		align:center;
	}
	input{
		width:40%;
		height:15%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}
	.smart{
		width:100%;
		height:140%;
		border:5px;
		border-radius:05px;
		
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}
	.rbutton {  
  background-color: teal;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
} 
.app-title 
{
	align:center;
}
</style>  
  </head>
   <body class="app sidebar-mini rtl">
   
    <?php include('nav.php'); ?>
    <main class="app-content">
	<center><p> <h1>ADD NEW EXPENSE </h1></p><br><br></center>
	
	
  <form action="" method="post">
	<center>
	<div class="smart" >
	<label>Expense amount :</label><br>
	<input type="number" name="expense" placeholder="Expense" required>
	<br>
	<label>Reason :</label><br>
	<input type="text" name="reason" placeholder="Enter Reason" required>
	<br>
	<input type="submit"  name="submit" value="save">
	
	<?php
	if(isset($_POST['submit']))
	{
		include("config.php");
		$expense=$_POST['expense'];
		$reason=$_POST['reason'];
		$date=date('Y-m-d');
		$query = "insert into expenses(date,expense,reason,manager) values('".$date."','".$expense."','".$reason."','".$_SESSION['manager']."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('ADD SUCCEFUL');
			</script>";
			echo "<script> location.href='upextest.php'; </script>";
		
	}
	
	?></div>
	<br><br>
<a class="rbutton" href="upextest2.php">View Expenses</a><br>
	   </main></center>
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
	  </center>
    </script>
  </body>
</html>