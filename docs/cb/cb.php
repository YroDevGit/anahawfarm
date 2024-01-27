<?php
$database = "farm";
$username = "root";
$password = "";
$host = "localhost";

$headshot = "refresh:0;url=http://localhost/farmers.com/error.php";

$con = mysqli_connect($host,$username,$password,$database);
$GLOBALS['dbconnect'] = $con;
function setQuery($sql){
	return mysqli_query($GLOBALS['dbconnect'],$sql);
}

function getData($result){
	return mysqli_fetch_array($result);
}

function strip($str){
	return mysqli_real_escape_string($GLOBALS['dbconnect'], $str);
}

function getValue($inputname){
	return mysqli_real_escape_string($GLOBALS['dbconnect'], $_POST[$inputname]);
}

function get($var){
	return strip($_POST[$var]);
}

function numCodeTR(){
	$arx1 = array('C','H','M','S','U','N'); shuffle($arx1);
	$arx2 = array('I','A','S','A','M'); shuffle($arx2);
	$arx3 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx3);
	$arx4 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx4);
	$arx5 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx5);
	$abcde = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','e','n','o','r','y','e','1','2','3','4','5','6','7','8','9');
	shuffle($abcde);


	$af1 = $arx1[0].$arx1[1].$arx1[2];
	$af2 = $arx2[0].$arx2[1].$arx2[2];
	
	$letters = $abcde[0].$abcde[1].$abcde[2];
	$petsa = date('mdyhms');
	$alp = alpha();
	$ccc = $alp[8].$alp[1].$alp[1];
	return $letters.$petsa.$ccc."714".$af1.'9'.$af2;

}


function alpha(){
	return array("R",'B',"O","C","D","T","E","F","Y","R","G","H","I","O","E","Z");
}

function pin5(){
	$alp = alpha();
	shuffle($alp);
	return $alp[0].$alp[1].$alp[2].$alp[3].$alp[4];
}


function hasData($sql){
	$resz = setQuery($sql);
	$retz = 0;
	if($colxcds = getData($resz)){
		$retz =1;
	}
	return $retz;
}


function hasNotif($id){
	$ret = 0;

	
	
	return $ret;
}


function numCodeTRX($idtyrone){
	$arx1 = array(1,2,3,4,5,6,7,8,9); shuffle($arx1);
	$arx2 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx2);
	$arx3 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx3);
	$arx4 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx4);
	$arx5 = array(0,1,2,3,4,5,6,7,8,9); shuffle($arx5);
	$abcde = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','y','r','o','n','e','u','v','w','x','y','z');
	shuffle($abcde);


	$af1 = $arx1[0].$arx1[1].$arx1[2];
	$af2 = $arx2[0].$arx2[1].$arx2[2];
	$af3 = $arx3[0].$arx3[1].$arx3[2];
	$af4 = $arx4[0].$arx4[1].$arx4[2];
	$af5 = $arx5[0].$arx5[1].$arx5[2];
	$letters = $abcde[0].$abcde[1].$abcde[2].$abcde[3].$abcde[4].$abcde[5];
	return 'tFa'.$idtyrone.$letters.$af1.$af2.$af3.$af4.$af5;

}




function hasResult($sql){
	$quer = setQuery($sql);
	$ret =false;
	if($crcrow = getData($quer)){
		$ret = true;
	}
	return $ret;
}


function getFullname($id){
	$fsql = "select * from users where user_id = $id";
	$fres = setQuery($fsql);
	$fresult = "";
	if($frow = getData($fres)){
		$fresult = $frow[1].' '.$frow[2];
	}
	return $fresult;

}


function compareID($sql){
	$query = $sql;
	$ret = false;
	if(getData(setQuery($query))){
		$ret = true;
	}
	return $ret;
}

function md($str){
	$msql = "SELECT MD5($str)";
	$res = setQuery($msql);
	$ret = "";
	if($gd = getData($res)){
		$ret = $gd[0];
	}
	return $ret;
}


function getCode(){
	$tyr = array('N','I','I','Z','X','P'); shuffle($tyr);
	$raz = array('I','A','S','A','M'); shuffle($raz);
	$xnumbs = array(1,2,3,4,5,6,7,8,9,0); shuffle($xnumbs);
	$specc = array(1,4,0,3,2,0,2,0); shuffle($specc);
	$ncdf= array('x','w','m','p','k','q','b','j','f','u','c','h','d'); shuffle($ncdf);

	return $tyr[0].$tyr[1].$tyr[2].$tyr[3]."<3".$raz[0].$raz[1].$raz[2].$raz[3].$xnumbs[0].$xnumbs[1].$xnumbs[2].$xnumbs[3].$xnumbs[4].$xnumbs[5].$xnumbs[6].$xnumbs[7].$specc[0].$specc[1].$specc[2].$specc[3].$ncdf[0].$ncdf[1].$ncdf[2].$ncdf[3].$ncdf[4].$ncdf[5].$ncdf[6].$ncdf[7];

}


function getdatenamex($date,$format){
	$sql = "select DATE_FORMAT('$date','$format')";
	$ret = "";
	$res = setQuery($sql);
	if($cox = getData($res)){
		$ret = $cox[0];
	}
	return $ret;
}

function mysqldatenow($format){
	$sql = "select DATE_FORMAT(now(),'$format')";
	
	$ret = "";
	$res = setQuery($sql);
	if($cox = getData($res)){
		$ret = $cox[0];
	}
	return $ret;
}
function todaysDate(){
	$sql = "select now()";
	
	$ret = "";
	$res = setQuery($sql);
	if($cox = getData($res)){
		$ret = $cox[0];
	}
	return $ret;
}


function crops($user,$classname, $xname){
	?>
	<select id="cropcb" required="" name="<?php echo $xname ?>" class="<?php echo $classname ?>" >
		<?php
		$sql = "SELECT c.cropid, f.farm_number, c.cropping, DATE_FORMAT(c.plant,'%Y') FROM cropp c, farmtbl f WHERE c.farm = f.farmid AND c.stat =0 AND c.uzer = $user ORDER by f.farmname, c.plant desc";
		$res = setQuery($sql);

		while($col = getData($res)){
			$id = $col[0];
			$name = $col[1]." : ".$col[2]."[".$col[3]."]";
		 ?>
		<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

		<?php

}
		 ?>
	</select>
	<?php
}





function farms($user,$classname, $xname){
	?>
	<select id="farmcb" required="" name="<?php echo $xname ?>" class="<?php echo $classname ?>" >
		<?php
		$sql = "select * from farmtbl where user = $user and stat = 0";
		$res = setQuery($sql);

		while($col = getData($res)){
			$id = $col[0];
			$name = $col[1];
		 ?>
		<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

		<?php

}
		 ?>
	</select>
	<?php
}

function getRiceName($id){
	$sql = "select * from rice where id = $id";
	$res = setQuery($sql);
	$ret = "";
	if($col = getData($res)){
		$ret = $col[1];
	}
	return $ret;
}

function rice($user,$classname, $xname){
	?>
	<select id="farmcb" required="" name="<?php echo $xname ?>" class="<?php echo $classname ?>" >
		<?php
		$sql = "select * from rice where stat = 0 order by variety asc";
		$res = setQuery($sql);

		while($col = getData($res)){
			$id = $col[0];
			$name = $col[1];
		 ?>
		<option value="<?php echo $id; ?>"><?php echo $name; ?></option>

		<?php

}
		 ?>
	</select>
	<?php
}

function getCropName($id){
	$ret = "";
	$res = setQuery("select * from cropp where cropid  = $id and stat = 0");
	if($col = getData($res)){
		$ret = $col[2];
	}
	else{
		$ret = "<span style='color:red;'>Crop deleted🗑️</span>";
	}
	return $ret;
}

function getUserName($id){
	//this need to be modified
	$ret = "";
	$res = setQuery("select * from cropp where cropid  = $id");
	if($col = getData($res)){
		$ret = $col[2];
	}
	return $ret;
}

function deleteMethod($id){
	$query = "update method set stat = 1 where id = $id";
	return setQuery($query);
}
function deleteFarm($id){
	$query = "update farmtbl set stat = 1 where farmid = '$id'";
	//echo $query;
	return setQuery($query);
}
function deleteCrop($id){
	$query = "update cropp set stat = 1 where cropid = $id";
	return setQuery($query);
}
function deleteDamage($id){
	$query = "update damage set stat = 1 where iid = $id";
	return setQuery($query);
}
function deleteResource($id){
	$query = "update resource set stat = 1 where id = $id";
	return setQuery($query);
}
function deleteFinace($id){
	$query = "update finance set stat = 1 where fid = $id";
	return setQuery($query);
}
function deleteInventory($id){
	$query = "update inventory set stat = 1 where iid = $id";
	return setQuery($query);
}
function deleteSchedule($id){
	$query = "update schedule set stat = 1 where sched_id = $id";
	return setQuery($query);
}
function deleteRice($id){
	$query = "update rice set stat = 1 where id = $id";
	return setQuery($query);
}

function deleteAnnouncement($id){
	$query = "update sms set stat = 1 where id = $id";
	return setQuery($query);
}
function getYearToday(){
	$quer = "select DATE_FORMAT(now(),'%Y')";
	$res = setQuery($quer);
	$ret = "";
	if($col = getData($res)){
		$ret = $col[0];
	}
	return $ret;
}

function getAge($birthday){
	$tday = getYearToday();
	$quer = "SELECT TIMESTAMPDIFF(YEAR, '$birthday',now())";
	$res = setQuery($quer);
	$ret = "";
	if($col = getData($res)){
		$ret = $col[0];
	}
	return $ret;
}

function getHarvest($user,$crop){
	$sql = "select * from cropp where uzer = $user and cropid = $crop and stat = 0";
	$res = setQuery($sql);
	$ret = "";
	if($col = getData($res)){
		$ret = $col[5];
	}
	return $ret;

}

function checkIfNull($value){
	$ret = "";
	if($value=="0"){

	}
}

function getDropdown($column, $class, $name, $id){
	?>
	<select id="<?php echo $id; ?>" name="<?php echo $name; ?>" class="<?php echo $class; ?>" required="">
	<?php
	$sql = "select * from dropdowns";
	$res = setQuery($sql);
	while($col = getData($res)){
		$val = $col[$column];
		if($val=="0"){

		}
		else{
	?>
	
        <option value="<?php echo $val; ?>"><?php echo $val; ?></option>
        
    
	<?php
}
}

?>
</select>
<?php
}

function getFarmName($farmid){
	$sql = "select * from farmtbl where farmid = '$farmid'";
	$ret = "";
	$res = setQuery($sql);
	if($col = getData($res)){
		$ret = $col[1];
	}
	else{
		$ret = "<span style='color:red;'>[Farm deleted]</span>";
	}
	return $ret;
}

function getCropAndFarm($cropping){
	$sql = "SELECT c.cropid,c.farm, c.cropping, f.farm_number, f.farm_number, DATE_FORMAT(c.harvest,'%Y')'data' FROM cropp c, farmtbl f WHERE c.farm =  f.farmid AND c.cropid = $cropping";
	$ret = "";
	$res = setQuery($sql);
	if($col = getData($res)){
		$ret = $col[3]." : ".$col[2]."[".$col[5]."]";
	}
	return $ret;
}

function restore($table,$column, $user){
	$sql = "update $table set stat = 0 where $column = $user";
	setQuery($sql);
}



 ?>