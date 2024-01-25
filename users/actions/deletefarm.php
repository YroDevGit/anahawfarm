<?php

include '../../db/connections.php';

$get = $_GET['get'];

$sql = "update farm set stat = -1 where farm_id  = '$get'";


if(setQuery($sql)){

?>

<div align="center">
	  	<div style="margin-top: 100px;">
	  		<div>
	  			<span style="font-size: 35px; color: green;">&#128465;</span>
	  		</div>
	  		<div>
	  			<span style="font-size: 20px;">Selected farm deleted</span>
	  		</div>
	  		<div style="margin-top: 10px;">
	  			<span style="color: gray;">This farm will no longer appear on your records.</span>
	  		</div>
	  		
	  	</div>
	  </div>

<?php


}


 ?>


 <script type="text/javascript">
 	
 	window.onload = function(){

 		setTimeout(switchx,2000);
 	}

 	function switchx(){
 		window.location = "../farms.php";
 	}

 </script>


 <style type="text/css">
 	.mybtn{
 		cursor: pointer; border-radius: 5px; background-color:  #38d39f; border:solid 1px #38d39f; width: 120px; height: 30px;
 	}
 	.mybtn:hover{
 		background-color: orange;
 	}
 </style>