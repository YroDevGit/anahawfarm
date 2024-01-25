 <?php
$data = $_GET['value'];
$user = $_GET['userid'];


include '../db/connections.php';

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">ID #</th>
         
          <th class="col2">cropping</th>
          <th class="col3">partida sa ani</th>
          <th class="col4">partida sa triser</th>
          <th class="col5">partida sa porsyentador</th>
          <th class="col6">Consume</th>
          <th class="col7">Total</th>
          <th>Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "select * from inventory where user = $user and stat =0";
           

              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from inventory where user = $user and stat =0";
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


          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=5&data=<?php echo $mid; ?>&link=inventory.php" class=""><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php

              }
            }

               ?>
             





            </table>