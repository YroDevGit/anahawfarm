 <?php
$data = $_GET['value'];
$user = $_GET['userid'];



include '../db/connections.php';

function isActiveFarm($farmid){
$command = "SELECT * FROM schedule s WHERE s.`schedule` > NOW() AND s.stat = 0 AND s.farm_id = '$farmid'";
$res = setQuery($command);
$ret = 0;
if($col = getData($res)){
  $ret = 1;
}
else{
  $ret = 0;
}
return $ret;
}

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">FARM #</th>
 
          <th class="col3">AREA (Hectare)</th>
          <th class="col4">FIELDS</th>
          <th class="col6">LOCATION</th>
          <th class="col7">STATUS</th>
          <th class="col7" style="display: none;">PORSYENTADOR</th>
          <th class="col7">Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "select * from farmtbl where user = $user and stat = 0 and (farmname like '%$data%' or farm_number like '%$data%')";
           
         
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from farmtbl where user = $user and stat = 0";
                $getres = hasData($sampql);
                if($getres==0){
                  $display = "No data to display";
                }
                else{
                  $display = "No data related to ".'"<span style="color:#2a9ff8;">'.$data.'</span>"';
                }



                ?>
                <tr>
                  <td colspan="1000" style="padding-top: 30px; padding-bottom: 30px;"><span><?php echo $display; ?></span></td>
                </tr>
                <?php
              }
              else{

              $tquery = setQuery($squery);
              while($datax = getData($tquery)){
                  $mid = $datax[0];
                  $mgid = "id".$mid;
                  $act = $datax[6];
                  $farmnamex = $datax[2];
                  $active = isActiveFarm($mid);

                  $mgr = $datax['mgr'];
                  $cclas = "";
                  $chtml = "";
                  $perf = "actions/admem.php?action=1&pp=1";
                  if($active == 0){
                    $cclas = "btn btn-dark mxwid";
                    $chtml = "Inactive";
                    $perf = "actions/admem.php?action=1&pp=0&code=$mid";
                  }
                  else{
                    $cclas = "btn btn-success mxwid";
                    $chtml = "Active";
                    $perf = "actions/admem.php?action=1&pp=1&code=$mid";
                  }



                  $manage = "";
                  $mclass = "";
                  if($mgr==0){
                    $manage = "Unassigned";
                    $mclass = "btn-warning";
                  }
                  else{
                    $manage = "Assigned";
                    $mclass = "btn-success";
                  }

                ?>
                <tr>
                  
          <td class="col0"><?php echo $datax[1]; ?></td>

          <td class="col3"><?php echo $datax[3]; ?></td>
          <td class="col4"><?php echo $datax[4]; ?></td>
          <td class="col5"><?php echo $datax[5]; ?></td>
          <td class="col7"><form method="post" action="<?php echo $perf; ?>"><button type="submit" name="act" class="<?php echo $cclas; ?>"><?php echo $chtml; ?></button></form></td>
          <td style="display: none;"><button class="btn maxiwid <?php echo $mclass; ?>"><?php echo $manage; ?></button></td>

          
                  <td style="">
                    <button class="btn btn-primary" id="dropbtn"  onclick="
                    if(document.getElementById('<?php echo $mgid; ?>').style.display=='none'){
                      document.getElementById('<?php echo $mgid; ?>').style.display='';
                    }
                    else{
                      document.getElementById('<?php echo $mgid; ?>').style.display='none';
                    }
                    ">...</button>
                    <div style="display: none;" id="<?php echo $mgid; ?>" class = "dropme" >
                      <a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=100&data=<?php echo $mid; ?>&link=afarm.php" class="linkto"><button class="no-border tablebtn">Delete</button></a><a href="expenses.php?f_id=<?php echo $mid; ?>&farmname=<?php echo$farmnamex;?>" class="linkto"><button class="no-border tablebtn">Expenses</button></a><a href="scheduling.php?f_id=<?php echo $mid; ?>&farmname=<?php echo$farmnamex;?>" class="linkto"><button class="no-border tablebtn">Schedules</button></a>
                      <a href="redirector.php?idme=<?php echo $mid; ?>" class="linkto"><button class="no-border tablebtn">VIEW ALL</button></a>
                    </div>
                  </td>
                </tr>
                <?php
//<td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="" class=""><button class="no-border tablebtn">Delete</button></a></td>
              }
            }

               ?>
             





            </table>