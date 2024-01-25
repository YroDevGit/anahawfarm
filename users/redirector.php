<?php
$idme = $_GET['idme'];
session_start();

$_SESSION['idme'] = $idme;
include '../farmhouse1126634412Y/img/direct.php';
header("refresh:0;url=".$filename);
 ?>