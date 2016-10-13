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
		$hd=$_REQUEST['head'];
		$count=count($hd);
		$co1=1;
		$str1="";
		foreach($hd as $h){
						$str1 .=$h;
			if($co1<$count)
			$str1 .= ",";
			$co1++;
		}
		
		$con=new mysqli("localhost","root","","ey") or die("Can not connect to database");
		$sql1="drop table client_data";
		$con->query($sql1);
		
		$sql2="create table client_data(id int , Serial_Number int, Mega_Process varchar(20), Process varchar(20)) ";
		$con->query($sql2);
		foreach($hd as $h){
			$sql3=" alter table client_data add $h varchar(20)";
			$con->query($sql3);
		}

		for($i=0;$i<$r;$i++){
			$str2="'$id',";
			for($j=0;$j<$c;$j++){
				$str2 .="'".$_REQUEST['n_'.$i.'__'.$j.'_']."'";
				if($j!=($c-1)){
					$str2 .=",";
				}
			}	
			
			$query="insert into client_data values($str2)";
			$con->query($query);
		}
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Process Map_2</title>
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
    <li class="active"><a href="http://localhost/ey/3.php">Process Map</a></li>
    <li ><a href="http://localhost/ey/4.php">BIA Classification</a></li>
    <li><a href="http://localhost/ey/test-pre.php">Survey</a></li>
    <li><a href="http://localhost/ey/mao.php">Final MAO</a></li>
    <li><a href="http://localhost/ey/ThankYou.php">Thank You</a></li>
  </ul><br>
<form action="#" id="foo">
	<table border="1">
    	<tr id="heading">
        	<th>S.no</th>
            <th>Mega Process</th>
            <th>Process</th>
        </tr>
    	<tr id="r0">
        	<td><input type="text" name="n_0__0_"></td>
            <td><input type="text" name="n_0__1_"></td>
            <td><input type="text" name="n_0__2_"></td>
        </tr>
    </table>
    
    <input type="hidden" id="row" name="row" value="1">
    <input type="hidden" id="col" name="col" value="3">
    <i>New Column Name(without space) : </i>
    <input type="text" value="Enter_here" name="newCol" id="newCol">
<input type="button" id="addCol" value="Add Column">
    <input type="button" id="addRow" value="Add Row">
    <br><br>
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