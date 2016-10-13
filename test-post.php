<?php
echo "<strong><font color='#15B422'>Sucess,  Values saved!!!<br><br></font></strong>";
if(isset($_REQUEST['yes'])){
header('location:http://localhost/ey/test-pre.php');}
if(isset($_REQUEST['no'])){
	echo "You will be redirected to new page!!";	
header('location:http://localhost/ey/survey-display2.php');	

	}
?>

<html>
<head>
<title>Survey</title>
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
    <li><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li><a href="http://localhost/ey/4.php">BIA Classification</a></li>
    <li class="active"><a href="http://localhost/ey/test-pre.php">Survey</a></li>
    <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul>
<form method="get">
<h3> Do you want to fill more Survey? <h3>
<input type="submit" name="yes" value="YES"> &nbsp;
<input type="submit" name="no" value="NO">
</form>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br><br>
							<h5>	2015 &copy; All Rights Reserved. </h5>
								
						</p>
						</center>
                    </div>
	      </div>
            </div> 
</div>
</div>
</body>
</html>