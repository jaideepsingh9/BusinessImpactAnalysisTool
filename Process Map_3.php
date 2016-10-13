<?php
if(isset($_REQUEST['d1'])){
header('location:http://localhost/ey/Process Map-partial.php');	
}
if(isset($_REQUEST['d2'])){
header('location:http://localhost/ey/Process Map_2.php');	
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Map</title>
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
    <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul>
<form mwthod="get">
<strong><font color="red"><h4>NOTE:</h4></font></strong>
<br><strong> 1) Add content in previous table- </strong><input type="submit" value="Insert to previous" name="d1"><br>
 <strong> 2) Add content in a new table- </strong><input type="submit" value="Insert to new" name="d2"><br>
<i><font color="red">Choosing option "2" will create a new table and delete all the previous data...</font></i>
</form>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
								2015 &copy; All Rights Reserved.
								
						</p>
						</center>
                    </div>
	      </div>
            </div> 
</div>

  </div>
</body>
</html>