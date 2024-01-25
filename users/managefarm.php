<?php
session_start();
$schedx = $_SESSION['xsched'];
include "../db/connections.php";
include 'actions/functions.php';
$farmid = $_GET['farmid'];
$cropid = $_GET['cropid'];

$userid = $_SESSION['userid'];
$mname = "";


$msql = "select * from crop where crop_id = '$cropid'";
$start = "";
$end = "";
$cropname = "";

function getFarm($cols, $idfarm){
	$ql = "select * from farm where farm_id = '$idfarm'";
	$ret = "";
	$res = setQuery($ql);
	if($cx = getData($res)){
		$ret = $cx[$cols];
	}
	return $ret;
}

$mname = getFarm(2,$farmid);
$res = setQuery($msql);

if($mcol = getData($res)){
	$start = $mcol[4];
	$end = $mcol[5];
	$cropname= $mcol[2];
}

$able = 1;

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
</head>
<body>

<div>
	
</div>


<div id="details" style="display: none;">
	<div class="modal1">
		<div align="center">
			<div>
				<div class="content1">
					<div align="right">
						<div class="close">
						<span id="cls">X</span>
						</div>
					</div>

					<div>
						<div>
							<div class="title1">
								<span class="title1-span" style="font-weight: 900;">Activity Details</span>
							</div>
						</div>
					</div>

					<div style="margin-top: 30px;">
						<div>
							<div>

								<div>
									<div>
										<div class="ddtt">
											<span id="ddtt"></span>
										</div>
									</div>
								</div>
								<div>
									<div class="datesets">
										<div class="dateset">
											
											<div class="datev">
												<div>
													<input style="height: 0px; width: 0px;" type="date" name="" id="dd1" value="">
												</div>
												<label id="dset" for="dd1" onclick="document.getElementById('dd1').showPicker()"></label>
												
											</div>
											<div class="datet">
												<label>Date set</label>
											</div>
										</div>

										<div class="dateset">
											
											<div class="datev">
												<div>
													<input style="height: 0px; width: 0px;" type="date" name="" id="dd2" value="">
												</div>
												<label id="dact" for="dd2" onclick="document.getElementById('dd2').showPicker()"></label>
												
											</div>
											<div class="datet">
												<label>Date Done</label>
											</div>
										</div>

										<div class="dateset">
											<span id=""></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<style type="text/css">
			.datesets{
				margin-top: 10px;
			}
			.datet{
				border-top: solid 1px #aeadad;
				width: 40%;
			}
			.datet label{
				font-size: 14px;
				color: #ababab;
				font-family:brush scriptmt, cursive;

			}
			.datev label{
				font-size: 18px;
				font-family: monospace;
				cursor: pointer;
			}
			.dateset{
				margin-top: 15px;
			}
			.ddtt span{
				font-size: 19px;
				font-family: monospace;
				color: #15a20b;
			}
		</style>

	</div>
</div>


<script src="jquery/jquery.min.js"></script>
<link rel="stylesheet" href="jquery/jquery-ui.css">
<script src="jquery/jquery-ui.min.js"></script>

<input type="hidden" name="" id="fyear" value="<?php echo $year; ?>">
<input type="hidden" name="" id="fmonth" value="<?php echo $month; ?>">

<div align="center">
	<div class="modal1" id="modal" style="display: none;">
		<div class="content1">
			<div>
				<div align="right">
					<div>
						<span class="close" id="close">X</span>
					</div>
				</div>
				<div class="title1">
					<span class="title1-span">Add new record</span>
				</div>


				<div>
					<div>
						<form method="post" action="actions/sched.php">
							<input type="hidden" name="idfield" value="<?php echo $farmid; ?>">
							<input type="hidden" name="cidfield" value="<?php echo $cropid; ?>">
							<input type="hidden" name="codefield" value="<?php echo $code; ?>">
							<div>
								<div>
									<table class="noborder" style="width: 450px; margin-top: 20px;">
										<tr>
											<td class="td-input"><label class="modal-label">Title: </label></td>
											<td class="td-input"><input type="text" name="title" class="form-input" required=""></td>
										</tr>
										<tr>
											<td class="td-input" style="vertical-align: top;"><label class="modal-label">Description: </label></td>
											<td class="td-input"><textarea class="form-input" name="dsc" style="height: 150px;"></textarea></td>
										</tr>
										<tr>
											<td class="td-input"><label class="modal-label">Date: </label></td>
											<td class="td-input"><input  type="date" required="" max="<?php echo $end; ?>" min="<?php echo $start; ?>" name="date"  onclick="this.showPicker()" class="form-input"></td>
										</tr>

										<tr>
											<td class="td-input"></td>
											<td class="td-btn"><button class="btn" name="addbtn" type="submit" id="yro1">Save</button></td>
										</tr>


									</table>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>




<div align="center">
	<div class="modal1" id="popup" style="display: none;">
		<div class="content1">
			<div>
				<div align="right">
					<div>
						<span class="close" id="hide">X</span>
					</div>
				</div>
				<div class="title1">
					<span class="title1-span" style="color: red;">Enter new Expenses</span>
				</div>


				<div>
					<div>
						<form method="post" action="actions/sched.php">
							<input type="hidden" name="idfield" value="<?php echo $farmid; ?>">
							<input type="hidden" name="cidfield" value="<?php echo $cropid; ?>">
							<input type="hidden" name="codefield" value="<?php echo $code; ?>">
							<div>
								<div>
									<table class="noborder" style="width: 450px; margin-top: 20px;">
										<tr>
											<td class="td-input"><label class="modal-label">Title: </label></td>
											<td class="td-input"><input type="text" name="title" class="form-input" required=""></td>
										</tr>
										<tr>
											<td class="td-input"><label class="modal-label">Enter amount: </label></td>
											<td class="td-input"><input type="number" name="amount" class="form-input" required=""></td>
										</tr>
										<tr>
											<td class="td-input"><label class="modal-label">Date: </label></td>
											<td class="td-input"><input type="date" onclick="this.showPicker()" name="date"  id="examp" class="form-input"  required=""></td>
										</tr>

										<tr>
											<td class="td-input"></td>
											<td class="td-btn"><button id="masai1" class="btn" name="subx" type="submit">Save</button></td>
										</tr>


									</table>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div>
	<div>

		<div align="center">
			<div class="title-up">
				<div>
					<div>
						<span class="main-title"><?php echo $mname; ?></span>
					</div>

					<div>
						<div>
							<?php echo $cropname; ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="div1">
			<div class="item">

				<div align="center">
					<div class="item-title">
						<div>
							<span>RECORDS</span>
						</div>
					</div>
				</div>

				<div align="center">
					<div class="add">
						<div>
							<button class="add-btn" id="newbtn">ADD NEW RECORDS</button>
						</div>
					</div>
				</div>
			

				<div align="center">
					<div class="content">
						<div>
							<table>
								<tr>
							
								<th>Title</th>
								<th>Date</th>
								<th>Status</th>
								<th>Action</th>
								</tr>

								<?php 
								$sql = setQuery("SELECT s.sched_id,s.farm_id,s.sched_title,s.sched_desc,s.sched_date,s.sched_stat,s.stat,s.crop_id,DATE_FORMAT(s.sched_date,'%M %d %Y')'date' FROM scheduler s where s.farm_id = '$farmid' and s.crop_id = '$cropid' and s.stat=0 order by s.sched_date asc");
							
								while($row = mysqli_fetch_array($sql)){
								
									$r0 = $row[0];
									$r1 = $row[1];
									$r2 = $row[2];
									$r3 = $row[3];
									$r4 = $row[4];
									$mark = $row[5];
									$datename = $row[8];

									$day = getDayInterval($r4);
									$hour = getHourInterval($r4);

									$act = "";
									$ttl = "";
									$str = "";
									$actype = 0;
									if($mark==1){

										



										$gg = "";
										$str = "<a href='show/details.php?farmid=$farmid&cropid=$cropid&sched=$r0' style='text-decoration:none;'><strong style='color:#18d81b; cursor:pointer;'>&#10004; Done</strong></a>";
										$act = "<b style='color:red;'>&#8630;</b>";
										$ttl = "Mark as undone";
										$actype = 1;

										
									}
									else{
										$act = "&#10004;";
										$ttl = "Mark as done";
										$actype = 0;
										if($hour<-24){
											$str = "<strong style='color:#ee2035;'>&#10008; Not Done</strong>";
											
										}
										else if($hour>=-24&&$hour<=0){
											$str = "<strong style='color:#5e20ee;'>&#8605; On going</strong>";
										}
										else{
											$exday = $day+1;
											if($exday==1){
												$str = "<strong style='color:#e36802;'>&#8631; Tomorrow</strong>";
											}
											else{$str = "<strong style='color:#dd0ed6;'>$exday days to go</strong>";}
											
										}

									}

									
								?>
								<tr title="<?php echo $r3 ?>">
								
									<td><?php echo $r2; ?></td>
									<td><?php echo $datename; ?></td>
									<td><?php

									if($mark==1){

										$mql = "SELECT s.sched,s.sched_id,s.farm_id,s.user_id,DATE_FORMAT(s.date_set,'%M %d %Y')'date1', DATE_FORMAT(s.date_act,'%M %d %Y')'Date2',s.`desc`,s.stat,s.`status`,s.date_set, s.date_act FROM schedetails s WHERE s.stat=0 and s.sched_id = '$r0'";
										$mres1 = setQuery($mql);
										$mdate1 = "";
										$mdate2 = "";
										if($mcol1=getData($mres1)){
											$mdate1 = $mcol1[4];
											$mdate2 = $mcol1[5];

											$dd1 = $mcol1[9];
											$dd2 = $mcol1[10];
										}

										?>
										<strong style='color:#18d81b; cursor:pointer;' onclick="

										document.getElementById('details').style.display = '';
										document.getElementById('dset').innerHTML = <?php  echo "'$mdate1'"; ?>;
										document.getElementById('dact').innerHTML = <?php  echo "'$mdate2'"; ?>;

										document.getElementById('dd1').value = <?php echo "'$dd1'"; ?>;
										document.getElementById('dd1').min = <?php echo "'$dd1'"; ?>;
										document.getElementById('dd1').max = <?php echo "'$dd1'"; ?>;

										document.getElementById('dd2').value = <?php echo "'$dd2'"; ?>;
										document.getElementById('dd2').min = <?php echo "'$dd2'"; ?>;
										document.getElementById('dd2').max = <?php echo "'$dd2'"; ?>;
										document.getElementById('ddtt').innerHTML = <?php echo "'$r2'"; ?>;



										">&#10004; Done</strong>
										<?php
									}

									else{
										$able = 0;
										$act = "&#10004;";
										$ttl = "Mark as done";

										if($hour<-24){
											?>
											<strong style='color:#ee2035;'>&#10008; Not Done</strong>
											<?php
										}
										else if($hour>=-24&&$hour<=0){
											?>
											<strong style='color:#5e20ee;'>&#8605; On going</strong>
											<?php
										}
										else{
											?>
											<strong style='color:#dd0ed6;'><?php echo $exday; ?> days to go</strong>
											<?php
										}

									}



									 ?></td>
									<td><a class="no-decoration" href="" title="Edit" style="margin-right: 5px;">&#9998;</a>
										<a onclick="return confirm('Warning:\n\nAre you sure to remove it from the record?')" href="actions/delsched.php?idcode=<?php echo $r0; ?>&farm=<?php echo $farmid; ?>&crp=<?php echo $cropid; ?>" class="no-decoration" title="Delete" style="margin-left: 5px;margin-right: 5px;">&#10006;</a>


										<a onclick="return confirm('Warning:\n\nthis will make changes on your record\n\nDo you want to proceed?')" href="actions/schedet.php?type=3&user=<?php echo $userid; ?>&farmid=<?php echo $farmid; ?>&schedid=<?php echo $r0; ?>&actype=<?php echo $actype; ?>&cropp=<?php echo $cropid; ?>" class="no-decoration" title="<?php echo $ttl; ?>" style="margin-left: 5px;"><?php echo $act; ?></a></td>
								</tr>

							<?php } ?>
							</table>

							<div align="right">
								<div>
									<div class="div-total">
										<span class="total">...</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>













			<div class="item">

				<div align="center">
					<div class="item-title" style="background-color: #ffc2ad;">
						<div>
							<span>EXPENSES</span>
						</div>
					</div>
				</div>

				<div align="center">
					<div class="add">
						<div>
							<button class="add-btn" id="exbtn">ADD NEW EXPENSES</button>
						</div>
					</div>
				</div>
			

				<div align="center">
					<div class="content">
						<div>
							<table>
								<tr>
								
								<th>Title</th>
								<th>Amount</th>
								<th>Date</th>
								<th>Action</th>
								</tr>

								<?php 
								$sql = setQuery("SELECT e.code,e.farmid,e.crop,e.ttitle,e.amount,DATE_FORMAT(e.date,'%M %d %Y') FROM expenses e WHERE e.crop ='$cropid' AND e.farmid ='$farmid' AND e.del =0");


								while($row = mysqli_fetch_array($sql)){

									$r0 = $row[0];
									$r1 = $row[3];
									$r2 = $row[4];
									$r3 = $row[5];
									
								?>
								<tr>
									
									<td><?php echo $r1; ?></td>
									<td><?php echo $r2; ?></td>
									<td><?php echo $r3; ?></td>
									<td><a class="no-decoration" href="" title="Edit" style="margin-right: 5px;">&#9998;</a>
										<a onclick="return confirm('Warning:\n\nAre you sure to remove it from the record?')" href="direct/delext.php?type=2&page=<?php echo $id; ?>&id=<?php echo $r0; ?>" class="no-decoration" title="Delete" style="margin-left: 5px;">&#10006;</a></td>
								</tr>

							<?php } ?>
							</table>

							<div align="right">
								<div>
									<div class="div-total">
										<span class="total">...</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			
			
		</div>
	</div>
</div>
<!---- -->


<div align="center" class="mood" id="mood" style="display: none;">
	<div class="box">
		<div>
			<form method="post" action="summary.php?q=1">
				<div>
				<div class="row">
					<span class="donetitle">When the cropping's done?</span>
				</div>
				<div class="row">
					<input class="donedate" name="date" type="date" onclick="this.showPicker()" name="" required="">
				</div>
				<div class="row">
					<table class="donetbl">
						<tr>
							<td align="left" onclick="document.getElementById('mood').style.display='none';"><button type="button" name="sub">Cancel</button></td>
							<td align="right"><button type="submit" name="sub">Submit</button></td>
						</tr>
					</table>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>


<div align="center">
	<div class="summary-div">
		<div>
			<?php
			if($able == 1){
				?>
				<a href="summary.php?type=2&id=<?php echo $id; ?>"><button class="summary" onclick="document.getElementById('mood').style.display='';">CROPPING DONE</button></a>
				<?php
			}
			else{
			 ?>
			<a href="summary.php?type=2&id=<?php echo $id; ?>"><button class="summary" onclick="
			alert('Unable to proceed\nSeems not all activities are done\n\nPlease settle/finish all activities before proceeding.')

			">CROPPING DONE</button></a>
			<?php
		}
			 ?>
			
		</div>
	</div>

	<div>
		<div class="anchored">
			<?php
			if($schedx==1){
				?>
				<a href="farmmgt.php?farmid=<?php echo $farmid; ?>" style="text-decoration: none;"><button class="back-a">OKAY</button></a>
				<?php }
				else if($schedx==2){
					?>
				<a href="calendar.php" style="text-decoration: none;"><button class="back-a">OKAY</button></a>
					<?php
				}
				else{
			 ?>
			 <a href="schedules.php" style="text-decoration: none;"><button class="back-a">OKAY</button></a>
			<?php } ?>	
		</div>
	</div>
</div>

</body>
</html>


<style type="text/css">

	.summary-div{
		margin-top: 30px;
	}
	.summary{
		height: 33px;
		width: 180px;
		background-color: #a8f5c9;
		border: solid 1px #74e7a6;
		box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
		font-size: 15px;
		cursor: pointer;
	}

	.summary:hover{
		background-color: orange;
	}

	.div1{
		display: grid;
     grid-template-columns: repeat(auto-fill, minmax(40%, 1fr));
     grid-gap: 1em;
	}

	.item{
		display: block;  
    align-items: center;
    justify-content: center;
    background-color: white;
 	padding-bottom: 20px;
 	padding-top: 20px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;

	}

	.title-up{
		margin-top: 20px;
		margin-bottom: 30px;
	}

	.main-title{
		font-size: 25px;
		font-family: cursive;
	}
	.item-title{
		background-color: #f8ddaf;
		width: 700px;
		border-radius: 8px;
		padding-top: 10px;
		padding-bottom: 10px;
		
	}

	.item-title div span{
		font-size: 20px;
		font-family: monospace;
	}
	.content{
		padding-top: 10px;
	}
	table, th, td{
		border: solid 1px #bdbdbd;
		border-collapse: collapse;
	}
	table{
		width: 90%
	}
	td{text-align: center;}
	.add{
		margin-top: 15px;
		margin-bottom: 10px;
	}
	.add-btn{
		background-color: #c5e4f7;
		height: 30px;
		border: solid 2px #99d2f5;
		border-radius: 5px;
		width: 180px;
		cursor: pointer;
	}
	.add-btn:hover{
		background-color: orange;
	}
	.modal1{
		position: absolute;
		height: 100%;
		width: 100%;
		background-color: rgb(0,0,0,0.4);
		top:0;
		left: 0;
		padding-top: 100px;
		
	}

	.content1{
		background-color: white;
		padding-top: 20px;
		padding-bottom: 50px;
		width: 700px;
		border-radius: 7px;
	}

	.title1-span{
		font-size: 25px;
		color: black;
		font-family: monospace;

	}

	.noborder, .noborder tr td{
		border: none;
	}

	.form-input{
		width: 100%;
		border: solid 1px #cfcece;
		height: 25px;
		border-radius: 5px;
		outline: none;
		padding-left: 5px;
		font-size: 15px; 
	}
	.modal-label{
		font-size: 17px;
		font-family: monospace;
	}
	.td-input{
		text-align: left;
		padding-top: 10px;
	}
	.td-btn{
		padding-top: 10px;
		text-align: right;
	}

	.btn{
		background-color: #f7e191;
		border:solid 1px #f2cd45;
		width: 110px; 
		height: 27px;
		font-size: 16px;
		border-radius: 5px;
		cursor: pointer;
	}
	.btn:hover{
		background-color: orange;
	}
	.close{
		font-family: cursive;
		margin-right: 20px;
		font-size: 23px;
		color: #9f9d9d;
		cursor: pointer;
	}
	.close:hover{
		color: orange;
	}
	th{
		background-color: #c2ffc9;
	}
	.back-a{
		color: #db25f4;
		font-size: 18px;

	}

	.no-decoration{
		text-decoration: none;
	}

	.back-a:hover{color: red;}

	.anchored{
		margin-top: 15px;
	}

	.div-total{
		margin-top: 25px;
		margin-right: 40px;
	}
	.total{
		color: #42a003;
		font-size: 17px;
		text-decoration: underline;
		font-family: monospace;
	}

	.ui-datepicker-week-end .ui-state-default{
		background-color: #a9fee5;

	}

	th[scope=col]{
		background-color: #d8dafd;

	}
	#ui-datepicker-div{
		width: 350px;
	}
</style>


<style type="text/css">
	.mood{
		position: absolute;
		padding-top: 150px;
		z-index: 100;
		width: 100%;
		height: 100%;
		left: 0;
		top: 0;
		background-color: rgb(0,0,0,0.5);
	}
	.box{
		padding-top: 15px;
		padding-bottom: 15px;
		padding-left: 15px;
		padding-right: 15px;
		background-color: white;
		width: auto;
		display:inline-block;
	}
	.donedate{
		width: 200px;
		height: 30px;
		border-radius: 5px;
		border:solid 1px #c7c7c7;
		outline: none;
	}
	.row{
		padding-top: 10px;
		padding-bottom: 10px;
	}
	.donetitle{
		font-size: 25px;
	}

	.donetbl{
		width: 100%;
		border:none;
	}
	.donetbl tr td{border:none;}

</style>


<script type="text/javascript">

var month = document.getElementById("fmonth").value;
var year = document.getElementById("fyear").value;



document.getElementById('close').onclick = function(){
	document.getElementById('modal').style.display = 'none';
}
document.getElementById('newbtn').onclick = function(){
	document.getElementById('modal').style.display = '';
}	

document.getElementById('hide').onclick = function(){
	document.getElementById('popup').style.display = 'none';
}
document.getElementById('exbtn').onclick = function(){
	document.getElementById('popup').style.display = '';
}	


document.getElementById('cls').onclick = function(){
	document.getElementById('details').style.display = 'none';
}


function showDetails(date1, date2,status){
	document.getElementById('details').style.display = '';
}


</script>