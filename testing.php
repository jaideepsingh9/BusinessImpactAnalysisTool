<?php
$sel=1;
$r1=4;
$radio='test';
$con=mysqli_connect("localhost","root","","ey");
if($sel==1){
	if($r1==4){
			echo ("hihih");
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
		$con->close();
		}
	if($r1<4){
			
		$sql3="insert into ctr2 values ('$radio','$sel') ";
		$con->query($sql3);
		$con->close();
		}}
?>