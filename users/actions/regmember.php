<?php
include '../../db/connections.php';

if(isset($_POST['btn'])){


$first = $_POST['fname'];
$last = $_POST['lname'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$idnum = $_POST['idnum'];
$about = $_POST['about'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];

$title = $last;

$target_dir = "../../files/";
$myPhoto = $_FILES["idimg"]["name"];
$extention = pathinfo($_FILES["idimg"]["name"], PATHINFO_EXTENSION);

$changeName = str_replace(" ", "_", $myPhoto);
$changeName = str_replace(".".$extention, "_", $changeName);

$changeTitle = str_replace(" ", "_", $title);

$changeName = str_replace($changeName, $changeTitle, $changeName);

$target_file = $target_dir . basename($myPhoto);
$newfilename= $changeName.date('dmYHis').".".$extention;
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$size = filesize($_FILES['idimg']['tmp_name']);
$doc_size = number_format(floatval($size)/1000000,2);

$sql = "insert into users values(null, '$first', '$last', '$contact', '$address', '$about' , '$uname','$pword', '$idnum','$newfilename','2','0','0')";


if(setQuery($sql)){
	$check = getimagesize($_FILES["idimg"]["tmp_name"]);
	  move_uploaded_file($_FILES["idimg"]["tmp_name"], $target_dir.$newfilename);

	  ?>

	  <div align="center">
	  	<div style="margin-top: 100px;">
	  		<div>
	  			<span style="font-size: 35px; color: green;">&#10004;</span>
	  		</div>
	  		<div>
	  			<span style="font-size: 20px;">Registration successful</span>
	  		</div>
	  		<div style="margin-top: 10px;">
	  			<span style="color: gray;">You can log in now, but currently you can't make any actions on your account, unless your account is verified</span>
	  		</div>
	  		<div style="margin-top: 15px;">
	  			<a href="../../farmhouse1126634412YROLEEEMZ/index.php"><button class="mybtn">Okay, I got it</button></a>
	  		</div>
	  	</div>
	  </div>

	  <?php
}

}


 ?>

 <style type="text/css">
 	.mybtn{
 		cursor: pointer; border-radius: 5px; background-color:  #38d39f; border:solid 1px #38d39f; width: 120px; height: 30px;
 	}
 	.mybtn:hover{
 		background-color: orange;
 	}
 </style>
