<?php
if(isset($_REQUEST['send'])){
	$a=$_REQUEST['t1'];
	$b=$_REQUEST['t2'];
	$c=$_REQUEST['t3'];
	$d=$_REQUEST['t4'];
	$e=$_REQUEST['t5'];
	$list=array($a,$b,$c,$d,$e);
	$fp = fopen('file.csv', 'a');
    if($fp==TRUE){
		fputcsv($fp, $list);
	fclose($fp);
	echo "Entries submitted succesfully";
	}
	if($fp==FALSE){
		echo "Error, Entries not submitted";
		}
	
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
Name: <input type="text" name="t1">
Email:<input type="text" name="t2">
Phone:<input type="text" name="t3">
Branch:<select name="t4">
<option> CSE </option>
<option> IT </option>
<option> CSE </option>
<option> EEE </option>
</select>
Year:<select name="t5">
<option> 1st </option>
<option> 2nd </option>
<option> 3rd </option>
<option> 4th </option>
</select>

<input type="submit" name="send" value="SAVE">
</form>
</body>
</html>