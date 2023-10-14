<!DOCTYPE php>
<php lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Aramane Estate </title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
	
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
		box-shadow:1px 1px 2px 1px green;
	}
	select{
		width:40%;
		height:5%;
		border:1px;
		border-radius:05px;
		padding:8px 15px 8px 15px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px green;
	}</style>
</head>
<body>
  <?php include('nav.php')?>
	<center><br>
	<h1>SEARCH EMPLOYEE AND UPDATE </h1><br><br>
    <form action="#" method="post">
    <input type="text" name="eid" placeholder="Enter Id for Search"/><br>
    <input type="submit" name="search" value="Search"/>
</form>

<?php
include("config.php");
if(isset($_POST['search']))
{
$eid=$_POST['eid'];
$sql = "select * from manager where eid='".$eid."' ";
$query_run = mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query_run))
{
	?>
	<form action="#" method="post">
	<input type="hidden" name="eid" value="<?php echo $row['eid']?>"/><br>
	<input type="text" name="name" value="<?php echo $row['name']?>"/><br>
	<input type="date" name="dob" value="<?php echo $row['dob']?>"/><br>
	<label>Gender</label><br><select>
        <option name="gender"value="<?php echo $row['gender']?>">Male</option>
        <option name="gender"><br>Female</option>
		<option name="gender"><br>Others</option></select><br>
	<br><input type="text" name="age" value="<?php echo $row['age']?>"/><br>
	<input type="text" name="cno" value="<?php echo $row['cno']?>"/><br>
	<input type="text" name="email" value="<?php echo $row['email']?>"/><br>
	<input type="text" name="salary" value="<?php echo $row['salary']?>"/><br>
	<input type="text" name="password" value="<?php echo $row['password']?>"/><br>
	<input type="text" name="address" value="<?php echo $row['address']?>"/><br>
	<input type="submit" name="update" value="UPDATE"/><br>
	</form>
	
	<?php
}

}
?>  
 </center>
</body>
</php>

<?php
include("config.php");
if(isset($_POST['update']))
{
$eid=$_POST['eid'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$cno=$_POST['cno'];
$email=$_POST['email'];
$salary=$_POST['salary'];
$password=$_POST['password'];
$address=$_POST['address'];
$sql = "update manager set eid='$_POST[eid]',name='$_POST[name]',dob='$_POST[dob]',gender='$_POST[geder]',age='$_POST[age]',cno='$_POST[cno]',email='$_POST[email]',salary='$_POST[salary]',password='$_POST[password]',address='$_POST[address]' where eid='$_POST[eid]'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script>
alert('DATA UPDATED');
</script>";
echo "<script> location.href='home.php'; </script>";
}
else
{
echo "<script>
alert('NOT UPDATED');
</script>";
}
}
?>