<?php
if(isset($_REQUEST['send'])){
	$a=$_REQUEST['val'];
	session_start();
	$_SESSION['a']=$a;
	header('location:http://localhost/ey/Process Map-display-sel.php');
		}
if(isset($_REQUEST['send2'])){
	header('location:http://localhost/ey/Process Map-display-all.php');
		}

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Map Display</title>
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
<form action="#">
<table border=1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ey";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, Department, Department_Head, Process_Owner FROM client_info";
$result = mysqli_query($conn, $sql);

echo ("<tr><th>Id</th><th> Department</th><th> Department Head</th><th>Process Owner</th></tr>");    
    while($row = mysqli_fetch_assoc($result)) {
echo ("<tr><td>".$row['id']."</td><td>".$row['Department']."</td><td>".$row['Department_Head']."</td><td>".$row['Process_Owner']."</td></tr>");


}
?>
</table>
Enter the Serial Number to be displayed: <input type="text" name="val" >
<input type="submit" name="send" value="Display">
<input type="submit" name="send2" value="Display All">
</form>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br>
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