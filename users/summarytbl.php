<?php
$user = $_GET['userid'];
$crop = $_GET['value'];
include '../db/connections.php';

function getMyCrop($uzer){
	$sql = "select * from cropp where uzer = $uzer";
	$ret = 0;
	$res = setQuery($sql);
	if($cox = getData($res)){
		$ret =1;
	}
	return $ret;
}

function getMyFarm($uzer){
	$sql = "select * from farmtbl where user = $uzer";
	$ret = 0;
	$res = setQuery($sql);
	if($cox = getData($res)){
		$ret =1;
	}
	return $ret;
}





function totalExpenses($user, $crop){
	$sql = "SELECT sum(e.amount) FROM farmtbl f, expenses e WHERE f.farmid = e.farm_id AND f.`user` = $user AND e.crop = $crop";
	$res = setQuery($sql);
	$ret = 0;
	if($col = getData($res)){
		$ret = $col[0];
	}
	return $ret;
}
function totalCost($user, $crop){
	$sql = "SELECT sum(s.cost) FROM schedule s WHERE s.cost >0 AND s.cropp =$crop and s.user_id = $user";
	$res = setQuery($sql);
	$ret = 0;
	if($col = getData($res)){
		$ret = $col[0];
	}
	return $ret;
}

function totalSales($user,$crop){
	$sql = "SELECT sum(s.total) FROM sales s WHERE s.`user` =$user AND s.crop = $crop ";
	$res = setQuery($sql);
	$ret = 0;
	if($col = getData($res)){
		$ret = $col[0];
	}
	return $ret;
}

 ?>


<div>
	<?php
	if(getMyCrop($user)==1 && getMyFarm($user)==1){

		?>
		<div class="new-content">
	<div>
		<h2>EXPENSES</h2>
	</div>
	<div>
		<h4 id="texpenses">Total Expenses: ₱<?php echo totalExpenses($user, $crop)+totalCost($user, $crop); ?></h4>
	</div>
	<div>
		<section>
			<table style="width: 100%;">
				<tr>
					<th>
						Expenses
					</th>
					<th>Amount</th>
					<th>Date</th>
				</tr>
				<tbody>
					<?php
					$sql = "SELECT CONCAT(e.expense,' for ', f.farm_number), e.amount, DATE_FORMAT(e.datetime,'%M %d %Y') FROM farmtbl f, expenses e WHERE f.farmid = e.farm_id AND f.`user` = $user AND e.crop = $crop";
				
					$res = setQuery($sql);
					$texpnses = 0;

					while($col = getData($res)){
						$texpnses +=$col[1];
						?>
						<tr>
							<td align="center"><?php echo $col[0]; ?></td>
							<td align="center"><?php echo "₱".$col[1]; ?></td>
							<td align="center"><?php echo $col[2]; ?></td>
						</tr>
						<?php
					}


					

					 ?>
				</tbody>
			</table>
			<div>
				<table style="width: 100%;">
				<tr>
					<th>
						Expenses
					</th>
					<th>Amount</th>
					<th>Date</th>
				</tr>
				<tbody>
					<?php
					$sql1 = "SELECT s.activity, s.cost, DATE_FORMAT(s.`schedule`,'%M %d %Y') FROM schedule s WHERE s.cost >0 AND s.cropp =$crop and s.user_id = $user";
				
					$res1 = setQuery($sql1);
					$texpnses1 = 0;

					while($col1 = getData($res1)){
						$texpnses1 +=$col1[1];
						?>
						<tr>
							<td align="center"><?php echo $col1[0]; ?></td>
							<td align="center"><?php echo "₱".$col1[1]; ?></td>
							<td align="center"><?php echo $col1[2]; ?></td>
						</tr>
						<?php
					}

					
					

					 ?>
				</tbody>
			</table>
			</div>
		</section>
	</div>
</div>

<div class="new-content">
	<div>
		<h2>SALES</h2>
	</div>
	<div>
		<h4 id="tsales">Total sales: <?php echo "₱".totalSales($user, $crop); ?></h4>
	</div>
	<div>
		<section>
			<table style="width: 100%;">
				<tr>
					<th>Variety</th>
					<th>
						Sacks
					</th>
					<th>Price per sack</th>
					<th>Total</th>
					<th>Date</th>
				</tr>
				<tbody>
					<?php
					$sql = "SELECT s.sacks, s.price,s.total, DATE_FORMAT(s.date,'%M %d %Y'), s.variety FROM sales s WHERE s.`user` =$user AND s.crop = $crop ";
					$tsales = 0;
					$res = setQuery($sql);
					while($col = getData($res)){
						$tsales += $col[2];
						?>
						<tr>
							<td align="center"><?php echo getRiceName($col[4]); ?></td>
							<td align="center"><?php echo $col[0]; ?></td>
							<td align="center"><?php echo "₱".$col[1]; ?></td>
							<td align="center"><?php echo "₱".$col[2]; ?></td>
							<td align="center"><?php echo $col[3]; ?></td>
						</tr>
						<?php
					}

					 ?>
				</tbody>
			</table>
			
		</section>

	</div>
</div>

		<?php
	}

	else{

	 ?>
<div class="addrec-container">
	<div align="center">
		<div><span class="addrec">No record at the moment. please add some records</span></div>
		<div>
		<a href="afarm.php"><button class="btn">Get Started</button></a>
	</div>
	</div>
	
</div>

</div>

<?php

}
 ?>







