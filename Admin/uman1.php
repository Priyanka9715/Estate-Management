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
	}</style> 
 </head>
   <body class="app sidebar-mini rtl">
   <main class="app-content">
 <?php include('navigation.php'); ?>
<div>
          <h1><i class="fa fa-dashboard"></i>Search Employe and View</h1>
          
        </div>
<br><br>
 
<form action="#" method="post">
<center>
<select name="id" >
<option value="">Select Manager</option>
<?php
include("config.php");
$id=$_POST['id'];
$sql0 = "select * from manager";
$query_run0 = mysqli_query($con,$sql0);
$count=mysqli_num_rows($query_run0);

if($count>0)
{
while($row0=mysqli_fetch_array($query_run0))
{
	?>
	
    <option value="<?php echo $row0['id']?>"><?php echo $row0['name']?> - <?php echo $row0['id']?></option>
	<?php
}
}
?>
</select>
	<br>
	
<input type="submit" name="search" value="Search"/>
</form>
</center>
<?php
include("config.php");
if(isset($_POST['search']))
{
$id=$_POST['id'];
$sql = "select * from manager where id='".$id."' ";
$query_run = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query_run))
{
	
	?><center>
	<div class="col-md-12">  
<div class="tile">
	<form action="#" method="post">
	
	<input type="hidden" name="id" value="<?php echo $row['id']?>"/><br>
	<label>Name</label><br>
	<input type="text" name="name" value="<?php echo $row['name']?>"/><br>
	<label>Date Of Birth</label><br>
	<input type="date" name="dob" value="<?php echo $row['dob']?>"/><br>
	<label>Gender</label><br>
	<select name="gender" >
        <option value="Male" <?php if($row['gender']=='Male'){ ?>selected<?php } ?>>Male</option>
        <option value="Female" <?php if($row['gender']=='Female'){ ?>selected<?php } ?>><br>Female</option>
		<option value="Others" <?php if($row['gender']=='Others'){ ?>selected<?php } ?>><br>Others</option>
		</select><br>
		<label>Age</label><br>
	<br><input type="text" name="age" value="<?php echo $row['age']?>" readonly /><br>
	<label>Phone</label><br>
	<input type="text" name="cno" value="<?php echo $row['cno']?>"/><br>
	<label>Email</label><br>
	<input type="text" name="email" value="<?php echo $row['email']?>"/><br>
<label>Salary</label><br>
	<input type="text" name="salary" value="<?php echo $row['salary']?>"/><br>
	<label>Password</label><br>
	<input type="text" name="password" value="<?php echo $row['password']?>"/><br>
	<label>Address</label><br>
	<input type="text" name="address" value="<?php echo $row['address']?>"/><br>
	<input type="submit" name="update" value="UPDATE"/><br>
	</form>
	
	<?php
}

}
?> 
<?php
include("config.php");
if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$age=(date('Y')-date('Y',strtotime($dob)));
$cno=$_POST['cno'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$password=$_POST['password'];
$address=$_POST['address'];
$sql = "update manager set id='$_POST[id]',name='$_POST[name]',dob='$_POST[dob]',gender='$_POST[gender]',age='$age',cno='$_POST[cno]',email='$_POST[email]',salary='$_POST[salary]',password='$_POST[password]',address='$_POST[address]' where id='$_POST[id]'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('DATA UPDATED');
</script>";
echo "<script> location.href='uman1.php'; </script>";
}
else
{
echo "<script>
alert('NOT UPDATED');
</script>";
}
}
?>
</center>
</main></div></div>
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