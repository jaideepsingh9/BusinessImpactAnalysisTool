<html>
<title>Final MAO</title>
<body>
<table border=1>
<?php
session_start();
$a=$_SESSION['sno'];
$b=$_SESSION['sel'];
echo " fd=".$a.$b; 
$con=mysqli_connect("localhost","root","","ey");
$s=("select Serial_Number,Process,Mega_Process from pro order by Serial_Number asc");
$r=$con->query($s);
echo ("<tr><th> Serial Number</th><th> Process</th><th>Mega Process</th><th>MAO</th><th>Process Criticality</th></tr>");
$c="The Process is Critical";
while($row = mysqli_fetch_assoc($r)) {
	if($b==1){$s="Upto 4 Hrs";}
	if($b==2){$s="Upto 8 Hrs";}
	if($b==3){$s="Upto 12 Hrs";}
	if($b==4){$s="Upto 24 Hrs";}
	if($b==5){$s="Upto 48 Hrs";}
	if($b==6){$s="Upto 72 Hrs";}
	if($b==7){$s="Upto 1 Week";}
	if($b==8){$s="Upto 2 Week";}
	if($b==9){$s="Upto 3 Weeks";}
	if($b==10){$s="More than 3 Weeks";}
echo ("<tr><td>".$row['Serial_Number']."</td><td>".$row['Process']."</td><td>".$row['Mega_Process']."</td><td>".$s."</td><td><strong><font color=red>".$c."</font></strong></td></tr>");

}



?>
</table>
</body>
</html>