<html>
<title>Final MAO</title>
<body>
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
echo $row[0].$row[1];
$i++;
}
$c=count($val1);
echo $c;
$j2=0;
$d='ara hai';

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
echo $val3[1];
for($j=0;$j<$c;$j++){
$sq="select Mega_Process from client_data where process='$val1[$j]'";
$re=$con->query($sq);
$row2=mysqli_fetch_array($re,MYSQLI_NUM);
echo $row2[0];
$j2++;
echo ("<tr><td>".$j2."</td><td>".$row2[0]."</td><td>".$val1[$j]."</td><td>".$val3[$j]."</td><td>".$d."</td></tr>");
}


echo ("<tr><th> S.No</th><th>Mega Process</th><th>Process</th><th>MAO</th><th>Process Criticality</th></tr>");
//for($j=0;$j<$c;$j++){
$sql3=("select Mega_Process,Process from client_data");
$result3=$con->query($sql3);
$j=0;
while($row=mysqli_fetch_array($result3,MYSQLI_NUM)){
$j2++;

echo ("<tr><td>".$j2."</td><td>".$row2[0]."</td><td>".$row[1]."</td><td>".$val3[$j]."</td><td>".$d."</td></tr>");
$j++;
}



?>
</table>
</body>
</html>