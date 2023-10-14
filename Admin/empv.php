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
<?php include('navigation.php')?>
	<center><br><br><br>
	<div>
          <h1>Search And Update Managers</h1>
          
        </div>
<br><br>
 
<form action="#" method="post">
<center>
<select name="id" required>
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
$sql = "select * from manager where id='".$id."' or name='".$id."' ";
$query_run = mysqli_query($con,$sql);
$count=mysqli_num_rows($query_run);
if($count>0)
{
while($row=mysqli_fetch_array($query_run))
{
	?>
	<div class="tile">
            <h3 class="tile-title">EMPLOYEES</h3>
            <table  style="border: medium solid skyblue ;" border="3" width="80%";>
              <thead>
                <tr>
				  <th>Image</th>
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
				  <th>Activity</th>
				  
                </tr>
              </thead>
              <tbody>
                <tr>
				<td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'"alt="image" style="width:100px;height:100px;">';?></td>
                  <td><?php echo $row['id']?></td>
                 <td><?php echo $row['name']?></td>
				 <td><?php echo $row['dob']?></td>
				 <td><?php echo $row['gender']?></td>
				 <td><?php echo $row['age']?></td>
				 <td><?php echo $row['cno']?></td>
				 <td><?php echo $row['email']?></td>
				 <td><?php echo $row['salary']?></td>
				 <td><?php echo $row['password']?></td>
				 <td><?php echo $row['address']?></td>
				  <td><button class="btn btn-outline-danger" id="show">Update</button></td>
                
				 </tbody>
				 </table>

   
   <?php
}
}
else
{
	?>
	<p>No employees Found</p>
	<?php
}

?>  



   <?php
include("config.php");
$sql = "select * from manager where id='".$id."' ";
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
	<form action="#" method="post" enctype="multipart/form-data" >
	<label>EMPLOYEE ID</label><br>
	<input type="text" name="id" value="<?php echo $row['id']?>" readonly /><br>
	<label>NAME</label><br>
	<input type="text" name="name"   pattern="[A-Za-z\s]+" title="letters only" value="<?php echo $row['name']?>"/><br>
	<label>DATE OF BIRTH</label><br>
	<input type="date" name="dob" value="<?php echo $row['dob']?>"/><br>
	<label>Gender</label><br>
	<input type="text" name="gender" pattern="[A-Za-z\s]+" title="male/female only" value="<?php echo $row['gender']?>"/><br>
	<br>
	<label>Age</label><br>
	<input type="text" name="age" value="<?php echo $row['age']?>"/><br>
	<label>PHONE.NO</label><br>
	<input type="text" name="cno" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9" value="<?php echo $row['cno']?>"/><br>
	<label>EMAIL</label><br>
	<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" value="<?php echo $row['email']?>"/><br>
	<label>Salary</label><br>
	<input type="text" name="salary" pattern="[0-9]+" title="only numbers" value="<?php echo $row['salary']?>"/><br>
	<label>PASSWORD</label><br>
	<input type="text" name="password" pattern=".{8,}" title="Six or more characters" value="<?php echo $row['password']?>"/><br>
	<label>ADDRESS</label><br>
	<input type="text" name="address" pattern="[A-Za-z0-9,-\s]+" title="valid address only" value="<?php echo $row['address']?>"/><br>
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

$sql = "update manager set  id='$_POST[id]',name='$_POST[name]',dob='$_POST[dob]',gender='$_POST[gender]',age='$_POST[age]',cno='$_POST[cno]',email='$_POST[email]',salary='$_POST[salary]',password='$_POST[password]',address='$_POST[address]' where id='$id'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('DATA UPDATED');
</script>";
echo "<script> location.href='empv.php'; </script>";
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





