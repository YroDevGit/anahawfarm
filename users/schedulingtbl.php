 <?php
$data = $_GET['value'];
$user = $_GET['userid'];
$farmid = $_GET['farmid'];
$farmname = $_GET['farmname'];



include '../db/connections.php';


  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">#</th>
          <th class="col0">Activity</th>
          <th class="col2">Schedule</th>
          <th class="col7">Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "SELECT s.sched_id,s.user_id,s.farm_id,s.activity,DATE_FORMAT(s.`schedule`,'%M %d %Y'), s.`schedule` FROM SCHEDULE s, farmtbl f WHERE s.farm_id = f.farmid and s.stat=0 and s.farm_id = '$farmid' and s.cropp = $data";
           
         
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "SELECT s.sched_id,s.user_id,s.farm_id,s.activity,DATE_FORMAT(s.`schedule`,'%M %d %Y'), s.`schedule` FROM SCHEDULE s, farmtbl f WHERE s.farm_id = f.farmid and s.stat=0 and s.farm_id = '$farmid' and s.cropp = $data";
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
                  $schedDate = $datax[4];
                  $digitalDate = $datax[5];
                  $today = todaysDate();
                  $checker = "";
                  if($digitalDate < $today){
                    $checker = "✔️";
                  }
                

                ?>
                <tr>
                  
          <td class="col0"><?php echo $datax[0]; ?></td>
          <td class="col2"><?php echo $datax[3]; ?></td>
           <td class="col2"><?php echo $schedDate." ".$checker; ?></td>


        

          
                  <td style=""><a href="actions/del.php?q=6&data=<?php echo $mid; ?>&link=scheduling.php&fid=<?php echo $farmid; ?>&fname=<?php echo $farmname ;?>" class="linkto"><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php
//<td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="" class=""><button class="no-border tablebtn">Delete</button></a></td>
              }
            }

               ?>
             





            </table>