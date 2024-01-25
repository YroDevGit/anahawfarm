<?php
include '../../db/connections.php';
include 'functions.php';

$type = $_GET['type'];
$user = $_GET['user'];
$farm = $_GET['farmid'];
$sched = $_GET['schedid'];
$date1 = "";
$date2 = "";
$cropp = $_GET['cropp'];
$actype = $_GET['actype'];


$now = today();


$xes = setQuery("select * from scheduler where sched_id = '$sched'");
if($col = getData($xes)){
	$date1 = $col[0];
	$dato = $col[4];
	$crop = $col[7];
}

$start = "";
$end = "";
$xer = setQuery("select * from crop where crop_id = '$crop'");
if($xol = getData($xer)){
$start = $xol[4];
$end = $xol[5];
}






if($actype==0){

?>

<div align="center">
	<div class="controller">
		<div class="cont">
			<div>
				<div>
					<div class="heading">
						<span>Select the date when it was done</span>
					</div>
				</div>

				<div>
					<div class="unod">
						<form method="post" action="changedsced.php?devName=TyroneLimenMalocon">
							<input type="hidden" name="user" value="<?php echo $user; ?>">
							<input type="hidden" name="farm" value="<?php echo $farm; ?>">
							<input type="hidden" name="crop" value="<?php echo $crop; ?>">
							<input type="hidden" name="user" value="<?php echo $user; ?>">
							<input type="hidden" name="date" value="<?php echo $dato; ?>">
							<input type="hidden" name="sched" value="<?php echo $sched; ?>">

							<div class="for-input" align="center">
								<div style="margin-bottom: 6px;">
									<span id="datename" style="color: blue; font-family: cursive;font-weight: 700;">sad</span>
								</div>
								<div>
									<input type="date" name="select" id="datefield" onclick="this.showPicker()" value="<?php echo $now; ?>" required="" max="<?php echo $end; ?>" min="<?php echo $start; ?>">
								</div>
								<div class="submit">
									<button type="submit" name="sub">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	window.onload = function(){
		getDate();
	}
		
	document.getElementById('datefield').onchange =function(){
		getDate();

	}

	function getDate(){
		var tf = document.getElementById('datefield').value;
		var ht = new XMLHttpRequest();
		ht.onload = function(){
			document.getElementById('datename').innerHTML = this.responseText;
		}
		ht.open("GET","../xml/datenames.php?type=4&q1="+tf+"&q2=tyrone_cute");
		ht.send();
	}

</script>

<style type="text/css">
	.cont{padding-left: 10px; padding-right: 10px; padding-top: 10px; padding-bottom: 10px; border:solid 1px #bdbdbd;}
	.unod{margin-top: 20px; margin-bottom: 20px;}
	.for-input div input{width: 250px; height: 30px; font-size: 17px;font-family: cursive;outline: none; border:solid 1px #bdbdbd;border-radius: 5px;}
	.heading span{
		font-size: 20px;
		font-weight: 900;
		font-family: cursive;
	}
	.controller{
		margin-top: 100px;
	}
	.submit{margin-top: 10px;}
	.submit button{background-color: #38d39f; border:solid 1px #38d39f;border-radius: 5px;height: 30px; width: 120px;font-weight: 900;cursor: pointer;}
	.submit button:hover{background-color: orange; border:solid 1px orange;}
</style>




<?php

}


else{

	$sql2 = "update scheduler set sched_stat = 0 where sched_id = '$sched'";
	if(setQuery($sql2)){
		header("refresh:2;url=../managefarm.php?farmid=$farm&cropid=$crop");
		?>

		<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Added successful </title>

	<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:380px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#38d39f;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
	   background-color: black;
   }
   
   .check i
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;

   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a button
    {
    	border:1px #38d39f solid;
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:#38d39f;
        transition:all ease-in-out 0.3s;
        cursor: pointer;
        transition: linear 0.5;
    }

    .content a button:hover
    {
        text-decoration:none;
        background:#000;
    }
		
	.video_ad
		{
			display: inline-block;
			width: 48%;
			margin-top: 20px;
			margin-left: 1%;
		}
   
	</style>
	
</head>

<body>
   <div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><i class="" style="color: white;">&#10004;</i></div>
            </div>
            <div class="content">
               <h1>Schedule mark as undone</h1>
               <p>There is such some changes happened to your record</p>
               <p><span style="font-size: 30px;">&#128260;</span></p>
               <p>Page will refresh, please wait....</p>
            </div>
            
         </div>
      </div>
   </div>
</div>
	
   
   
</body>
</html>


		<?php

	}

}


 ?>