<?php
include '../../db/connections.php';
$data = $_GET['q'];
$user = $_GET['w'];
//echo intval(getHarvest($user,$data));
echo intval(getHarvest($user,$data));
 ?>