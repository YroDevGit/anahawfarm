<?php
include "../../db/connections.php";
$type = $_GET['type'];
if($type=="ver"){
	$act = $_GET['act'];
	$sql = "update users set actions = 1 where user_id = $act";
	if(setQuery($sql)){
		header("refresh:0;url=../users.php");
	}


}



 ?>