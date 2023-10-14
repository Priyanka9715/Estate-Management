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
.intable{
		width:100%;
		height:100%;
		border:1px;
		border-radius:05px;
		margin:10px 0px 15px 0px;
		box-shadow:1px 1px 2px 1px darkcyan;
		
</style>  
  </head>
   <body class="app sidebar-mini rtl">
    <?php include('nav.php'); ?>
    <main class="app-content">
      
	 
      <div>
          <h1><center>Select Employees</h1></center>
        </div>
       
	   
	   
		
            <!-- Services Section -->
            
			<center>
			<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..">
			<table  style="border: medium solid teal ;padding:5px;text-align:center;" border="3" width="80%" id="myTable">
			<tr>
			<th>Sl.No</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>Email</th>
			<th>Type</th>
			<th>Action </th>
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
			<td><?php echo $name; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $age; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $type; ?></td>
			<td><?php if($manager=='') { ?><a href="select.php?select=<?php echo $id; ?>"><button style="background-color:green; color:white;">select</button></a><?php } else if($manager==$_SESSION['manager']){ ?><a href="select.php?unselect=<?php echo $id; ?>"><button style="background-color:red; color:white;">unselect</button></a><?php } else {?>Already selected<?php } ?></td>
	</tr>
	<?php
}
}
?>
<?php
include("config.php");
if(isset($_GET['select']))
{
$select=$_GET['select'];

$sql = "update employee set manager='".$_SESSION['manager']."' where id='".$select."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script> location.href='select.php'; </script>";
}
}

if(isset($_GET['unselect']))
{
$unselect=$_GET['unselect'];

$sql = "update employee set manager='' where id='".$unselect."'";
$query_run = mysqli_query($con,$sql);
if($query_run)
{ 
echo "<script> location.href='select.php'; </script>";
}
}
?>
			
			</table>
            </center>
			</div>        
			</div>        
            
	   <script>
function myFunction() {
  var input, filter, table, tr, td, cell, i, j;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    // Hide the row initially.
    tr[i].style.display = "none";
  
    td = tr[i].getElementsByTagName("td");
    for (var j = 0; j < td.length; j++) {
      cell = tr[i].getElementsByTagName("td")[j];
      if (cell) {
        if (cell.innerHTML.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
          break;
        } 
      }
    }
  }
}
</script>
	   
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