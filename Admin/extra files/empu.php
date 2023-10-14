<form action="#" method="post">
<div class="tile" name="view">
            <h3 class="tile-title">EMPLOYEES</h3>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>EID</th>
                  <th>Employee Name</th>
				  <th>Date Of Birth</th>
                  <th>Age</th>
				  <th>Gender</th>
                  <th>Phone</th>
				  <th>Email</th>
				  <th>Salary</th>
                  <th>Password</th>
				  <th>Address</th>
				  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $row['eid']?></td>
                 <td><?php echo $row['name']?></td>
				 <td><?php echo $row['dob']?></td>
				 <td><?php echo $row['gender']?></td>
				 <td><?php echo $row['age']?></td>
				 <td><?php echo $row['cno']?></td>
				 <td><?php echo $row['email']?></td>
				 <td><?php echo $row['salary']?></td>
				 <td><?php echo $row['password']?></td>
				 <td><?php echo $row['address']?></td>
                 <td><button class="btn btn-outline-danger" name="update" type="submit">Finish</button></td>
				 </tbody>
				 </table>
</form>
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