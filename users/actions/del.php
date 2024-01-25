<?php
include '../../db/connections.php';
include 'message.php';
$data = $_GET['data'];
$link = "../".$_GET['link'];
$q = $_GET['q'];

if($q==1){
	if(deleteMethod($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==100){
	
	if(deleteFarm($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==2){
	if(deleteCrop($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==3){
	if(deleteFinace($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==4){
	if(deleteResource($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==5){
	if(deleteInventory($data)){
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link");
	}
}
if($q==6){
	if(deleteSchedule($data)){
		$f_id = $_GET['fid'];
		$farmname = $_GET['fname'];
			showSuccess("Data deleted succesfully");
			header("refresh:1;url=$link?f_id=$f_id&farmname=$farmname");
	}
}
if($q==7){
	if(deleteRice($data)){
		showSuccess("Data deleted succesfully");
		header("refresh:2;url=../../admin/rice.php");
	}
}
if($q==8){
	if(deleteAnnouncement($data)){
		showSuccess("Data deleted succesfully");
		header("refresh:2;url=../../admin/announcement.php");
	}
}




 ?>