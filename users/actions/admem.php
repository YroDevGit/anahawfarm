<?php
$action = $_GET['action'];
include '../../db/connections.php';
include 'message.php';

if(isset($_POST['bt'])){
	session_start();
	$fn = getValue('fn');
	$ln = getValue('ln');
	$cn = getValue('cn');
	$ad = getValue('ad');
	$ty = getValue('cb');

	$code = numCodeTR();
	$user = $_SESSION['userid'];

	$result = setQuery("insert into members values('$code','$fn','$ln','$cn','$ad','$ty','$user','0','0')");
	if($result){
		header("refresh:3;url=../members.php");
showSuccess("Member added successfully");
		?>	

		

		<?php
	}
}


if(isset($_POST['br'])){
	session_start();
	$user = $_SESSION['userid'];
	$name = strip($_POST['name']);
	$address = strip($_POST['address']);
	$contact = strip($_POST['contact']);
	$farmadd = strip($_POST['farmaddress']);
	$area = strip($_POST['farmarea']);
	$seed = strip($_POST['seed']);
	$planted = strip($_POST['plant']);
	$program = strip($_POST['program']);
	$c1 = $_POST['c1'];
	$c2 = $_POST['c2'];
	$c3 = $_POST['c3'];
	$c4 = $_POST['c4'];
	$c5 = $_POST['c5'];
	$c6 = $_POST['c6'];


	$north = $_POST['north'];
	$south = $_POST['south'];
	$east = $_POST['east'];
	$west = $_POST['west'];


	if(setQuery("insert into damage values (null,'$name','$address','$contact','$farmadd','$area','$seed','$planted','$program','$c1','$c2','$c3','$c4','$c5','$c6','$north','$south','$east','$west',$user,0)")){
		header("refresh:2;url=../damage.php");
		showSuccess("File damage successfully sent");

		?>




		<?php

	}

}

if(isset($_POST['cc'])){
	$plant = $_POST['plant'];
	$harvest = $_POST['harvest'];
	$prod = $_POST['prod'];
	$sack = $_POST['sack'];
	$cropp = $_POST['cropp'];
	session_start();
	$farmname = $_SESSION['idme'];
	$user = $_SESSION['userid'];
	$quer = "insert into cropp values(null,$user,'$cropp','$plant','$harvest','$prod','$sack',0,'$farmname')";

	if(setQuery($quer)){
		showSuccess("Crop record successfully added.");
		header("refresh:2;url=../croprecord.php");
	}
}

if(isset($_POST['fbtn'])){
	session_start();
	$user = $_SESSION['userid'];
	$f0 = $_POST['f0'];
	$f1 = $_POST['f1'];
	$f2 = $_POST['f2'];
	$f3 = $_POST['f3'];
	$f4 = $_POST['f4'];
	$f5 = $_POST['f5'];
	$f6 = $_POST['f6'];
	$f7 = $_POST['f7'];
	$f8 = $_POST['f8'];
	$f9 = $_POST['f9'];
	$f10 = $_POST['f10'];
	$query = "insert into finance values(null,$user,$f0,'$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$f9','$f10',0)";

	if(setQuery($query)){
		showSuccess("Finance record added");
		header("refresh:2;url=../financial.php");
	
	}
}

if(isset($_POST['rr'])){
	session_start();
	$user = $_SESSION['userid'];
	$crop = $_POST['r1'];
	$r2 = $_POST['r2'];

	$r3 = $_POST['r3'];
	$r33 = $_POST['r33'];

	$r3r = "";
	if($r3 == "o"){
		$r3r = $r33;
	}
	else{
		$r3r = $r3;
	}

	$r4 = $_POST['r4'];
	$r44 = $_POST['r44'];
	$r4r = "";
	if($r4 == "o"){
		$r4r = $r44;
	}
	else{
		$r4r = $r4;
	}
	$query = "insert into resource values(null,$user,$crop,$r2,'$r3r','$r4r',0)";
	if(setQuery($query)){
		showSuccess("Resrouce record added");
		header("refresh:2;url=../resource.php");
	}
}
if(isset($_POST['mm'])){
	session_start();
	$user = $_SESSION['userid'];
	$m1 = $_POST['m1'];
	$m2 = $_POST['m2'];
	$m3 = $_POST['m3'];
	$m4 = $_POST['m4'];
	$m5 = $_POST['m5'];
	$farmid = $_SESSION['idme'];

	$m6m = "";

	$m6 = $_POST['m6'];
	$m66 = $_POST['m66'];

	if($m6=="o"){
		$m6m = $m66;
	}
	else{
		$m6m = $m6;
	}

	$query = "insert into method values(null,$user,'$m1','$m2','$m3','$m4','$m5','$m6m',0,'$farmid')";
	if(setQuery($query)){
		showSuccess("Farming method record added");
		header("refresh:2;url=../method.php");
	}
}

if(isset($_POST['ii'])){
	$crop = $_POST['i1'];
	session_start();
	$user = $_SESSION['userid'];
	$i2 = $_POST['i2'];
	$i3 = $_POST['i3'];
	$i4 = $_POST['i4'];
	$i5 = $_POST['i5'];
	$i6 = $_POST['i6'];

	$query = "insert into inventory values(null,$user, $crop,$i2,$i3,$i4,$i5,$i6,0)";
	if(setQuery($query)){
		showSuccess("Added to iventory.");
		header("refresh:2;url=../inventory.php");
	}
}

if(isset($_POST['mmb'])){
	$code = numCodeTR();
	$name = strip($_POST['name']);
	$num = strip($_POST['num']);
	$area = strip($_POST['area']);
	$fields = strip($_POST['fields']);
	$loc = strip($_POST['loc']);
	session_start();
	$user = $_SESSION['userid'];
	$quer = "insert into farmtbl values('$code','$num','$name','$area','$fields','$loc',0,0,'$user','0')";
	if(setQuery($quer)){
		showSuccess("Farm added.");
		header("refresh:2;url=../afarm.php");
	}
}

if(isset($_POST['act'])){
	$pp = $_GET['pp'];
	$code = $_GET['code'];
	$quer = "";
	if($pp=="0"){
		$quer = "update farmtbl set farm_active = 1 where farmid = '$code'";
	}
	else{
		$quer = "update farmtbl set farm_active = 0 where farmid = '$code'";
	}
	if(setQuery($quer)){
		header("refresh:0;url=../afarm.php");
	}
}

if(isset($_POST['myself'])){
	session_start();
	$_SESSION['userole']=3;
	$myid = $_GET['myid'];
	$sql = "update users set user_type = 3 where user_id = $myid";
	setQuery("delete from users where varcode = $myid");
	if(setQuery($sql)){

		showSuccess("User role updated.");
		header("refresh:2;url=../pors.php");
	}
}

if(isset($_POST['mgrnew'])){
	session_start();
	$_SESSION['userole']=2;
	$first = strip($_POST['first']);
	$last = strip($_POST['last']);
	$contact = strip($_POST['contact']);
	$address = strip($_POST['address']);
	$user = strip($_POST['user']);
	$pass = strip($_POST['pass']);
	$userown = $_SESSION['userid'];
	$sql = "insert into users values(null,'$first','$last','$contact','$address','Porsyentador','$user','$pass','none','none',4,1,0,$userown)";
	setQuery("update users set user_type = 2 where user_id = $userown");
	if(setQuery($sql)){
		showSuccess("User role updated.");
		header("refresh:2;url=../pors.php");
	}
}

if(isset($_POST['expbtn'])){
	session_start();
	$expenses = strip($_POST['expenses']);
	$amount = $_POST['amount'];
	$date = $_POST['datetime'];
	$crops = $_POST['crops'];
	$fname = $_POST['farmname'];
	$farm = strip($_POST['farm']);
	$sql = "insert into expenses values(null,'$farm','$expenses','$amount','$date',0,'$crops')";
	if(setQuery($sql)){
		showSuccess("Expenses added");
		header("refresh:2;url=../expenses.php?f_id=".$farm."&farmname=".$fname);
	}
}

if(isset($_POST['schedbtn'])){
	session_start();
	$activity = strip($_POST['activity']);
	$schedule = $_POST['schedule'];
	$farm = strip($_POST['farm']);
	$userown = $_SESSION['userid'];
	$crop = $_POST['crop'];
	$cost = $_POST['cost'];
	$farmname = $_POST['farmname'];
	$sql = "insert into schedule values(null,'$userown','$farm','$activity','$schedule',0,$crop,'$cost')";
	if(setQuery($sql)){
		showSuccess("Schedule added");
		header("refresh:2;url=../scheduling.php?f_id=".$farm."&farmname=".$farmname);
	}

	}

	if(isset($_POST['sales'])){
		session_start();
		$crop = $_POST['crop'];
		$sack = $_POST['sack'];
		$price = $_POST['price'];
		$weight = $_POST['weight'];
		$total = $_POST['total'];
		$customer = $_POST['customer'];
		$userown = $_SESSION['userid'];
		$variety = $_POST['variety'];
		$sql = "insert into sales values(null,'$sack','$price','$weight','$total',now(),'$crop','$userown','$variety')";
		if(setQuery($sql)){
			showSuccess("Sales added");
		header("refresh:2;url=../sales.php");
		}
	}
	if(isset($_POST['supinv'])){
		session_start();
		$userown = $_SESSION['userid'];
		$location =strip($_POST['location']);
		$branch = strip($_POST['branch']);
		$production = strip($_POST['production']);
		$sold = $_POST['sold'];
		$status = $_POST['status'];
		$sql = "insert into supinv values(null,'$userown','$location','$branch','$production','$sold','$status',0)";
		if(setQuery($sql)){
			showSuccess("Supply inventory added");
		header("refresh:2;url=../supinv.php");
		}

	}

	if(isset($_POST['varbtn'])){

		$rice = $_POST['rice'];
		$sql = "insert into rice values(null,'$rice','0',now())";
		if(setQuery($sql)){
			showSuccess("Added new variety");
			header("refresh:2;url=../../admin/rice.php");

		}
	}

	if(isset($_POST['sms'])){

		$message = $_POST['message'];
		$sql = "insert into sms values(null,'$message','0',now())";
		if(setQuery($sql)){
			showSuccess("Added new Announcement");
			header("refresh:2;url=../../admin/sms/src/sms/send-sms-basic.php?message=$message");

		}
	}
 ?>
