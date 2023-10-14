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
$sql0 = "select * from harvest where manager='".$_SESSION['manager']."' and item='coffee' and year='".$year."'";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$id=$row0[0];
		$area=$row0['area'];
		$trees=$row0['trees'];
		$spray=$row0['spray'];
		$pesticide=$row0['pesticide'];
		$pqty=$row0['pqty'];
		$flowering=$row0['flowering'];
		$seedling=$row0['seedling'];
		$plucking=$row0['plucking'];
		$dry=$row0['dry'];
		$qty=$row0['qty'];
		$bags=$row0['bags'];
		$oldstock=$row0['oldstock'];
		$newstock=$row0['newstock'];
		$totalstock=$row0['totalstock'];
		$year=$row0['year'];
}
}
else
{
	$area='';
		$tree='';
		$spray='';
		$pesticide='';
		$pqty='';
		$flowering='';
		$seedling='';
		$plucking='';
		$dry='';
		$qty=0;
		$bags='';
		$oldstock=0;
		$newstock=0;
}
	?>
<table style="border: solid darkcyan ;" border="5" width="100%";>
<tr>
<td colspan="2" align="center"><h1><b>COFFEE</b> Year (<?php echo $year; ?>)</h1></td>
</tr>
<tr>
<th>Area(in acres)</th>
<td><input type="text" name="count" pattern="[0-9]+" title="only numbers" value="<?php echo $count; ?>" hidden>
<input type="text" name="year" value="<?php echo $year; ?>" hidden>
<input type="number" name="area" value="<?php echo $area; ?>"></td>
</tr>
<tr>
<th>No. of Trees :</th>
<td><input type="number" name="tree" pattern="[0-9]+" title="only numbers" value="<?php echo $trees; ?>"></td>
</tr>
<tr>
<th>Month of spray:</th>
<td><input type="text"  name="spray" pattern="[A-Za-z\s]+" title="months only" value="<?php echo $spray; ?>"></td>
</tr>
<tr>
<th>Pesticide</th>
<td><input type="text" name="pesticide" pattern="[A-Za-z\s]+" title="letters only" value="<?php echo $pesticide; ?>"></td>
</tr>
<tr>
<th>Pesticide Quantity</th>
<td><input type="number" name="pqty" pattern="[0-9]+" title="only numbers" value="<?php echo $pqty; ?>"></td>
</tr>
<tr><th> Month of Flowering :</th>
<td><input type="text" name="flowering" pattern="[A-Za-z\s]+" title="months only" value="<?php echo $flowering; ?>"></td>
<tr><td></td><td></td></tr>
<tr><th>Month of seedling:</th>
<td><input type="text" name="seedling" pattern="[A-Za-z\s]+" title="months only" value="<?php echo $seedling; ?>"></td>
<tr>
<th>Month of Plucking : </th>
<td><input type="text" name="plucking" pattern="[A-Za-z\s]+" title="months only" value="<?php echo $plucking; ?>"></td>
</tr>
<tr>
<th>Sunlight Drying Period (no.of days): </th>
<td><input type="number" name="dry" pattern="[0-9]+" title="only numbers" value="<?php echo $dry; ?>"></td>
</tr>
<tr>
<th>Quantity of Growth(in kgs) :</th>
<td><input type="number" name="qty" pattern="[0-9]+" title="only numbers" value="<?php echo $qty; ?>"></td>
</tr>
<tr>

<tr>
<th>Old Stock (in kgs) :</th>
<td><input type="number" name="oldstock" pattern="[0-9]+" title="only numbers" value="<?php echo $oldstock; ?>"></td>
</tr>
<tr>
<th>New Stock (in kgs) :</th>
<td><input type="number" name="newstock" pattern="[0-9]+" title="only numbers" value="<?php echo $newstock; ?>"></td>
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
		$area=$_POST['area'];
		$tree=$_POST['tree'];
		$spray=$_POST['spray'];
		$pesticide=$_POST['pesticide'];
		$pqty=$_POST['pqty'];
		$flowering=$_POST['flowering'];
		$seedling=$_POST['seedling'];
		$plucking=$_POST['plucking'];
		$dry=$_POST['dry'];
		$qty=$_POST['qty'];
		$bags=$qty/50;
		$oldstock=$_POST['oldstock'];
		$newstock=$_POST['newstock'];
		$totalstock=$oldstock+$newstock;
		$year=$_POST['year'];
		include("config.php");
				
		if($count>0)
		{
			$sql1 = "Update `harvest` set `area`='".$area."', `trees`='".$tree."', `spray`='".$spray."', `pesticide`='".$pesticide."', `pqty`='".$pqty."', `flowering`='".$flowering."', `seedling`='".$seedling."', `plucking`='".$plucking."', `dry`='".$dry."', `qty`='".$qty."', `bags`='".$bags."', `oldstock`='".$oldstock."', `newstock`='".$newstock."', `totalstock`='".$totalstock."' where `manager`='".$_SESSION['manager']."' and item='coffee' and year='".$year."'";
			if(mysqli_query($con,$sql1))
			{ 
			echo "<script>
							alert('harvest details updated');
				</script>";
			echo "<script> location.href='ucoffee.php'; </script>";
			}
		}
		else
		{
		$sql1 = "INSERT INTO `harvest`(`item`, `area`, `trees`, `spray`, `pesticide`, `pqty`, `flowering`, `seedling`, `plucking`, `dry`, `qty`, `bags`, `oldstock`, `newstock`, `totalstock`, `manager`, `year`) VALUES('coffee','".$area."','".$tree."','".$spray."','".$pesticide."','".$pqty."','".$flowering."','".$seedling."','".$plucking."','".$dry."','".$qty."','".$bags."','".$oldstock."','".$newstock."','".$totalstock."','".$_SESSION['manager']."','".$year."')";
		if(mysqli_query($con,$sql1))
		{ 
		echo "<script>
						alert('harvest details inserted');
			</script>";
		echo "<script> location.href='ucoffee.php'; </script>";
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