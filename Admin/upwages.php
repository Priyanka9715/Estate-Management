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
	}
	input{
		width:80%;
		height:15%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}
</style>  
  </head>
   <body class="app sidebar-mini rtl">
   
   <center>
     <?php include('nav.php')?>
	<br><br>
	 <main class="app-content">
     
        <div>
          <center><h1>Update Wages</h1></center>
        </div>
      
         <div class="col-md-12">
          <div class="tile">
	<form action="#" method="POST">
	<center>
	
	<p>Select From Date: <input type="date" name="fromdate" required>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>Select TO Date: <input type="date" name="todate" required>
<input type="submit" value="Get wages" name="get"></p>
</center>
</form>
<br><br>

<?php 
if(isset($_POST['get']))
{
	$fromdate=$_POST['fromdate'];
	$todate=$_POST['todate'];
include("config.php");
$sql1 = "select * from attendence where manager='".$_SESSION['manager']."' and date between '".$fromdate."' and '".$todate."'";
$query_run1 = mysqli_query($con,$sql1);
$count1=mysqli_num_rows($query_run1);
if($count1>0)
{
	$gtotal=0;
	?>
	<center>
	<p>From Date: <?php echo $fromdate; ?> --- To Date: <?php echo $todate; ?></p>
	<table border="1"  style="width:1100px;padding:5px;text-align:center;">
<tr>
<th>sl.no</th>
<th>Name</th>
<th>Total Days</th>
<th>Total Days present</th>
<th>Wages</th>
<th>Total</th>
</tr>
	<?php
	$sl=0;
while($row0=mysqli_fetch_array($query_run1))
{
	$id=$row0[0];
	$eid=$row0[1];
	$name=$row0[2];
	$sl+=1;
		$sql0 = "select * from attendence where eid='".$eid."' and  date between '".$fromdate."' and '".$todate."' group by date";
		$query_run0 = mysqli_query($con,$sql0);
		$count0=mysqli_num_rows($query_run0);
		
		$sql2 = "select * from attendence where eid='".$eid."' and status='present' and  date between '".$fromdate."' and '".$todate."'";
		$query_run2 = mysqli_query($con,$sql2);
		$count2=mysqli_num_rows($query_run2);
		
		$sql3 = "select wages.wages from wages inner join employee on wages.type=employee.type";
		$query_run3 = mysqli_query($con,$sql3);
		$count3=mysqli_num_rows($query_run3);
		while($row3=mysqli_fetch_array($query_run3))
		{
			$wages=$row3[0];
		}
		$total=$wages*$count2;
		$gtotal=$gtotal+$total;
		?>
		<tr>
		<td><?php echo $sl; ?>.</td>
		<td><?php echo $name; ?></td>
		<td><?php echo $count0; ?></td>
		<td><?php echo $count2; ?></td>
		<td><?php echo $wages; ?></td>
		<td><?php echo $total; ?></td>
		</tr>
		<?php
			
}
?>
<tr>
<td colspan="5"><b>Grand Total</b></td>
<td><b><?php echo $gtotal; ?></b></td>
</tr>
</table><br>
<a href="upwages.php?gtot=<?php echo $gtotal; ?>&sd=<?php echo $fromdate; ?>&td=<?php echo $todate; ?>"><button>Request for Admin</button></a></center>
<br>
<?php
}
}
if(isset($_GET['gtot'],$_GET['sd'],$_GET['td']))
{
	include("config.php");
	$gtot=$_GET['gtot'];
	$sd=$_GET['sd'];
	$td=$_GET['td'];
	$subject="Employee Salary Request";
	$message="The total Salary amount for employees from ".$sd." to ".$td. " is Rs.".$gtot;
	$sqlx = "insert into request (email,subject,message) values('".$_SESSION['manager']."','".$subject."','".$message."')";
	if(mysqli_query($con,$sqlx))
	{
		echo "<script>
				alert('Wages Request Sent');
			</script>";
			echo "<script> location.href='upwages.php'; </script>";
	}

}
?>
	   
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
	  
	  </center>
    </script>
  </body>
</html>