<input type='hidden' id='ff' value='0'>

<?php
$month = $_GET['month'];
$year = $_GET['year'];
$user = $_GET['user'];
include '../db/connections.php';

$ff = 0;
function today(){
	
	$res = setQuery("select DATE_FORMAT(now(),'%Y-%m-%d')");
	$ret = "";
	if($colx = getData($res)){
		$ret = $colx[0];
	}
	return $ret;
}

function numberformat($num){
	$n = "";
	if($num<10){
		$n = "0".$num;
	}
	else{
		$n = $num."";
	}
	return $n;
}

function schedd($date,$userid){
	
	$res = setQuery("SELECT * FROM schedule s WHERE s.user_id = $userid AND s.stat =0 and s.schedule like '%$date%'");
	//echo "SELECT s.sched_title FROM scheduler s, farm f WHERE s.farm_id = f.farm_id AND f.stat=0 AND s.stat=0 AND s.sched_stat =0 AND f.user_id = $userid";
	
	$ret = "";
	if($colx = getData($res)){

		$ret = $colx[2];
	}
	return $ret;

}







$today = today();

$num_days = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// Get the first day of the month
$first_day = date('N', strtotime($year . '-' . $month . '-01'));

// Fill in the days of the previous month, if necessary
echo '<tr>';

// Fill in the days of the previous month, if necessary
for ($i = 1; $i <= $first_day; $i++) {
    echo '<td></td>';
}

// Fill in the days of the current month
for ($i = 1; $i <= $num_days; $i++) {
    // Start a new row at the beginning of the week
    if (($i + $first_day - 1) % 7 == 0) {
        echo '</tr><tr>';
    }
    $full = $year."-".$month."-".numberformat($i);
   
	$s3 = schedd($full,$user);
	$newline = "\n";

    if($full==$today){
   		 
    if($s3==""){
		echo '<td style="color:blue; font-size:30;font-weight:900;border:solid 3px blue;" title="Today">' . $i. '</td>';	
		}
		else{
			echo "<input type='hidden' id='fff' value='1'>";
				echo '<td style="color:blue; font-size:30;font-weight:900;border:solid 3px blue;background-color:#b5f9b4;cursor:pointer;" title="Today\n\nWe have farm activity scheduled for today." onclick="pop('."'$full'".')">' . $i. '</td>';
				
				
		}
	}
	else{

		if($s3==""){
			echo '<td style=" font-size:25px;" title="No schedule on this day">' . $i.'</td>';
		}
		else{
		if($full<today()){
			
			echo '<td style=" font-size:25px; background-color:#f3ccc9;cursor:pointer;" title="Maybe you have missed farm activity scheduled on this day'.$newline.$newline.'Click the date to see what events was set on it" onclick="pop('."'$full'".')">' . $i .'</td>';
		}
		else{
			
			echo '<td style=" font-size:25px; background-color:#f9dfb4;cursor:pointer;" title="You have incoming farm activity scheduled on this day'.$newline.$newline.'Click the date to see what events was set on it" onclick="pop('."'$full'".')">' . $i .'</td>';
		}
	}
}
	
}

// Fill in the days of the next month, if necessary
for ($i = ($num_days + $first_day); $i <= 42; $i++) {
    echo '<td style="display:none;"></td>';
}

echo '</tr>';

 ?>

 <style type="text/css">
 	td{text-align: center;height: 90px; width: 90px;}
 	.cbtn{width: 150px;border-radius: 2px;border:solid 1px white;padding-top: 2px; padding-bottom: 2px;}

 </style>

