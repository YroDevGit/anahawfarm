<?php

$action = $_GET['action'];
include '../../db/connections.php';
include 'message.php';



if(isset($_POST['cropbtn'])){
	$plant = $_POST['plant'];
	$harvest = $_POST['harvest'];
	$prod = $_POST['prod'];
	$sack = $_POST['sack'];
	$cropp = $_POST['cropp'];
	$farmname = $_POST['crfarm'];
	$cropid = $_POST['cropid'];
	session_start();
	$user = $_SESSION['userid'];
	$quer = "update cropp set cropping = '$cropp', plant = '$plant', harvest = '$harvest', production = '$prod', sack= '$sack',farm = '$farmname' where cropid = '$cropid'";
	if(setQuery($quer)){
		showSuccess("Crop record successfully updated.");
		header("refresh:2;url=../croprecord.php");
	}
}



 ?>