
<?php
include '../db/connections.php';
session_start();
if(isset($_POST['logbtn'])){
	$uname = strip($_POST['uname']);
	$pword = strip($_POST['pword']);

	$res = setQuery("select * from users where username = '$uname' and password = '$pword'");


	if($row = getData($res)){
		include 'code.php';
		$type = $row[7];
		$usertype = $row[10];
		$actions = $row[11];
		$varcode = $row[13];
		$_SESSION['userid'] = $row[0];
		$_SESSION['userole'] = $row[10];
		$_SESSION['USERFULLNAME'] = $row[1]." ".$row[2];
		if($usertype==1){
			header("refresh:0;url=../admin/index.php");
		}
		else if($usertype==4){
			header("refresh:0;url=../users/dashboard.php");
			$_SESSION['userid'] = $varcode;
		}
		else{
			if($actions==0){
				header("refresh:0;url=../users/notv.php");
			}
			else if($actions==1){
				header("refresh:0;url=../users/dashboard.php");
			}
		}
		
	}
	else{
		header("refresh:0;url=../loginform12553442/failed.php");
	}



}

 ?>