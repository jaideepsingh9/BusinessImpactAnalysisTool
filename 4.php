<?php
if(isset($_REQUEST['display'])){
	header('location:http://localhost/ey/4-display.php');	}
if(isset($_REQUEST['print'])){
	header('location:http://localhost/phpmyadmin/sql.php?db=ey&table=bia_classification&printview=1&sql_query=SELECT+%2A+FROM+%60bia_classification%60&token=70e964d12a346a2c436cbd5476764239');	}


if(isset($_REQUEST['send'])){
				$a1=$_REQUEST['t1'];
				$a2=$_REQUEST['t2'];
				$a3=$_REQUEST['t3'];
				$a4=$_REQUEST['t4'];
				$a5=$_REQUEST['t5'];
				$a6=$_REQUEST['t6'];
				$a7=$_REQUEST['t7'];
				$a8=$_REQUEST['t8'];
				$a9=$_REQUEST['t9'];
				$a10=$_REQUEST['t10'];
				$a11=$_REQUEST['t11'];
				$a12=$_REQUEST['t12'];
				$a13=$_REQUEST['t13'];
				$a14=$_REQUEST['t14'];
				$a15=$_REQUEST['t15'];
				$a16=$_REQUEST['t16'];
				$a17=$_REQUEST['t17'];
				$a18=$_REQUEST['t18'];
				$a19=$_REQUEST['t19'];
				$a20=$_REQUEST['t20'];
				$a21=$_REQUEST['t21'];
				$a22=$_REQUEST['t22'];
				$a23=$_REQUEST['t23'];
				$a24=$_REQUEST['t24'];
				$a25=$_REQUEST['t25'];
				$a26=$_REQUEST['t26'];
				$a27=$_REQUEST['t27'];
				$a28=$_REQUEST['t28'];
				$a29=$_REQUEST['t29'];
				$a30=$_REQUEST['t30'];
				$a31=$_REQUEST['t31'];
				$a32=$_REQUEST['t32'];
				$a33=$_REQUEST['t33'];
				$a34=$_REQUEST['t34'];
				$a35=$_REQUEST['t35'];
				$a36=$_REQUEST['t36'];
				$a37=$_REQUEST['t37'];
				$a38=$_REQUEST['t38'];
				$a39=$_REQUEST['t39'];
				$a40=$_REQUEST['t40'];
				$a41=$_REQUEST['t41'];
				$a42=$_REQUEST['t42'];
				$a43=$_REQUEST['t43'];
				$a44=$_REQUEST['t44'];
				$a45=$_REQUEST['t45'];
		
		$con=new mysqli("localhost","root","","ey") or die("Can not connect to database");
	$s=("drop table bia_classification");
    $con->query($s);	
	$sql1=("create table bia_classification( Serial_Number int primary key auto_increment, Type varchar(20), Impact varchar(20), Insignificant_0 varchar(80), Low_1 varchar(80), Medium_2 varchar(80),Significant_3 varchar(80), High_4 varchar(80))");
	$con->query($sql1);
	$sql2=("insert into bia_classification values ('','Financial Impact','Lost Income / Revenue','$a1','$a2','$a3','$a4','$a5')");
	$con->query($sql2);
	$sql3=("insert into bia_classification values ('','Financial Impact','Cost / Expense Incurred','$a6','$a7','$a8','$a9','$a10')");
	$con->query($sql3);
	$sql4=("insert into bia_classification values ('','Operational Impact','Loss of output','$a11','$a12','$a13','$a14','$a15')");
	$con->query($sql4);
	$sql5=("insert into bia_classification values ('','Reputational Impact','Legal / Regulations','$a16','$a17','$a18','$a19','$a20')");
	$con->query($sql5);
	$sql6=("insert into bia_classification values ('','Reputational Impact','Key Business Partners (e.g. - DGH, ONGC, Suppliers, Customers)','$a21','$a22','$a23','$a24','$a25')");
	$con->query($sql6);
	$sql7=("insert into bia_classification values ('','Reputational Impact','Shareholders (e.g. - Investors, Financial Institutions, Vedanta, Employees)','$a26','$a27','$a28','$a29','$a30')");
	$con->query($sql7);
	$sql8=("insert into bia_classification values ('','Reputational Impact','Communities','$a31','$a32','$a33','$a34','$a35')");
	$con->query($sql8);
	$sql9=("insert into bia_classification values ('','HSE Impact','Health & Safety','$a36','$a37','$a38','$a39','$a40')");
	$con->query($sql9);
	$sql10=("insert into bia_classification values ('','HSE Impact','Environment','$a41','$a42','$a43','$a44','$a45')");
	$con->query($sql10);
	$con->close();
	echo ("<i><font color='green'>Records Saved !!</font></i>");
}



?>

<html>
<head>
<title> BIA CLASSIFICATION</title>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost/ey/bootstrap0.min.css">
  <script src="http://localhost/ey/jquery.min.js"></script>
  <script src="http://localhost/ey/bootstrap.min.js"></script>
</head>

<body>
<form method="post">
<div class="container">
  <h3>Business Impact Analysis</h3>
  <ul class="nav nav-tabs">
    <li><a href="http://localhost/ey/home.php">Home</a></li>
    <li><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li class="active"><a href="http://localhost/ey/4.php">BIA Classification</a></li>
	 <li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
 	<li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li> 
  </ul><br>
<table border=1>
<tr>
<td><h3>TYPE</h3></td> <td><h3> IMPACT</h3></td> <td><h3> Insignificant-0</h3></td> <td><h3> Low-1 </h3></td> <td><h3>Medium-2</h3></td> <td><h3> High-3</h3></td> <td><h3> Very high-4</h3></td>
</tr>
<tr>
<td rowspan="2"><h4>Financial Impact</h4></td> <td> Low Income/Revenue</td> <td><input type="text" name="t1"></td><td><input type="text" name="t2"></td><td><input type="text" name="t3"></td><td><input type="text" name="t4"></td><td><input type="text" name="t5"></td>
</tr>
<tr> 
<td> Cost/Expense Incurred</td><td><input type="text" name="t6"></td><td><input type="text" name="t7"></td><td><input type="text" name="t8"></td><td><input type="text" name="t9"></td><td><input type="text" name="t10"></td>
</tr> 
<tr>
<td><h4>Operational Impact</h4></td> <td> Loss of Output</td> <td><input type="text" name="t11"></td><td><input type="text" name="t12"></td><td><input type="text" name="t13"></td><td><input type="text" name="t14"></td><td><input type="text" name="t15"></td>
</tr>
<tr>
<td rowspan="4"><h4>Reputation Impact</h4></td> <td> Legal/Regulations</td> <td><input type="text" name="t16"></td><td><input type="text" name="t17"></td><td><input type="text" name="t18"></td><td><input type="text" name="t19"></td><td><input type="text" name="t20"></td>
</tr>
<tr> 
<td>Key Business Partners (e.g. - DGH, ONGC, Suppliers, Customers)</td><td><input type="text" name="t21"></td><td><input type="text" name="t22"></td><td><input type="text" name="t23"></td><td><input type="text" name="t24"></td><td><input type="text" name="t25"></td>
</tr> 
<tr> 
<td>Shareholders(e.g.- Investers, Financial Institutions, Vedanta, Employees)</td><td><input type="text" name="t26"></td><td><input type="text" name="t27"></td><td><input type="text" name="t28"></td><td><input type="text" name="t29"></td><td><input type="text" name="t30"></td>
</tr> 
<tr> 
<td>Communities</td><td><input type="text" name="t31"></td><td><input type="text" name="t32"></td><td><input type="text" name="t33"></td><td><input type="text" name="t34"></td><td><input type="text" name="t35"></td>
</tr> 
<tr>
<td rowspan="2"><h4>HSE Impact</h4></td> <td> Healh3 and Safety</td> <td><input type="text" name="t36"></td><td><input type="text" name="t37"></td><td><input type="text" name="t38"></td><td><input type="text" name="t39"></td><td><input type="text" name="t40"></td>
</tr>
<tr>
<td>Environment</td> <td><input type="text" name="t41"></td><td><input type="text" name="t42"></td><td><input type="text" name="t43"></td><td><input type="text" name="t44"></td><td><input type="text" name="t45"></td>
</tr>
</table>
<input type="submit" value="SAVE" name="send">
<input type="submit" value="Display" name="display">
<input type="submit" value="Print" name="print">
</form>

<div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">                     
                        <center>
						<p><br>
								2015 &copy; All Rights Reserved.
								
						</p>
						</center>
                    </div>
	      </div>
            </div> 
</div>
</div><br>
</body>
</html>