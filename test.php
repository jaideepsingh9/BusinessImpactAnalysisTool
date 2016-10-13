<?php
session_start();
$radio=$_SESSION['radio'];


if(isset($_REQUEST['n'])){
$con=mysqli_connect("localhost","root","","ey");
//$s=("select Serial_Number from pro order by Serial_Number asc");
//$r=$con->query($s);


$sql="create table ctr(process varchar(50), selection int)";
$con->query($sql);
$flag=0;
//session_start();
$sno=array();
//while($row=mysqli_fetch_array($r,MYSQLI_NUM)){
	$flag++;
	$r1=$r2=$r3=$r4=$r5=$r6=$r7=$r8=$r9=$r10=$r11=$r12=$r13=$r14=$r15=$r16=$r17=$r18=$r19=$r20=$r21=$r22=$r23=$r24=$r25=$r26=$r27=$r28=$r29=$r30=$r31=$r32=$r33=$r34=$r35=$r36=$r37=$r38=$r39=$r40=null;
		$sel=$_REQUEST['s'];

	for($i=0;$i<$flag;$i++){
	for($j=1;$j<=90;$j++){
		$a=$_REQUEST['a_'.$i.'_'.$j];
		

		if($j==21){$r11=$a;}
		if($j==22){$r12=$a;}
		if($j==23){$r13=$a;}
		if($j==24){$r14=$a;}
		if($j==25){$r15=$a;}
		if($j==26){$r16=$a;}
		if($j==27){$r17=$a;}
		if($j==28){$r18=$a;}
		if($j==29){$r19=$a;}
		if($j==30){$r20=$a;}
	
	}}


if($_REQUEST['a_0_1']>$_REQUEST['a_0_11']){
	$r1=$_REQUEST['a_0_1'];}	
if($_REQUEST['a_0_1']<$_REQUEST['a_0_11']){
	$r1=$_REQUEST['a_0_11'];}

if($_REQUEST['a_0_2']>$_REQUEST['a_0_12']){
	$r2=$_REQUEST['a_0_2'];}	
if($_REQUEST['a_0_2']<$_REQUEST['a_0_12']){
	$r2=$_REQUEST['a_0_12'];	}

if($_REQUEST['a_0_3']>$_REQUEST['a_0_13']){
	$r3=$_REQUEST['a_0_3'];
	}	
if($_REQUEST['a_0_3']<$_REQUEST['a_0_13']){
	$r3=$_REQUEST['a_0_13'];
		}

if($_REQUEST['a_0_4']>$_REQUEST['a_0_14']){
	$r4=$_REQUEST['a_0_4'];
	}	
if($_REQUEST['a_0_4']<$_REQUEST['a_0_14']){
	$r4=$_REQUEST['a_0_14'];
		}

if($_REQUEST['a_0_5']>$_REQUEST['a_0_15']){
	$r5=$_REQUEST['a_0_5'];
	}	
if($_REQUEST['a_0_5']<$_REQUEST['a_0_15']){
	$r5=$_REQUEST['a_0_15'];
		}

if($_REQUEST['a_0_6']>$_REQUEST['a_0_16']){
	$r6=$_REQUEST['a_0_6'];
	}	
if($_REQUEST['a_0_6']<$_REQUEST['a_0_16']){
	$r6=$_REQUEST['a_0_16'];
		}

if($_REQUEST['a_0_7']>$_REQUEST['a_0_17']){
	$r7=$_REQUEST['a_0_7'];
	}	
if($_REQUEST['a_0_7']<$_REQUEST['a_0_17']){
	$r7=$_REQUEST['a_0_17'];
	}

if($_REQUEST['a_0_8']>$_REQUEST['a_0_18']){
	$r8=$_REQUEST['a_0_8'];
	}	
if($_REQUEST['a_0_8']<$_REQUEST['a_0_18']){
	$r8=$_REQUEST['a_0_18'];
	}

if($_REQUEST['a_0_9']>$_REQUEST['a_0_19']){
	$r9=$_REQUEST['a_0_9'];
	}	
if($_REQUEST['a_0_9']<$_REQUEST['a_0_19']){
	$r9=$_REQUEST['a_0_19'];
	}

if($_REQUEST['a_0_10']>$_REQUEST['a_0_20']){
	$r10=$_REQUEST['a_0_10'];
	}	
if($_REQUEST['a_0_10']<$_REQUEST['a_0_20']){
	$r10=$_REQUEST['a_0_20'];
	}

if($_REQUEST['a_0_31']>$_REQUEST['a_0_41'])
{if($_REQUEST['a_0_31']>$_REQUEST['a_0_51'])
{if($_REQUEST['a_0_31']>$_REQUEST['a_0_61'])
{$r21=$_REQUEST['a_0_31'];}else{$r21=$_REQUEST['a_0_61'];}}
else{if($_REQUEST['a_0_51']>$_REQUEST['a_0_61']){$r21=$_REQUEST['a_0_51'];}
else{$r21=$_REQUEST['a_0_61'];}}}
else{if($_REQUEST['a_0_41']>$_REQUEST['a_0_51'])
{if($_REQUEST['a_0_41']>$_REQUEST['a_0_61']){$r21=$_REQUEST['a_0_41'];}
else{$r21=$_REQUEST['a_0_61'];}}
else{if($_REQUEST['a_0_51']>$_REQUEST['a_0_61'])
{$r21=$_REQUEST['a_0_51'];}
else{$r21=$_REQUEST['a_0_61'];}}}

if($_REQUEST['a_0_32']>$_REQUEST['a_0_42'])
{if($_REQUEST['a_0_32']>$_REQUEST['a_0_52'])
{if($_REQUEST['a_0_32']>$_REQUEST['a_0_62'])
{$r22=$_REQUEST['a_0_32'];}else{$r22=$_REQUEST['a_0_62'];}}
else{if($_REQUEST['a_0_52']>$_REQUEST['a_0_62']){$r22=$_REQUEST['a_0_52'];}
else{$r22=$_REQUEST['a_0_62'];}}}
else{if($_REQUEST['a_0_42']>$_REQUEST['a_0_52'])
{if($_REQUEST['a_0_42']>$_REQUEST['a_0_62']){$r22=$_REQUEST['a_0_42'];}
else{$r22=$_REQUEST['a_0_62'];}}
else{if($_REQUEST['a_0_52']>$_REQUEST['a_0_62'])
{$r22=$_REQUEST['a_0_52'];}
else{$r22=$_REQUEST['a_0_62'];}}}

if($_REQUEST['a_0_33']>$_REQUEST['a_0_43'])
{if($_REQUEST['a_0_33']>$_REQUEST['a_0_53'])
{if($_REQUEST['a_0_33']>$_REQUEST['a_0_63'])
{$r23=$_REQUEST['a_0_33'];}else{$r23=$_REQUEST['a_0_63'];}}
else{if($_REQUEST['a_0_53']>$_REQUEST['a_0_63']){$r23=$_REQUEST['a_0_53'];}
else{$r23=$_REQUEST['a_0_63'];}}}
else{if($_REQUEST['a_0_43']>$_REQUEST['a_0_53'])
{if($_REQUEST['a_0_43']>$_REQUEST['a_0_63']){$r23=$_REQUEST['a_0_43'];}
else{$r23=$_REQUEST['a_0_63'];}}
else{if($_REQUEST['a_0_53']>$_REQUEST['a_0_63'])
{$r23=$_REQUEST['a_0_53'];}
else{$r23=$_REQUEST['a_0_63'];}}}

if($_REQUEST['a_0_34']>$_REQUEST['a_0_44'])
{if($_REQUEST['a_0_34']>$_REQUEST['a_0_54'])
{if($_REQUEST['a_0_34']>$_REQUEST['a_0_64'])
{$r24=$_REQUEST['a_0_34'];}else{$r24=$_REQUEST['a_0_64'];}}
else{if($_REQUEST['a_0_54']>$_REQUEST['a_0_64']){$r24=$_REQUEST['a_0_54'];}
else{$r24=$_REQUEST['a_0_64'];}}}
else{if($_REQUEST['a_0_44']>$_REQUEST['a_0_54'])
{if($_REQUEST['a_0_44']>$_REQUEST['a_0_64']){$r24=$_REQUEST['a_0_44'];}
else{$r24=$_REQUEST['a_0_64'];}}
else{if($_REQUEST['a_0_54']>$_REQUEST['a_0_64'])
{$r24=$_REQUEST['a_0_54'];}
else{$r24=$_REQUEST['a_0_64'];}}}

if($_REQUEST['a_0_35']>$_REQUEST['a_0_45'])
{if($_REQUEST['a_0_35']>$_REQUEST['a_0_55'])
{if($_REQUEST['a_0_35']>$_REQUEST['a_0_65'])
{$r25=$_REQUEST['a_0_35'];}else{$r25=$_REQUEST['a_0_65'];}}
else{if($_REQUEST['a_0_55']>$_REQUEST['a_0_65']){$r25=$_REQUEST['a_0_55'];}
else{$r25=$_REQUEST['a_0_65'];}}}
else{if($_REQUEST['a_0_45']>$_REQUEST['a_0_55'])
{if($_REQUEST['a_0_45']>$_REQUEST['a_0_65']){$r25=$_REQUEST['a_0_45'];}
else{$r25=$_REQUEST['a_0_65'];}}
else{if($_REQUEST['a_0_55']>$_REQUEST['a_0_65'])
{$r25=$_REQUEST['a_0_55'];}
else{$r25=$_REQUEST['a_0_65'];}}}

if($_REQUEST['a_0_36']>$_REQUEST['a_0_46'])
{if($_REQUEST['a_0_36']>$_REQUEST['a_0_56'])
{if($_REQUEST['a_0_36']>$_REQUEST['a_0_66'])
{$r26=$_REQUEST['a_0_36'];}else{$r26=$_REQUEST['a_0_66'];}}
else{if($_REQUEST['a_0_56']>$_REQUEST['a_0_66']){$r26=$_REQUEST['a_0_56'];}
else{$r26=$_REQUEST['a_0_66'];}}}
else{if($_REQUEST['a_0_46']>$_REQUEST['a_0_56'])
{if($_REQUEST['a_0_46']>$_REQUEST['a_0_66']){$r26=$_REQUEST['a_0_46'];}
else{$r26=$_REQUEST['a_0_66'];}}
else{if($_REQUEST['a_0_56']>$_REQUEST['a_0_66'])
{$r26=$_REQUEST['a_0_56'];}
else{$r26=$_REQUEST['a_0_66'];}}}

if($_REQUEST['a_0_37']>$_REQUEST['a_0_47'])
{if($_REQUEST['a_0_37']>$_REQUEST['a_0_57'])
{if($_REQUEST['a_0_37']>$_REQUEST['a_0_67'])
{$r27=$_REQUEST['a_0_37'];}else{$r27=$_REQUEST['a_0_67'];}}
else{if($_REQUEST['a_0_57']>$_REQUEST['a_0_67']){$r27=$_REQUEST['a_0_57'];}
else{$r27=$_REQUEST['a_0_67'];}}}
else{if($_REQUEST['a_0_47']>$_REQUEST['a_0_57'])
{if($_REQUEST['a_0_47']>$_REQUEST['a_0_67']){$r27=$_REQUEST['a_0_47'];}
else{$r27=$_REQUEST['a_0_67'];}}
else{if($_REQUEST['a_0_57']>$_REQUEST['a_0_67'])
{$r27=$_REQUEST['a_0_57'];}
else{$r27=$_REQUEST['a_0_67'];}}}

if($_REQUEST['a_0_38']>$_REQUEST['a_0_48'])
{if($_REQUEST['a_0_38']>$_REQUEST['a_0_58'])
{if($_REQUEST['a_0_38']>$_REQUEST['a_0_68'])
{$r28=$_REQUEST['a_0_38'];}else{$r28=$_REQUEST['a_0_68'];}}
else{if($_REQUEST['a_0_58']>$_REQUEST['a_0_68']){$r28=$_REQUEST['a_0_58'];}
else{$r28=$_REQUEST['a_0_68'];}}}
else{if($_REQUEST['a_0_48']>$_REQUEST['a_0_58'])
{if($_REQUEST['a_0_48']>$_REQUEST['a_0_68']){$r28=$_REQUEST['a_0_48'];}
else{$r28=$_REQUEST['a_0_68'];}}
else{if($_REQUEST['a_0_58']>$_REQUEST['a_0_68'])
{$r28=$_REQUEST['a_0_58'];}
else{$r28=$_REQUEST['a_0_68'];}}}

if($_REQUEST['a_0_39']>$_REQUEST['a_0_49'])
{if($_REQUEST['a_0_39']>$_REQUEST['a_0_59'])
{if($_REQUEST['a_0_39']>$_REQUEST['a_0_69'])
{$r29=$_REQUEST['a_0_39'];}else{$r29=$_REQUEST['a_0_69'];}}
else{if($_REQUEST['a_0_59']>$_REQUEST['a_0_69']){$r29=$_REQUEST['a_0_59'];}
else{$r29=$_REQUEST['a_0_69'];}}}
else{if($_REQUEST['a_0_49']>$_REQUEST['a_0_59'])
{if($_REQUEST['a_0_49']>$_REQUEST['a_0_69']){$r29=$_REQUEST['a_0_49'];}
else{$r29=$_REQUEST['a_0_69'];}}
else{if($_REQUEST['a_0_59']>$_REQUEST['a_0_69'])
{$r29=$_REQUEST['a_0_59'];}
else{$r29=$_REQUEST['a_0_69'];}}}

if($_REQUEST['a_0_40']>$_REQUEST['a_0_50'])
{if($_REQUEST['a_0_40']>$_REQUEST['a_0_60'])
{if($_REQUEST['a_0_40']>$_REQUEST['a_0_70'])
{$r30=$_REQUEST['a_0_40'];}else{$r30=$_REQUEST['a_0_70'];}}
else{if($_REQUEST['a_0_60']>$_REQUEST['a_0_70']){$r30=$_REQUEST['a_0_60'];}
else{$r30=$_REQUEST['a_0_70'];}}}
else{if($_REQUEST['a_0_50']>$_REQUEST['a_0_60'])
{if($_REQUEST['a_0_50']>$_REQUEST['a_0_70']){$r30=$_REQUEST['a_0_50'];}
else{$r30=$_REQUEST['a_0_70'];}}
else{if($_REQUEST['a_0_60']>$_REQUEST['a_0_70'])
{$r30=$_REQUEST['a_0_60'];}
else{$r30=$_REQUEST['a_0_70'];}}}


if($_REQUEST['a_0_71']>$_REQUEST['a_0_81']){
	$r31=$_REQUEST['a_0_71'];
	}	
if($_REQUEST['a_0_71']<$_REQUEST['a_0_81']){
	$r31=$_REQUEST['a_0_81'];
		}

if($_REQUEST['a_0_72']>$_REQUEST['a_0_82']){
	$r32=$_REQUEST['a_0_72'];
	}	
if($_REQUEST['a_0_72']<$_REQUEST['a_0_82']){
	$r32=$_REQUEST['a_0_82'];
		}

if($_REQUEST['a_0_73']>$_REQUEST['a_0_83']){
	$r33=$_REQUEST['a_0_73'];
	}	
if($_REQUEST['a_0_73']<$_REQUEST['a_0_83']){
	$r33=$_REQUEST['a_0_83'];
	}

if($_REQUEST['a_0_74']>$_REQUEST['a_0_84']){
	$r34=$_REQUEST['a_0_74'];
	}	
if($_REQUEST['a_0_74']<$_REQUEST['a_0_84']){
	$r34=$_REQUEST['a_0_84'];
	}

if($_REQUEST['a_0_75']>$_REQUEST['a_0_85']){
	$r35=$_REQUEST['a_0_75'];
	}	
if($_REQUEST['a_0_75']<$_REQUEST['a_0_85']){
	$r35=$_REQUEST['a_0_85'];
		}
	
if($_REQUEST['a_0_76']>$_REQUEST['a_0_86']){
	$r36=$_REQUEST['a_0_76'];
	}	
if($_REQUEST['a_0_76']<$_REQUEST['a_0_86']){
	$r36=$_REQUEST['a_0_86'];
	}
	
if($_REQUEST['a_0_77']>$_REQUEST['a_0_87']){
	$r37=$_REQUEST['a_0_77'];
	}	
if($_REQUEST['a_0_77']<$_REQUEST['a_0_87']){
	$r37=$_REQUEST['a_0_87'];
		}

if($_REQUEST['a_0_78']>$_REQUEST['a_0_88']){
	$r38=$_REQUEST['a_0_78'];
	}	
if($_REQUEST['a_0_78']<$_REQUEST['a_0_88']){
	$r38=$_REQUEST['a_0_88'];
		}
	
if($_REQUEST['a_0_79']>$_REQUEST['a_0_89']){
	$r39=$_REQUEST['a_0_79'];
}
if($_REQUEST['a_0_79']<$_REQUEST['a_0_89']){
	$r39=$_REQUEST['a_0_89'];
	}
	
if($_REQUEST['a_0_80']>$_REQUEST['a_0_90']){
	$r40=$_REQUEST['a_0_80'];
}	
if($_REQUEST['a_0_80']<$_REQUEST['a_0_90']){
	$r40=$_REQUEST['a_0_90'];
	}

if($sel==1){if($r1==4||$r11==4||$r21==4||$r31==4){
	//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
		//header('location:http://localhost/ey/survey-display.php');
	}}

if($sel==2){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4){
		//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}
if($sel==3){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4){
		//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}
if($sel==4){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4){
		//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==5){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4){//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==6){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4||$r6==4||$r16==4||$r26==4||$r36==4){//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==7){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4||$r6==4||$r16==4||$r26==4||$r36==4||$r7==4||$r17==4||$r27==4||$r37==4){//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==8){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4||$r6==4||$r16==4||$r26==4||$r36==4||$r7==4||$r17==4||$r27==4||$r37==4||$r8==4||$r18==4||$r28==4||$r38==4){//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==9){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4||$r6==4||$r16==4||$r26==4||$r36==4||$r7==4||$r17==4||$r27==4||$r37==4||$r8==4||$r18==4||$r28==4||$r38==4||$r9==4||$r19==4||$r29==4||$r39==4){
		//$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		
if($sel==10){
	if($r1==4||$r11==4||$r21==4||$r31==4||$r2==4||$r12==4||$r22==4||$r32==4||$r3==4||$r13==4||$r23==4||$r33==4||$r4==4||$r14==4||$r24==4||$r34==4||$r1==5||$r15==4||$r25==4||$r35==4||$r6==4||$r16==4||$r26==4||$r36==4||$r7==4||$r17==4||$r27==4||$r37==4||$r8==4||$r18==4||$r28==4||$r38==4||$r9==4||$r19==4||$r29==4||$r39==4||$r10==4||$r20==4||$r30==4||$r40==4){
	//	$_SESSION['sno']=$row[0];
		$_SESSION['sel']=$sel;
		$sql2="insert into ctr values ('$radio','$sel') ";
		$con->query($sql2);
	}}		


	$k=0;
	
/*	for($i=0;$i<$flag;$i++){
		for($j=1;$j<=90;$j++){
		$k++;
		echo $a=$_REQUEST['a_'.$i.'_'.$j];
		echo ("-");
		if($k==10){
			$k=0;
			echo ("<br>");	

}}  */
echo "<strong><font color='#15B422'>Sucess,  Values saved!!!</font></strong>";
header('location:http://localhost/ey/test-post.php');
}
//}



?>
<html>
<head>
<title>Survey</title>
<meta charset="utf-8">
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
    <li class="active"><a href="http://localhost/ey/test-pre.php">Survey</a></li>
   <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul>
<form method=GET action="#">
<strong> BIA SURVEY</strong>
<br>
<table border=1>
Enter criticality limit:<select name="s">
<option value="1"> Upto 4 Hrs </option>
<option value="2"> Upto 8 Hrs </option> 
<option value="3"> Upto 12 Hrs </option> 
<option value="4"> Upto 24 Hrs </option> 
<option value="5"> Upto 48 Hrs </option> 
<option value="6"> Upto 72 Hrs </option> 
<option value="7"> Upto 1 Week </option> 
<option value="8"> Upto 2 Week </option> 
<option value="9"> Upto 3 Week </option>
<option value="10"> More than 3 Week </option> 
</select>
<tr>
<td><h3>S.No</h3></td> <td><h3>Process</h3></td> <td><h3> Type</h3></td> <td><h3>Impact </h3></td> <td><h3>Upto 4 Hrs</h3></td> <td><h3> Upto 8 Hrs</h3></td> <td><h3> Upto 12 Hrs</h3></td><td><h3> Upto 24 Hrs</h3></td><td><h3> Upto 48 Hrs</h3></td><td><h3> Upto 72 Hrs</h3></td><td><h3> Upto 1 Week</h3></td><td><h3> Upto 2 Weeks</h3></td><td><h3> Upto 3 Weeks</h3></td><td><h3> More than 3 Weeks</h3></td>
</tr>

<?php
$con=mysqli_connect("localhost","root","","ey");
$s=("select Serial_Number, Process from client_data where Process='$radio'");
$r=$con->query($s);
$array=array();
$i=0;

while($row=mysqli_fetch_array($r,MYSQLI_NUM)){

echo ("<tr><td rowspan=14> $row[0]</td><td rowspan=14> $row[1]</td><td rowspan=3>Financial Impact</td><td>Lost Income / Revenue</td>");
for($j=1;$j<=10;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Cost / Expense Incurred</td>");

for($j=11;$j<=20;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Result</td></tr>");

echo("<tr><td rowspan=2>Operational Impact</td><td>Loss of output</td>");
 for($j=21;$j<=30;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Result</td></tr>");
echo("<tr><td rowspan=5>Regulation Impact</td><td>Legal / Regulations</td>");
for($j=31;$j<=40;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Key Business Partners</td>");
for($j=41;$j<=50;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Shareholders</td>");
for($j=51;$j<=60;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Communities</td>");
for($j=61;$j<=70;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Result</td></tr>");
echo("<tr><td rowspan=3>HSE Impact</td><td>Health & Safety</td>");
for($j=71;$j<=80;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Environment</td>");
for($j=81;$j<=90;$j++){
	echo ('<td><input type=text name="a_'.$i.'_'.$j.'"></td>');
	}
	 echo ("</tr>");
echo("<tr><td>Result</td></tr>");
echo("<tr><td colspan=2>Overall Impact</td></tr>");
$i++;
}

?>
</table>
<input type="hidden" name="hide" value="$flag">
<input type="submit" name="n" value="submit">
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

</div>
</body>
</html>