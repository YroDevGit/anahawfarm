<?php
$idme = $_GET['idme'];
session_start();

$_SESSION['idme'] = $idme;
include "actions/newsched.php";
include myPath();
header("refresh:0;url=".$filename);
 ?>