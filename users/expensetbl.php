 <?php
$data = $_GET['value'];
$user = $_GET['userid'];
$farm_id = $_GET['farm_id'];



include '../db/connections.php';

  ?>

 <table id="myTable">
       <thead>
        <tr>
          <th class="col0">#</th>
          <th class="col0">Expense</th>
          <th class="col2">Amount</th>
         <th class="col2">Date</th>
          <th class="col7">Action</th>
        </tr>
      </thead>
              
              

              <?php

              $squery = "SELECT e.eid, e.expense, e.amount, DATE_FORMAT(e.datetime,'%M %d %Y')'datetime' FROM expenses e, farmtbl f WHERE e.farm_id = f.farmid AND f.farmid = '$farm_id' AND e.stat =0 AND f.stat=0 AND e.expense LIKE '%$data%'";
           
         
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "SELECT e.eid, e.expense, e.amount, DATE_FORMAT(e.datetime,'%M %d %Y')'datetime' FROM expenses e, farmtbl f WHERE e.farm_id = f.farmid AND f.farmid = '$farm_id' AND e.stat =0 AND f.stat=0";
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
                  
          <td class="col0"><?php echo $datax[0]; ?></td>
          <td class="col2"><?php echo $datax[1]; ?></td>
           <td class="col2"><?php echo $datax[2]; ?></td>
           <td class="col2"><?php echo $datax[3]; ?></td>

        

          
                  <td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="actions/del.php?q=1&data=<?php echo $mid; ?>&link=method.php" class="linkto"><button class="no-border tablebtn">Delete</button></a></a></td>
                </tr>
                <?php
//<td style=""><a onclick="return confirm('Are you sure to delete this data?')" href="" class=""><button class="no-border tablebtn">Delete</button></a></td>
              }
            }

               ?>
             





            </table>