<?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
		$name=$_POST['name'];
		$email=$_POST['email'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$password=$_POST['password'];
		
		
	

		

		$query = "insert into userregister(name,email,question,answer,phone,address,password) values('".$name."','".$email."','".$question."','".$answer."','".$phone."','".$address."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='user.php'; </script>";
		
	
}
?>












<?php
if(isset($_POST['save']))
{
	error_reporting(1);
	include("config.php");
	
	$Email=$_POST['email'];

	$sql = "select * from userregister where email='$email'";
	$result = mysqli_query($con,$sql);
	$count=mysqlI_num_rows($result);


	if($count>0)
	{
		
		echo "<script>
				alert('There is an existing account associated with this email.');
			</script>";
			echo "<script> location.href='home.php'; </script>";
	}
	else
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$question=$_POST['question'];
		$answer=$_POST['answer'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$password=$_POST['password'];
		
		
		

		$query = "insert into userregister(name,email,question,answer,phone,address,password) values('".$name."','".$email."','".$question."','".$answer."','".$phone."','".$address."','".$password."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Registeration Completed, Please Login.');
			</script>";
			echo "<script> location.href='user.php'; </script>";
		}
	
}
?>