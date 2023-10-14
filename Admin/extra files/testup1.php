






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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
<?php include('nav.php')?>
	<center><br>
	<h1>EMPLOYEES</h1><br><br>
			<table  style="border: medium solid teal ;padding:5px;text-align:center;" border="3" width="100%";>
			<tr>
			<th>Sl.No</th>
			<th>Type</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Email/Empid</th>
			<th> Action</th>
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
	$id=$row0[0];
	$name=$row0[1];
	$gender=$row0[3];
	$age=$row0[4];
	$email=$row0[6];
	$type=$row0[10];
	$manager=$row0[11];
	$sl+=1;
	?>
    <tr>
			<td><?php echo $sl; ?>.</td>
			<td><?php echo $type; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="vemp.php?delid=<?php echo $id; ?>"><button style="background-color:red; color:white;">Delete</button></a></td>
	</tr>
	<?php
}
}
?>

<?php
include("config.php");
if(isset($_GET['delid']))
{
$delid=$_GET['delid'];

$sql = "delete from employee where id='".$delid."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('EMPLOYEE DELETED');
</script>";
echo "<script> location.href='vemp.php'; </script>";
}
}

?>
			
			</table>
 </center>
			</div>        
			</div>        
               
</center>
</main>



  <?php
include("config.php");
if(isset($_GET['delid']))
{
$delid=$_GET['delid'];
$sql = "select * from employee where address='".$address."' ";
$query_run = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query_run))
{
	?>
	<script>
$(document).ready(function(){
	$("#edit").hide();
  $("#show").click(function(){
    $("#edit").show();
  });
});
</script>

	<div id="edit">
	<form action="#" method="post">
	<label>EMPLOYEE ID</label><br>
	<input type="text" name="id" value="<?php echo $row['id']?>"/><br>
	<label>NAME</label><br>
	<input type="text" name="name" value="<?php echo $row['name']?>"/><br>
	<label>DATE OF BIRTH</label><br>
	<input type="date" name="dob" value="<?php echo $row['dob']?>"/><br>
	<label>Gender</label><br>
	<select name="gender" >
        <option value="Male" <?php if($row['gender']=='Male'){ ?>selected<?php } ?>>Male</option>
        <option value="Female" <?php if($row['gender']=='Female'){ ?>selected<?php } ?>><br>Female</option>
		<option value="Others" <?php if($row['gender']=='Others'){ ?>selected<?php } ?>><br>Others</option>
		</select><br>
	<br><input type="text" name="age" value="<?php echo $row['age']?>"/><br>
	<label>PHONE.NO</label><br>
	<input type="text" name="cno" value="<?php echo $row['cno']?>"/><br>
	<label>EMAIL</label><br>
	<input type="text" name="email" value="<?php echo $row['email']?>"/><br>
	<label>WAGES</label><br>
	<input type="text" name="salary" value="<?php echo $row['salary']?>"/><br>
	<label>PASSWORD</label><br>
	<input type="text" name="password" value="<?php echo $row['password']?>"/><br>
	<label>ADDRESS</label><br>
	<input type="text" name="address" value="<?php echo $row['address']?>"/><br>
	<input type="submit" name="update" value="UPDATE"/><br>
	</form>
	</div>
	<?php
}

}
?>  
 </center>
<center>
<?php
include("config.php");
if(isset($_POST['update']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$password=$_POST['password'];
$address=$_POST['address'];
$sql = "update employee set id='$_POST[id]',name='$_POST[name]',dob='$_POST[dob]',gender='$_POST[geder]',age='$_POST[age]',cno='$_POST[cno]',email='$_POST[email]',salary='$_POST[salary]',password='$_POST[password]',address='$_POST[address]' where id='$_POST[id]'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('DATA UPDATED');
</script>";
echo "<script> location.href='mhome.php'; </script>";
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




































