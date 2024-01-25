<?php
$arx = array('T','Y','R','O','N','E','0','5','1','4','9','7','3','m','a','l','o','c','o','n','1','9','9');
		$ary = array('M','A','S','A','I','0','3','1','4','2','0','2','0');
		$numy = array('0','1','2','3','4','5','6','7','8','9');
		shuffle($arx);
		shuffle($ary);
		$_SESSION['xcode'] = $arx[0].$arx[1].$arx[2].$arx[3].$arx[4].$arx[5].$arx[6].'<3'.$ary[0].$ary[1].$ary[2].$ary[3];
		$_SESSION['ycode'] = $numy[0].$numy[1].$numy[2].$numy[3].$numy[4].$numy[5];


 ?>