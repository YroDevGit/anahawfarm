<?php 
include '../../db/connections.php';
$type = $_GET['parameter'];
$id = $_GET['id'];

if($type==1){
	$sql = "update members set del = 1 where mem_id = '$id'";
	if(mysqli_query($con,$sql)){
		deleteMember();
		header("refresh:2;url=../members.php");
	}

}








function deleteMember(){
	?>
	<div align="center">
		<div class="card">
			<div>
				<img src="../../images/trash.png">
			</div>
			<div>
				<span class="copy">Deleted succesfully</span>
			</div>
		</div>
	</div>

	<?php
}
?>

<style type="text/css">
	.card{
		margin-top: 100px;
	}
	.card div{
		margin-top: 15px;
	}
	.copy{font-size: 23px;}
</style>