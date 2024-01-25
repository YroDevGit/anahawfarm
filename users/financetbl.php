 <?php
$data = $_GET['value'];
$user = $_GET['userid'];


include '../db/connections.php';

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">ID #</th>
          
          <th class="col2">crop</th>
          <th class="col3">seed cost</th>
          <th class="col4">sacks of seeds</th>
          <th class="col5">fertilizer cost</th>
          <th class="col6">fertiler bags</th>
          <th class="col7">chemical cost</th>
          <th class="col8">Number of chemical</th>
          
          
          <th class="col11">consume sack</th>
          <th class="col12">out of sack</th>
          <th class="col10">marketing income</th>
          <th class="col12">Action</th>
      
        </tr>
      </thead>
              
              

              <?php

              $squery = "select * from finance where user = $user and stat =0";
           

              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from finance where user = $user and stat = 0";
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
      
          <td class="col2"><?php echo getCropAndFarm($datax[2]); ?></td>
          <td class="col3"><?php echo $datax[3]; ?></td>
          <td class="col4"><?php echo $datax[4]; ?></td>
          <td class="col5"><?php echo $datax[5]; ?></td>
          <td class="col6"><?php echo $datax[6]; ?></td>
          <td class="col7"><?php echo $datax[7]; ?></td>
          <td class="col8"><?php echo $datax[8]; ?></td>
        
          
          <td class="col11"><?php echo $datax[11]; ?></td>
          <td class="col12"><?php echo $datax[12]; ?></td>
          <td class="col10"><?php echo $datax[10]; ?></td>
          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=3&data=<?php echo $mid; ?>&link=financial.php" class=""><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php

              }
            }

               ?>
             





            </table>