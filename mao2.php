<?php
if(isset($_REQUEST['sub'])){
header('location:http://localhost/ey/ThankYou.php');
}
?>
<html>
<head>
<title>Final MAO</title>
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
    <li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
    <li class="active"><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul>
<br>

<i><font color='green'>The records have been cleared !!</font></i>
<form method="post">
<br><br><br> Continue? <input type="submit" name="sub" value="Yes">
</form>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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