<?php
if(isset($_REQUEST['yes'])){
header('location:http://localhost/ey/survey-display2.php');}
if(isset($_REQUEST['no'])){
	echo "You will be redirected to new page!!";	
header('location:http://localhost/ey/home.php');	

	}
?>

<html>
<head>
<title>BIA-Survey</title>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/ey/bootstrap0.min.css">
  <script src="http://localhost/ey/jquery.min.js"></script>
  <script src="http://localhost/ey/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h3>Business Impact Analysis</h3>
<ul class="nav nav-tabs">
    <li><a href="http://localhost/ey/home.php">Home</a></li>
    <li class="active"><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li><a href="http://localhost/ey/4.php">BIA Classification</a></li>
    <li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
    <li><a href="#">Final MAO</a></li>
  </ul>
<form method="get">
<h3><strong> Do you want to see the Final MAO ? </strong><br></h3>
Else will be redirected to homepage.<br><br>
<input type="submit" name="yes" value="YES"> &nbsp;
<input type="submit" name="no" value="NO">
</form>
</div>
</body>
</html>