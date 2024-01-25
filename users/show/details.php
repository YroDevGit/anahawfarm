<?php
include '../../db/connections.php';
$r0 = $_GET['sched'];

$farmid = $_GET['farmid'];
$cropid = $_GET['cropid'];

$ql = "SELECT s.sched, s.date_set,s.date_act,DATE_FORMAT(s.date_set,'%M %d %Y')'date1',DATE_FORMAT(s.date_act,'%M %d %Y')'date',TIMESTAMPDIFF(HOUR,s.date_set,s.date_act)'range' FROM schedetails s WHERE s.stat=0 AND s.sched_id = $r0";

$es = setQuery($ql);
$datex1 = "";
$datex2 = "";
$rangex = 0;
if($ol = getData($es)){

$datex1 = $ol[3];
$datex2 = $ol[4];
}


 ?>



 <div>
 	<div>
 		<div>
 			<div>
 				asdas
 			</div>
 		</div>
 	</div>
 </div>