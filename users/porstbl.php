 <?php
$data = $_GET['value'];
$user = $_GET['userid'];



include '../db/connections.php';

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">FIRSTNAME</th>
          <th class="col2">LASTNAME</th>
          <th class="col3">CONTACT</th>
          <th class="col4">ADDRESS</th>
          <th class="col6">USERNAME</th>
          <th class="col7">PASSWORD</th>
          <th class="col7">Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "select * from users where varcode = $user and (fname like '%$data%' or lname like '%$data%')";
           
         
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from users where varcode = $user";
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
                  
          <td class="col0"><?php echo $datax[1]; ?></td>
          <td class="col2"><?php echo $datax[2]; ?></td>
          <td class="col3"><?php echo $datax[3]; ?></td>
          <td class="col3"><?php echo $datax[4]; ?></td>
          <td class="col3"><?php echo $datax[6]; ?></td>
          <td class="col3"><?php echo $datax[7]; ?></td>

          

          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=1&data=<?php echo $mid; ?>&link=method.php" class=""><button class="no-border tablebtn">Delete</button></a></td>
                </tr>
                <?php
//<td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="" class=""><button class="no-border tablebtn">Delete</button></a></td>
              }
            }

               ?>
             





            </table>