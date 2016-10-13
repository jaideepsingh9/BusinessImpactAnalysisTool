<?php
if(isset($_REQUEST['clear'])){
$con=mysqli_connect("localhost","root","","ey");
$sql=("truncate ctr");
$result=$con->query($sql);
$con->close();
echo ("<i><font color='green'>The records have been cleared !!</font></i>");
header('location:http://localhost/ey/mao2.php');
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
  </ul><br>
<table border=1>
<?php
$con=mysqli_connect("localhost","root","","ey");
$sql=("select process,selection from ctr");
$result=$con->query($sql);

echo ("<tr><th> S.No</th><th>Mega Process</th><th>Process</th><th>MAO</th><th>Process Criticality</th></tr>");
$c="The Process is Critical";
$i=0;
$val1=array();
$val2=array();
$val3=array();
while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
$val1[$i]=$row[0];
$val2[$i]=$row[1];

$i++;
}
$c=count($val1);

$j2=0;
$d="<strong><font color='red'> Process is Critical </font></strong>";

for($j3=0;$j3<$c;$j3++){
	if($val2[$j3]==1){$val3[$j3]="Upto 4 Hrs";}
	if($val2[$j3]==2){$val3[$j3]="Upto 8 Hrs";}
	if($val2[$j3]==3){$val3[$j3]="Upto 12 Hrs";}
	if($val2[$j3]==4){$val3[$j3]="Upto 24 Hrs";}
	if($val2[$j3]==5){$val3[$j3]="Upto 48 Hrs";}
	if($val2[$j3]==6){$val3[$j3]="Upto 72 Hrs";}
	if($val2[$j3]==7){$val3[$j3]="Upto 1 Week";}
	if($val2[$j3]==8){$val3[$j3]="Upto 2 Week";}
	if($val2[$j3]==9){$val3[$j3]="Upto 3 Weeks";}
	if($val2[$j3]==10){$val3[$j3]="More than 3 Weeks";}

}

for($j=0;$j<$c;$j++){
$sq="select Mega_Process from client_data where process='$val1[$j]'";
$re=$con->query($sq);
$row2=mysqli_fetch_array($re,MYSQLI_NUM);

$j2++;
echo ("<tr><td>".$j2."</td><td>".$row2[0]."</td><td>".$val1[$j]."</td><td>".$val3[$j]."</td><td>".$d."</td></tr>");
}
?>
</table>
<form method="post">
<br><input type="submit" name="clear" value="Clear Records">
<i><strong><font color="red"><br>Warning:<br></strong> Clear Records will clear all the previous saved data !! </font></i>
</form>
<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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