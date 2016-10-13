<html>
<head>
<meta charset="utf-8">
<title>BIA Classification-Display</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://localhost/ey/bootstrap0.min.css">
 <script src="http://localhost/ey/jquery.min.js"></script>
 <script src="http://localhost/ey/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/ey/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://localhost/ey/jaideep2.js"></script>

</head>

<body>
<div class="container">
  <h3>Business Impact Analysis</h3>
  <ul class="nav nav-tabs">
    <li><a href="http://localhost/ey/home.php">Home</a></li>
    <li ><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li class="active"><a href="http://localhost/ey/4.php">BIA Classification</a></li>
	<li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
   <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul><br>
<table border=1>
<tr>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ey";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1="select * from bia_classification";
$r1=mysqli_query($conn,$sql1);
$sql2="show columns from bia_classification";
$r2=mysqli_query($conn,$sql2);
$field=array();
$i=0;
while($row=mysqli_fetch_array($r2,MYSQLI_NUM)){
	$field[$i]=$row[0];	
$i++;}
foreach($field as $a){
	echo "<th>".$a."</th>";}
	echo ("</tr>");
	$c=count($field);
echo ("<tr>");
while($row=mysqli_fetch_array($r1,MYSQLI_NUM)){
	echo ("<tr>");
	$d=0;
	while($d<$c){
		echo ("<td>".$row[$d]."</td>");
		$d++;
		}
	echo ("</tr>");
	}
?>
</table>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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