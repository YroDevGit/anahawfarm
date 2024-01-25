<?php
include '../../db/connections.php';

if(isset($_POST['btn'])){
	$array = array('T','Y','R','O','N','E','0','1','2','3','4','5','6','7','8','9','A','Z','L','0','3','1','4','2','0','9','5','2','5','8','7','6','T','M','R','A');
	shuffle($array);

	

	$uid = strip($_POST['uid']);
	$code = $array[0].$array[1].$array[2].$array[3].$array[4].$array[5].$array[6].$array[7].'-'.$uid;
	$farmname = strip($_POST['farm']);
	//$photo = strip($_POST['fimg']);
	$hectare = strip($_POST['hectare']);
	$fields = strip($_POST['fields']);
	$desc = strip($_POST['desc']);
	$gcode = getCode();
	$numcode = numCodeTR();
$query = "insert into farm values('$numcode','$uid','$farmname','?','$hectare','$fields','0','$desc','$code','$gcode')";
-
	$sql = setQuery($query);

	if($sql){
		?>

		<div align="center">
	  	<div style="margin-top: 100px;">
	  		<div>
	  			<span style="font-size: 35px; color: green;">&#10004;</span>
	  		</div>
	  		<div>
	  			<span style="font-size: 20px;">Farm added successfuly</span>
	  		</div>
	  		<div style="margin-top: 10px;">
	  			<span style="color: gray;">Your farm code is <?php echo $code; ?></span>
	  		</div>
	  		<div style="margin-top: 15px;">
	  			<a href="../farms.php"><button class="mybtn">Okay, I got it</button></a>
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