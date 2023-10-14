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
    <meta property="og:age" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Aramane Estate | Admin</title>
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
   <main class="app-content">
<?php include('navigation.php')?>
			

    <!-- Page Content -->
    
					
	<center>
	<div class="col-md-12">  
<div class="tile">
<?php
include("config.php");
$sql0 = "select * from harvest where item='areca' order by year desc";
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
		$manager=$row0['manager'];
		$year=$row0['year'];
		?>
		<table allign="center" border="2" style="border: medium solid teal ; " width="80%" >
<tr>
<td colspan="2" align="center"><h1><b>ARECANUT (<?php echo $year; ?>)</b></h1><br>
<p><?php echo $manager; ?></p></td>
</tr>
<tr>
<th>Area(in acres)</th>
<td><?php echo $area; ?></td>
</tr>
<tr>
<th>No. of Trees :</th>
<td><?php echo $trees; ?></td>
</tr>
<tr>
<th>Month of spray:</th>
<td><?php echo $spray; ?></td>
</tr>
<tr>
<th>Pesticide</th>
<td><?php echo $pesticide; ?></td>
</tr>
<tr>
<th>Pesticide Quantity</th>
<td><?php echo $pqty; ?></td>
</tr>
<tr><th> Month of Flowering :</th>
<td><?php echo $flowering; ?></td></tr>
<tr><th>Month of seedling:</th>
<td><?php echo $seedling; ?></td>
<tr>
<th>Month of Plucking : </th>
<td><?php echo $plucking; ?></td>
</tr>
<tr>
<th>Sunlight Drying Period : </th>
<td><?php echo $dry; ?></td>
</tr>
<tr>
<th>Quantity of Growth(in kgs) :</th>
<td><?php echo $qty; ?></td>
</tr>
<tr>
<th>Number of Bags : </th>
<td><?php echo $bags; ?></td>
</tr>
<tr>
<th>Old Stock (in kgs) :</th>
<td><?php echo $oldstock; ?></td>
</tr>
<tr>
<th>New Stock (in kgs) :</th>
<td><?php echo $newstock; ?></td>
</tr>
<tr>
<th>Total Stock (in kgs) :</th>
<td><?php echo $totalstock; ?></td>
</tr>
</center>
</table>
		<?php
}
}
	?>


		<hr>
		<div class="pagination_bar">
			<!-- Pagination -->
			<ul class="pagination justify-content-center">
				<li class="page-item">
				  <a class="page-link" href="coffee.php" aria-label="Previous">
					<span aria-hidden="true">&laquo;</span>
					<span class="sr-only">Previous</span>
				  </a>
				</li>
				<li class="page-item">
				  <a class="page-link" href="pepper.php" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
					<span class="sr-only">Next</span>
				  </a>
				</li>
			</ul>
		</div>
    </div>
	</div></div>
    <!-- /.container -->
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
	</div>
  </body>
</html>


			