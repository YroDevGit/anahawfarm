<?php
include '../db/connections.php';
$bdate = $_GET['q'];
echo getAge($bdate);

 ?>