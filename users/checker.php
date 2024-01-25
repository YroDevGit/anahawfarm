<?php
include '../db/connections.php';

$username = strip($_GET['uname']);

if($username == ""){
echo "<input type = 'hidden' id= 'chk' value='-1'>";
}

else{

$query = "select * from users where username = '$username'";

$res = setQuery($query);

if(getData($res)){
?>

<input type="hidden" name="" id="chk" value="1">

<?php
}

else{
?>

<input type="hidden" name="" id="chk" value="0">
<?php
}
}

 ?>