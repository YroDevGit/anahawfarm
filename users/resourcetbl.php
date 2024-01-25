 <?php
$data = $_GET['value'];
$user = $_GET['userid'];


include '../db/connections.php';

  ?>

 <table id="myTable">
       <tr>
          <th class="col0">id</th>
          <th class="col2">cropping</th>
          <th class="col3">number of bags/hectare</th>
          <th class="col4">fertilizer type</th>
          <th class="col5">chemical application</th>
          <th class="col5">Action</th>

        </tr>
      </thead>
              
              

              <?php

              $squery = "SELECT r.id,r.`user`,r.crop,r.num_bags,r.fert_type,r.chem_app,r.stat FROM RESOURCE r, cropp c WHERE r.crop = c.cropid and r.user = $user and r.stat =0 and c.cropping like '%$data%'";
           

              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from resource where user = $user and stat = 0";
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
                  $cfarm = getCropAndFarm($datax[2]);

                ?>
                <tr>
                  
         <td class="col0"><?php echo $mid; ?></td>    
          <td class="col2"><?php echo getCropAndFarm($datax[2]); ?></td>
          <td class="col3"><?php echo $datax[3]; ?></td>
          <td class="col4"><?php echo $datax[4]; ?></td>
          <td class="col5"><?php echo $datax[5]; ?></td>
          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=4&data=<?php echo $mid; ?>&link=resource.php" class=""><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php

              }
            }

               ?>
             





            </table>