<?php
session_start();
if(!isset($_SESSION['manager']))
{
	echo "<script> location.href='index.php'; </script>";
}
?><!DOCTYPE html>
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
    <title>Aramane Estate| Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: teal;  
}  
.containerx {  
    padding: 50px;  
  background-color: white;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid teal;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: teal;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
</style>  
  </head>
   <body class="app sidebar-mini rtl">
    <?php include('nav.php'); ?>
	
    <main class="app-content">
	<center>
      <div class="app-title">
	  <form action="#" method="post" enctype="multipart/form-data">
        <div>
          <h1><center>Add Employees</h1></center>
        </div>
	
  <hr>
<div>  
<label><b>Employee Type :</b></label>   
<select name="type" required>   
<option>Field Worker</option>
<option>Driver</option>
</select>
</div> 
<div>  
<label><b>Name :</b></label>   
<input type="text" name="name" placeholder= "Name" pattern="[A-Za-z\s]+" title="letters only" required />   
</div>  
<div>  
<label><b>DOB:</b></label>   
<input type="date" name="dob" placeholder= "DOB" required />   
</div>
<div>  
<label>   
<b>Gender :  
</b></label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
</div> 
<label><b>Phone</b></label>    
<input type="text" name="cno" placeholder="phone no." size="10" pattern="[6-9]{1}[0-9]{9}" title="Phone number with 7-9 and remaing 9 digit with 0-9"  required /> 
<label for="email"><b>Email </b></label>  
<input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="xyz@something.com" required> 
<div>
<b>Current Address : </b> 
<textarea cols="80" rows="5" name="address" placeholder="Current Address" value="address"  pattern="[A-Za-z0-9,-\s]+" title="valid address only" required>  
</textarea>  
<div>
<label><b>Image</b></label>
  <input type="file"  name="image">
</div> 
<div>
<label><b>Adhar</b></label>
  <input type="text"  name="adhar"  placeholder="Address" pattern="[2-9]{12}" title="12 numeric characters only">
</div> 
<button type="submit"  name="add" class="registerbtn">ADD</button>    
</form>  
</div> 
</div>
<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
		$eid=$_POST['eid'];
		$name=$_POST['name'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$cno=$_POST['cno'];
		$email=$_POST['email'];
		$salary='';
		$password='';
		$address=$_POST['address'];
		$type=$_POST['type'];
		$file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		$adhar=$_POST['adhar'];
		$tday=date("Y-m-d");
		$age=(date('Y')-date('Y',strtotime($dob)));
		//$age=date_diff(date_create($dob),date_create($tday));
 
		$query = "insert into employee(name,dob,gender,age,cno,email,salary,password,address,type,manager,image,adhar) values('".$name."','".$dob."','".$gender."','".$age."','".$cno."','".$email."','".$salary."','".$password."','".$address."','".$type."','".$_SESSION['manager']."','".$file."','".$adhar."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('ADD SUCCEFUL');
			</script>";
			echo "<script> location.href='eadd.php'; </script>";
		
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
  </body>
</html>