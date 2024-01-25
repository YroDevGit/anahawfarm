<?php
session_start();
$table = $_GET['table'];
$column = $_GET['column'];
$user = $_SESSION['userid'];
$link = $_GET['link'];
include '../../db/connections.php';
include 'message.php';

restore($table, $column, $user);
showSuccess("Data restored");
header("refresh:1;url=../$link");

 ?>