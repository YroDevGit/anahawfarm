<?php 

$account = $_GET['qid'];
$type = $_GET['xtype'];

include '../../db/connections.php';


if($type=='v'){
$sql = "update users set actions = 1 where user_id = '$account'";


if(setQuery($sql)){
	?>

	<div align="center">
	  	<div style="margin-top: 100px;">
	  		<div>
	  			<span style="font-size: 35px; color: green;">&#10004;</span>
	  		</div>
	  		<div>
	  			<span style="font-size: 20px;">Account is now verified</span>
	  		</div>
	  		<div style="margin-top: 10px;">
	  			<span style="color: gray;">This account can now access a lot of features</span>
	  		</div>
	  		<div style="margin-top: 15px;">
	  			<a href="../accounts.php"><button class="mybtn">Okay, I got it</button></a>
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