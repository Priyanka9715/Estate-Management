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
		width:100%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
	}
	.app-title{
		width:100%;
		height:100%;
		border:1px;
		border-radius:05px;
		
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
		align:center;
	}
</style>  
  </head>
   <body class="app sidebar-mini rtl">
   <center>
    <?php include('nav.php'); ?>
	<br>	<br>	<br>	<br>
	<form action="#" method="post">
<center>
<select name="year" required >
<option value="">select Year</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
</select>
	<br>
	
<input type="submit" name="search" value="Search"/>
</form>
</center>

<?php
if(isset($_POST['search']))
{
$year=$_POST['year'];

?>
	<form action="#" method="POST">
    <main class="app-content">
	
	  
	<center>
<?php
include("config.php");
$sql0 = "select * from allemployees where  year='".$year."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$id=$row0[0];
		$name=$row0['name'];
		$dob=$row0['dob'];
		$gender=$row0['gender'];
		$year=$row0['year'];
		$totaldays=$row0['totaldays'];
		$present=$row0['present'];
		$wages=$row0['wages'];
		$totalwages=$row0['totalwages'];
		$address=$row0['address'];
}
}
else
{
	    $name='';
		$dob='';
		$gender='';
		$totaldays='';
		$present='';
		$wages='';
		$totalwages='';
		$address='';
		$qty=0;
		$bags='';
		$oldstock=0;
		$newstock=0;
}
	?>
<table style="border: solid darkcyan ;" border="5" width="100%";>
<tr>
<td colspan="2" align="center"><h1><b>Employees</b> Year (<?php echo $year; ?>)</h1></td>
</tr>
<tr>
<th>Employee Name</th>
<td><input type="text" name="count" value="<?php echo $count; ?>" hidden>
<input type="text" name="year" value="<?php echo $year; ?>" hidden>
<input type="text" name="name" value="<?php echo $name; ?>"></td>
</tr>
<tr>
<th>Date of Birth</th>
<td><input type="date" name="dob" value="<?php echo $dob; ?>"></td>
</tr>
<tr>
<th>Gender</th>
<td><input type="text"  name="text" value="<?php echo $gender; ?>"></td>
</tr>
<tr>
<th>Pesticide Quantity</th>
<td><input type="number" name="totaldays" value="<?php echo $totaldays; ?>"></td>
</tr>
<tr><th> Month of Flowering :</th>
<td><input type="text" name="present" value="<?php echo $present; ?>"></td>
<tr><td></td><td></td></tr>
<tr><th>Month of wages:</th>
<td><input type="text" name="wages" value="<?php echo $wages; ?>"></td>
<tr>
<th>Month of Plucking : </th>
<td><input type="text" name="totalwages" value="<?php echo $totalwages; ?>"></td>
</tr>
<tr>
<th>Sunlight Drying Period : </th>
<td><input type="number" name="address" value="<?php echo $address; ?>"></td>
</tr>
<tr>
<td colspan="2" align="center"><h1><b><input type="submit" name="update" value="UPDATE"></h1></b></td>
</tr>
</center>
</table>
</form>				
	<?php
}
	if(isset($_POST['update']))
	{
		$count=$_POST['count'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$totaldays=$_POST['totaldays'];
		$present=$_POST['present'];
		$wages=$_POST['wages'];
		$totalwages=$_POST['totalwages'];
		$address=$_POST['address'];
		$year=$_POST['year'];
		include("config.php");
				
		if($count>0)
		{
			$sql1 = "Update `allemployees` set `name`='".$name."', `dob`='".$dob."', `gender`='".$gender."', `totaldays`='".$totaldays."', `present`='".$present."', `wages`='".$wages."', `totalwages`='".$totalwages."', `address`='".$address."' where `year`='".$year."'";
			if(mysqli_query($con,$sql1))
			{ 
			echo "<script>
							alert('Employees details updated');
				</script>";
			echo "<script> location.href='allemp.php'; </script>";
			}
		}
		else
		{
		$sql1 = "INSERT INTO `harvest`(`item`, `name`, `dob`, `gender`,`totaldays`, `present`, `wages`, `totalwages`, `address`,`year`) VALUES('coffee','".$name."','".$dob."','".$gender."','".$totaldays."','".$present."','".$wages."','".$totalwages."','".$address."','".$year."')";
		if(mysqli_query($con,$sql1))
		{ 
		echo "<script>
						alert('harvest details inserted');
			</script>";
		echo "<script> location.href='allemp.php'; </script>";
		}
		}
	}

	?>
		<hr>
		<div class="pagination_bar">
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="upepper.php" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="uareca.php" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
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
	</center>
  </body>
</html>