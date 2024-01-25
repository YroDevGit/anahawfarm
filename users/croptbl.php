 <?php
$data = $_GET['value'];
$user = $_GET['userid'];
session_start();
$farmid = $_SESSION['idme'];


include '../db/connections.php';

  ?>

 <table id="myTable">
              <tr>
                <th>Cropping</th>
                <th>Date of plant</th>
                <th>Date of harvest</th>
                <th>Production</th>
                <th>Sack weight</th>
                <th>Action</th>

              </tr>
              
              <?php

              $squery = "select * from cropp where uzer = $user and stat = 0 and farm = '$farmid' and(plant like '%$data%' or harvest like '%$data%') ORDER by harvest desc";
           

              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from cropp where uzer = $user and stat = 0";
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
                  $farmname = getFarmName($datax[8]);

                ?>
                <tr>
                  <td><?php echo $farmname." : ".$datax[2]; ?></td>
                  <td><?php echo $datax[3]; ?></td>
                  <td><?php echo $datax[4]; ?></td>
                  <td><?php echo $datax[5]; ?></td>
                  <td><?php echo $datax[6].'Kg.'; ?></td>
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=2&data=<?php echo $mid; ?>&link=croprecord.php" class=""><button class="no-border tablebtn">Delete</button></a>
                    <a href="editUI.php?type=crop&crop=<?php echo $mid; ?>" class=""><button class="no-border tablebtn">Edit</button></a>
                  </td>
                </tr>
                <?php

              }
            }

               ?>
             





            </table>