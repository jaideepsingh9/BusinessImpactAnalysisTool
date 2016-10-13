<?php
session_start();
$id=$_SESSION['id'];
if(isset($_REQUEST['display'])){
	header('location:http://localhost/ey/Process Map-display-all.php');	}
if(isset($_REQUEST['print'])){
	header('location:http://localhost/phpmyadmin/sql.php?db=ey&table=client_data&printview=1&sql_query=SELECT+%2A+FROM+%60client_data%60&token=c2d7fb398f0896a6940d77028ceae209');	}

	if(isset($_GET['send'])){
		$r=$_GET['row'];
		$c=$_GET['col'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ey";
$con = mysqli_connect($servername, $username, $password, $dbname);

		for($i=0;$i<$r;$i++){
			$str2="'$id',";
			for($j=0;$j<$c;$j++){
				$str2 .="'".$_REQUEST['n_'.$i.'__'.$j.'_']."'";
				if($j!=($c-1)){
					$str2 .=",";
				}
			}	
			

			$sql="insert into client_data values ($str2) ";
			$con->query($sql);
			}

$con->close();

		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Map</title>
<script type="text/javascript" src="http://localhost/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="http://localhost/ey/jaideep.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://localhost/ey/bootstrap0.min.css">
 <script src="http://localhost/ey/jquery.min.js"></script>
 <script src="http://localhost/ey/bootstrap.min.js"></script>
<script type="text/javascript" src="http://localhost/ey/jquery-2.1.4.min.js"></script>


</head>

<body>
<div class="container">
  <h3>Business Impact Analysis</h3>
  <ul class="nav nav-tabs">
    <li><a href="http://localhost/ey/home.php">Home</a></li>
    <li class="active"><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li ><a href="http://localhost/ey/4.php">BIA Classification</a></li>
    <li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
   <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul><br>
<form action="#" id="foo">
	<table border="1">
    	<tr id="heading">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ey";
$con = mysqli_connect($servername, $username, $password, $dbname);
$sq = "show columns FROM client_data";
$result = mysqli_query($con, $sq);
while($row = mysqli_fetch_assoc($result)) {	$col[]=$row['Field'];}
		$i=count($col);
		$l=1;
		while($l<$i)
		{	$c=$col[$l];
			
			echo ("<th>" .$c. "</th>");
			$l++; }
	echo ("</tr><tr id=r0>");
$k=$i-1;
for($a=0;$a<$k;++$a){
	echo ("<td><input type= 'text' name='n_0__".$a."_'></td>");}
	echo ("</tr></table>");
	echo ("<input type='hidden' id='col' name='col' value= '$k'>");
	
	
?>
    <input type="hidden" id="row" name="row" value="1">
    
    <input type="button" id="addRow" value="Add Row">
    <input type="submit" name="send" value="Save">
        <input type="submit" name="display" value="Display">
            <input type="submit" name="print" value="Print">


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