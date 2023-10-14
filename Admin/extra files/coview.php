

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
    <title>Gatty Surgical | Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
   <body class="app sidebar-mini rtl">
<?php include('navigation.php')?>
<form action="#" method="post"><br><br><br><br><br>
<center>
<table allign="center" border="2" >
<tr>
<td colspan="2" align="center"><h1><b>COFFEE</b></h1></td>
</tr>
<tr>
<th>Area(in acres)</th>
<td><input type="number"></td>
</tr>
<tr>
<th>No. of Trees :</th>
<td><input type="number"></td>
</tr>
<tr>
<th>Month of spray:</th>
<td><input type="text"></td>
</tr>
<tr>
<th>Pesticide</th>
<td><input type="text"></td>
</tr>
<tr>
<th>Pesticide Quantity</th>
<td><input type="number"></td>
</tr>
<tr><th> Month of Flowering :</th>
<td><input type="text"></td>
<tr><td></td><td></td></tr>
<tr><th>Month of seedling:</th>
<td><input type="text"></td>
<tr>
<th>Month of Plucking : </th>
<td><input type="text"></td>
</tr>
<tr>
<th>Sunlight Drying Period : </th>
<td><input type="number"></td>
</tr>
<tr>
<th>Quantity of Growth(in kgs) :</th>
<td><input type="number"></td>
</tr>
<tr>
<th>Number of Bags : </th>
<td><input type="number"></td>
</tr>
<tr>
<th>Old Stock (in kgs) :</th>
<td><input type="number"></td>
</tr>
<tr>
<th>New Stock (in kgs) :</th>
<td><input type="number"></td>
</tr>
<tr>
<th>Total Stock (in kgs) :</th>
<td><input type="number"></td>
</tr>
</center>
</table>
</form>	
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