<?php
$userid = $_GET['quiid'];

 ?>

<div style="margin-top: 20px;">


	<div>
		<div class="for-back">
			<div>
				<a href="farms.php" style="text-decoration: none;"><span class="back"><< Back to previous page</span></a>
			</div>
		</div>
	</div>

	<div align="center">
		<div>
			
<div>
	<div>
		<div>
			<div>
				
				<table border="1">
					<tr>
						<th>FARM #</th>
						<th>Farm name</th>
						<th>Description</th>
						<th>Area</th>
						<th>Fields</th>
						<th>Code</th>
					</tr>

					<?php
					include '../db/connections.php';

					$sql = "select * from farm where stat = 0 and user_id = $userid order by farm_id desc";
					$res = setQuery($sql);
					while($col = getData($res)){
						?>
						<tr>
						<td><?php echo $col[0]; ?></td>
						<td style="width: 350px;"><?php echo $col[2]; ?></td>
						<td style="width: 500px;"><?php echo $col[7]; ?></td>
						<td><?php echo $col[4]; ?></td>
						<td><?php echo $col[5]; ?></td>
						<td style="width: 150px;"><?php echo $col[8]; ?></td>
						</tr>
						<?php
					}


					 ?>
				</table>


			</div>
		</div>
	</div>
</div>

		</div>
	</div>
</div>
<style type="text/css">
	td{
		padding-left: 5px; padding-right: 5px;
		text-align: center;
		width: 100px;
		word-wrap: break-word;
	}
	th{
		text-align: center;
		background-color: gray;
	}

	.for-back{
		margin-top: 10px; margin-bottom: 30px; margin-left:30px;
	}
	.back{
		font-size: 20px;
		color: #17d0de;
	}
	.back:hover{
		color: orange;
	}
</style>