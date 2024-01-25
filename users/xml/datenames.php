<?php
include '../../db/connections.php';


$get = $_GET['q1'];
$get2 = $_GET['q2'];
$type = $_GET['type'];


function getDay266125($date){
	$sql = "select DATE_FORMAT('$date','%d')";
	$fres = setQuery($sql);
	$ret = "";
	if($fcol = getData($fres)){
		$ret = $fcol[0];
	}
	return $ret;
}


if($type==1){
$sql = "select DATE_FORMAT('$get','%M %d %Y')";
$res = setQuery($sql);
if($colx = getData($res)){
	echo  $colx[0];
}
}

if($type==3){
$sql = "select DATE_FORMAT('$get','%M %d %Y')";
$res = setQuery($sql);
if($colx = getData($res)){
	echo  $colx[0];
}
}

if($type==2){
$sql = "SELECT TIMESTAMPDIFF(MONTH, '$get', '$get2') 'diff'";
$rz = setQuery($sql);
if($coly = getData($rz)){
	echo $coly[0]." months ";
}
}


if($type==4){
$sql = "SELECT TIMESTAMPDIFF(hour, now(), '$get') 'diff', DATE_FORMAT('$get','%M %d %Y')'datename'";
$rz = setQuery($sql);
if($coly = getData($rz)){
	$data = $coly[0];
	$datename = $coly[1];
	if($data<0&&$data>-23){
		echo "Today";
	}
	else{
		echo $datename;
	}
}
}




 ?>