<?php 
include '../db/connections.php';
$farmn = $_GET['farmname'];
session_start();
$userid = $_SESSION['userid'];
$rad = $_GET['rad'];

$arr = array("#ebf3c3","#f3e9c3","#f9dad7","#f2def7","#dee3f7","#bce8f1","#bcf1d3","#fefba4","#bdeeff");
$prev = "";


?>


<div>
	<div>
		<div class="div1">
			<?php
		$sqlx = "";
		if($rad==0){$sqlx = "select * from farm where (farm_name like '%$farmn%' or farmcode like '%$farmn%') and stat = 0 and user_id = $userid order by farm_id desc";}

		if($rad==1){$sqlx = "select * from farm where (farm_name like '%$farmn%' or farmcode like '%$farmn%') and stat = 0 and user_id = $userid and farm_id IN (SELECT c.farm_id FROM crop c WHERE c.stat=0 AND c.`status`=0) order by farm_id desc";}
		if($rad==2){$sqlx = "select * from farm where (farm_name like '%$farmn%' or farmcode like '%$farmn%') and stat = 0 and user_id = $userid and farm_id not IN (SELECT c.farm_id FROM crop c WHERE c.stat=0 AND c.`status`=0) order by farm_id desc";}

		

			$sql = setQuery($sqlx);
			$sql1 = setQuery($sqlx);

			if(getData($sql1)){

			while($col = mysqli_fetch_array($sql)){
				$id = $col[0];
				$farmname = $col[2];
				$image = $col[3];
				$hect = $col[4];
				$fields = $col[5];
				$desc = $col[7];
				$codex = $col[8];
				$codey = $col[9];

				shuffle($arr);
				$coll = $arr[0];

				if($coll==$prev){
					$coll = $arr[1];
				}

				$prev = $coll;
			 ?>

			<div style="">
				<div>
					<div class="item" style="background-color: <?php echo $coll; ?>">
				<div align="center">
					<div class="for-title">
						<span class="titlex"><?php echo $farmname; ?></span>
						<div>
							<div>
								<span class="code"><?php echo $codex;?></span>
							</div>
						</div>
						
					</div>

					<div>
						<div>
							<div id="<?php echo $id; ?>" style="display: none;">
								<div align="center" style="position: relative; width: 100%;">
									<div style="background-color: white; position: absolute; width: 100%; padding-top: 10px; padding-bottom: 10px; border-radius: 5px; padding-left: 5px; padding-right: 5px;">
										<div>
											<div style="margin-top: 10px; margin-bottom: 10px;">
												<h5>FARM DESCRIPTION</h5>
											</div>
											<p style="font-size: 13px;" ><?php
											echo $desc;

											 ?></p>
										</div>
										<div>
											<p style="color: #f948a7;cursor: pointer;text-decoration: underline; margin-top: 10px;" onclick="
											document.getElementById('<?php echo $id; ?>').style.display = 'none';
											">OKAY</p>
										</div>
									</div>
								</div>
							</div>

							<div>
								<div>
									<?php

									$sqlv = "select * from crop where farm_id = '$id' and status =0 and stat=0";
									$res = setQuery($sqlv);
									if(getData($res)){
											

											?>
											<div style="padding-top: 10px; padding-bottom: 10px;">
												<span style="color: gray; font-size: 14px;">Active <b style="">&#10004;</b></span>
											</div>

											<?php
									}
									else{


									 ?>

									 <div style="padding-top: 10px; padding-bottom: 10px;">
										<span style="color: gray; font-size: 14px;">Inactive <b style="color:red;">&#10060;</b></span>
									</div>
									 <?php
									}
									  ?>


									 
								</div>
							</div>

							<div align="center">
								<div class="subcopies">
									<table>
										<tr class="t-row">
											<td>
												<span class="labelext">Area:</span>
											</td>
											<td>
												<span class="valueext"><?php echo $hect; ?></span><span> Hectare</span>
											</td>
										</tr>
										<tr class="t-row">
											<td>
												<span class="labelext">Fields: </span>
											</td>
											<td>
												<span class="valueext"><?php echo $fields; ?></span><span> Fields</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="for-content">

						<div class="btn-div"><b style="cursor: pointer; text-decoration: underline; color: #1b32de;" onclick="
						document.getElementById('<?php echo $id; ?>').style.display = '';
						">Show details</b></div>
						<div class="div-content">

							<div class="btn-div"><a href="farmmgt.php?farmid=<?php echo $id; ?>&code=<?php echo $codey; ?>"><button class="btnext">VIEW</button></a></div>
							
							<div class="btn-div"><a href="summary.php?type=1&id=<?php echo $id; ?>"><button class="btnext">UPDATE</button></a></div>
							<div class="btn-div"><a onclick="return confirm('Are you sure to delete this farm?\nIt will no longer display here.')" href="actions/deletefarm.php?get=<?php echo $id; ?>"><button class="btnext">DELETE</button></a></div>
						</div>
					</div>
				</div>
				
			</div>
				</div>
			</div>


		<?php }
}
else{
?>
<div style="width: 100%;margin-top: 20px; margin-bottom: 20px;">
	<div>
		<div>
			<marquee>No data to display</marquee>
		</div>
	</div>
</div>
<?php
}


		 ?>
			
			
			
		</div>
	</div>
</div>






<style type="text/css">
	.div1{
		left: 0;
		margin-top: 20px;
	 display: grid;
     grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
     grid-gap: 1em;
	}

	.item{
		display: flex;

    justify-content: center;
    background-color: rgb(250,183,0, 0.4);
    height: 440px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
    padding-top: 5px;

	}
	.for-title{
		
		height: 90px;
		width: 350px;
		background: url('../images/topheader.jpg') no-repeat;
		background-size: cover;
		border-radius: 5px;
		margin-top: 10px;
		padding-top: 22px;

	}

	.titlex{
		font-size: 21px;
		font-family: cursive;
		color: white;

	}
	.btnext{
		width: 120px;
		transition: all 550ms linear;
	}
	.btnext:hover{
		background-color: #403D39;
		color: #FFFFFF;
		border:solid 1px #403D39;
	}
	.btn-div{margin-top: 10px;}
	.div-content{padding-top: 30px;}
	.btnext{
		background-color: #38d39f;
		border:solid #38d39f 1px;
		border-radius: 5px;
	}

	.labelext{
		font-size: 18px;
		font-family: cursive;
		color: black;
	}

	.valueext{
		font-size: 18px;
		font-family: cursive;
		color: black;
		font-weight: 900;
	}
	.subcopies{
		margin-top: 10px;
		margin-bottom: 10px;
	}
	.code{
		font-size: 12px;
		color: black;
	}
</style>