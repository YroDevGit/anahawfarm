 <?php
$data = $_GET['value'];
$user = $_GET['userid'];
session_start();
$farmid = $_SESSION['idme'];


include '../db/connections.php';

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">id</th>
          <th class="col2">Planted area</th>
          <th class="col3">Cropping season</th>
          <th class="col4">Cropping time</th>
          <th class="col5">Procedure</th>
          <th class="col6">Planting method</th>
          <th class="col7">Variety</th>
          <th class="col7">Farm</th>
          <th class="col7">Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "select * from method where user = $user and stat = 0 and farm_id = '$farmid' and (planted_area like '%$data%' or season like '%$data%' or ctime like '%$data%' or `procedure` like '%$data%')";
           
         
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from method where user = $user and stat = 0";
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

                ?>
                <tr>
                  
          <td class="col0"><?php echo $mid; ?></td>
          <td class="col2"><?php echo $datax[2]; ?></td>
          <td class="col3"><?php echo $datax[3]; ?></td>
          <td class="col4"><?php echo $datax[4]; ?></td>
          <td class="col5"><?php echo $datax[5]; ?></td>
          <td class="col6"><?php echo $datax[6]; ?></td>
          <td class="col7"><?php echo getRiceName($datax[7]); ?></td>
          <td class="col7"><?php echo getFarmname($datax[9]);?></td>

          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=1&data=<?php echo $mid; ?>&link=method.php" class=""><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php
//<td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="" class=""><button class="no-border tablebtn">Delete</button></a></td>
              }
            }

               ?>
             





            </table>