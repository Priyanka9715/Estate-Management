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
		width:40%;
		height:5%;
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
     <main class="app-content">
	 <?php include('nav.php'); ?>
   
            <center><h1>Attendence</h1></center>
			        
			</div>
            <!-- Services Section -->
            
			<center><br>
			<table  style="border: medium solid teal ;padding:5px;text-align:left;" border="3" width="100%";>
			<tr>
			<th>SI.no.</th>
			<th>Date</th>
			<th>Type</th>
			<th>Name</th>
			<th>Email/Empid</th>
			<th> </th>
			<th> </th>
			</tr>
			<?php
include("config.php");
$sql0 = "select * from employee where manager='".$_SESSION['manager']."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$id=$row0[0];
	$name=$row0[1];
	$gender=$row0[3];
	$age=$row0[4];
	$email=$row0[6];
	$type=$row0[10];
	$manager=$row0[11];
	$sl+=1;
	$date=date('Y-m-d');
	?>
    <tr>
			<td><?php echo $sl; ?>.</td>
			<td><?php echo $date; ?>.</td>
			<td><?php echo $type; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $email; ?></td>
			<?php
			include("config.php");
			$sql = "select * from attendence where date='".$date."' and eid='".$id."'";
			$query_run = mysqli_query($con,$sql);
			$count0=mysqli_num_rows($query_run);

			if($count0>0)
			{
				while($row=mysqli_fetch_array($query_run))
				{
					$aid=$row[0];
					$status=$row[4];
				}
				?>
				<td><?php echo $status; ?></td>
			<td><?php if($status=='present')			{ ?><a href="attendance.php?statusid=<?php echo $aid; ?>&status=absent"><button style="background-color:red; color:white;">absent</button></a> <?php } else { ?>
			<a href="attendance.php?statusid=<?php echo $aid; ?>&status=present"><button style="background-color:green; color:white;">present</button></a><?php } ?></td>
			<?php
			}
			else
			{
			?>
			<td><a href="attendance.php?eid=<?php echo $id; ?>&ename=<?php echo $name; ?>&status=present"><button style="background-color:green; color:white;">Present</button></a></td>
			<td><a href="attendance.php?eid=<?php echo $id; ?>&ename=<?php echo $name; ?>&status=absent"><button style="background-color:red; color:white;">absent</button></a></td>
			<?php 
			}
			?>
	</tr>
	<?php
}
}
?>

<?php
if(isset($_GET['eid'],$_GET['ename'],$_GET['status']))
{
	
include("config.php");
$eid=$_GET['eid'];
$ename=$_GET['ename'];
$status=$_GET['status'];
$date=date('Y-m-d');
$sql1 = "INSERT INTO `attendence`(`eid`, `ename`, `date`, `status`, `manager`) VALUES ('".$eid."','".$ename."','".$date."','".$status."','".$_SESSION['manager']."')";
if(mysqli_query($con,$sql1))
{ 
echo "<script> location.href='attendance.php'; </script>";
}
}
?>
<?php
if(isset($_GET['statusid'],$_GET['status']))
{
	
include("config.php");
$statusid=$_GET['statusid'];
$status=$_GET['status'];
$sql1 = "update `attendence` set `status`='".$status."' where id='".$statusid."'";
if(mysqli_query($con,$sql1))
{ 
echo "<script> location.href='attendance.php'; </script>";
}
}
?>
			
			</table>
 </center>
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