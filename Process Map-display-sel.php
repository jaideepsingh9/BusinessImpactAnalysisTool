<?php
session_start();
//$a=$_SESSION['a'];
$a=25;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jatin2-display</title>
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
  </ul><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ey";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "show columns FROM client_data";
$result = mysqli_query($conn, $sql);
$col=array();
$s="select * from client_data where id='$a'";
$r=mysqli_query($conn,$s);		
$j=1;
    while($row = mysqli_fetch_assoc($result)) {	$col[]=$row['Field'];}
		$i=count($col);
	echo ("<table border=1> <tr>");
while($j<$i){
	echo ("<th>". $col[$j] ."</th>");
	$j++;
	}		
echo ("</tr>");	


	while($row=mysqli_fetch_array($r,MYSQLI_NUM)){
		echo ("<tr>");				
		for($k=1;$k<$i;$k++){
			echo ("<td>" .$row[$k]."</td>");}
	echo ("</tr>");
	
	}		
		
		
		
?>
</table>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br>
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