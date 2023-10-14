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
		box-shadow:1px 1px 2px 1px teal;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px teal;
	}</style> 
 </head>
   <body class="app sidebar-mini rtl">
   <main class="app-content">
<?php include('navigation.php')?>
	
	<form action="#" method="post">
            <div><center>
          <h1> All Managers of 2022</h1>
          
        </div></center>
       
	   <div class="col-md-12">  
<div class="tile">
<center><br>
            <table  style="border: medium solid teal ;padding:5px;text-align:center;" border="3" width="80%";>
              <thead> 
                <tr>
                  <th>EID</th>
                  <th>Employee Name</th>
				  <th>Date Of Birth</th>
                  <th>Gender</th>
				  <th>Age</th>
                  <th>Phone</th>
				  <th>Email</th>
				  <th>Salary</th>
                  <th>Password</th>
				  <th>Address</th>
				  <th>Total No.of Days</th>
				  <th>No.of Days Present</th>
                </tr>
              </thead>
			 
			  <tbody>
			 <?php
include("config.php");
$sql = "select * from manager ";
$query_run = mysqli_query($con,$sql);
while($row1=mysqli_fetch_array($query_run))
{
$id=$row1['id'];
$name=$row1['name'];
$dob=$row1['dob'];
$gender=$row1['gender'];
$age=$row1['age'];
$cno=$row1['cno'];
$email=$row1['email'];
$salary=$row1['salary'];
$password=$row1['password'];
$address=$row1['address'];
?>
			  
                <tr>
                 <td><?php echo $id;?></td>
                 <td><?php echo $name;?></td>
				 <td><?php echo $dob;?></td>
				 <td><?php echo $gender;?></td>
				 <td><?php echo $age;?></td>
				 <td><?php echo $cno;?></td>
				 <td><?php echo $email;?></td>
				 <td><?php echo $salary;?></td>
				 <td><?php echo $password;?></td>
				 <td><?php echo $address;?></td> 
				  <?php
}

?>  

				 </tbody>
				 </table>

   </form>
</center>
</div></div>

<div>
        <center>  <h1>All Employees of 2022</h1>
          
        </div></center>
			<div class="col-md-12">  
<div class="tile">        
			
            <!-- Services Section -->
            
			<center><br>
			<table border="1" style="border: medium solid teal ;padding:5px;text-align:center;" border="3" width="80%";>
			<tr>
			<th>Sl.No</th>
			<th>Type</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Email/Empid</th>
			<th>Manager</th>
			<th>Total Days</th>
			<th>Total Present</th>
			</tr>
			<?php
include("config.php");
$sql0 = "select * from employee";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
	$sl=0;
while($row0=mysqli_fetch_array($query_run0))
{
	$eid=$row0[0];
	$name=$row0[1];
	$gender=$row0[3];
	$age=$row0[4];
	$cno=$row0[5];
	$email=$row0[6];
	$address=$row0[9];
	$type=$row0[10];
	$manager=$row0[11];
	
	$sqlx = "select * from attendence where eid='".$eid."'";
	$query_runx = mysqli_query($con,$sqlx);
	$tcount=mysqli_num_rows($query_runx);
	
	$sqly = "select * from attendence where eid='".$eid."' and status='present'";
	$query_runy = mysqli_query($con,$sqly);
	$present=mysqli_num_rows($query_runy);
	$sl+=1;
	?>
    <tr>
			<td><?php echo $sl; ?>.</td>
			<td><?php echo $type; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $cno; ?></td>
			<td><?php echo $address; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $manager; ?></td>
			<td><?php echo $tcount; ?></td>
			<td><?php echo $present; ?></td>
			
	</tr>
	<?php
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





