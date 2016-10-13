<?php
if(isset($_REQUEST['Display'])){
header('location:http://localhost/ey/3-display.php');
}

if(isset($_REQUEST['Print'])){
header('location:http://localhost/phpmyadmin/sql.php?db=ey&table=client_info&printview=1&sql_query=SELECT+%2A+FROM+%60client_info%60&token=c2d7fb398f0896a6940d77028ceae209');
}
	if(isset($_GET['send'])){
		$a=$_GET['department'];
		$b=$_GET['department_head'];
		$c=$_GET['process_owner'];
		session_start();
		
	$conn = new mysqli("localhost", "root", "", "ey");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql3="create table client_info(id int primary key auto_increment,Department varchar(50),Department_Head varchar(50),Process_Owner varchar(50))";
$conn->query($sql3);
$sql1="insert into client_info values ('','$a','$b','$c')";
$sql2 = "select id from client_info where Department='$a' and Department_Head='$b' and Process_Owner='$c'";
$result = $conn->query($sql1);
$result2 = $conn->query($sql2);
$row=mysqli_fetch_array($result2,MYSQLI_NUM);
$r=$row[0];
echo "<br>".$r;
$_SESSION['id']=$r;
header('location:http://localhost/ey/Process Map_3.php');
$conn->close();
	}
?>



<html>
<head>
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
<fieldset>
<legend> Enter Details from Client :</legend>
<form method="GET" action="#">

<strong> &nbsp Department      :</strong> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="text" name="department">
<strong><br> &nbsp Department Head:</strong>  <input type="text" name="department_head">
<strong><br> &nbsp Process Owner  :</strong>  &nbsp&nbsp <input type="text" name="process_owner">
</fieldset>
&nbsp&nbsp <input type="submit" name="send" value="SAVE">&nbsp
<input type="submit" name="Display" value="Display">
&nbsp <input type="submit" name="Print" value="Print">
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