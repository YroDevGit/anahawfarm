<?php


function getDateName($var){

$func_sql = "select DATE_FORMAT('$var','%M %d %Y')";

$ret = "";

$res = setQuery($func_sql);
if($func = getData($res)){
	$ret = $func[0];
}
return $ret;

}


function today(){
	$func_sql = "select DATE_FORMAT(now(),'%Y-%m-%d')";

$ret = "";

$res = setQuery($func_sql);
if($func = getData($res)){
	$ret = $func[0];
}
return $ret;
}


function getFarmInfo($id,$col){

$func_sql = "select * from farm where farm_id = '$id'";

$ret = "";

$res = setQuery($func_sql);
if($func = getData($res)){
	$ret = $func[$col];
}
return $ret;

}



function isActive($farm_id){
	$ret = false;

	$sql = "select * from crop where farm_id = '$farm_id' and status =0 and stat=0";
	if(setQuery($sql)){
		$ret = true;
	}
	return $ret;

}


function getDayInterval($date){
	$day = 0;
	$sql = "select timestampdiff(day,now(),'$date')'diff'";
	$res = setQuery($sql);
	if($colg = getData($res)){
		$day = $colg[0];
	}
	return $day;
}



function getHourInterval($date){
	$hour = 0;
	$sql = "select timestampdiff(hour,now(),'$date')'diff'";
	$res = setQuery($sql);
	if($colg = getData($res)){
		$hour = $colg[0];
	}
	return $hour;
}

function getRange($m1, $m2){
	$func_sql = "select timestampdiff(month,'$m1','$m2')";

$ret = "";

$res = setQuery($func_sql);
if($func = getData($res)){
	$ret = $func[0];
}
return $ret;
}


 ?>