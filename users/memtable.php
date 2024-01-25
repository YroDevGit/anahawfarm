 <?php
$data = $_GET['value'];
$user = $_GET['userid'];


include '../db/connections.php';

  ?>

 <table id="myTable">
              <tr>
                <th>Fullname</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Status</th>

                <th>Action</th>

              </tr>

              <?php

              $squery = "select * from members where (fname like '%$data%' or lname like '%$data%' or mem_id like '%$data%') and (user_id = $user and del=0)";

              $dta = hasData($squery);
              if($dta==0){
                $sampql = "select * from members where user_id = $user and del=0";
                $getres = hasData($sampql);
                if($getres==0){
                  $display = "You do not yet have any members.<br>Please <b style='color:#2a9ff8;text-decoration:underline;cursor:pointer;' onclick='displayModal()'>Add</b> members first";
                }
                else{
                  $display = "No data related to ".'"<span style="color:#2a9ff8;">'.$data.'</span>"';
                }



                ?>
                <tr>
                  <td colspan="5" style="padding-top: 30px; padding-bottom: 30px;"><span><?php echo $display; ?></span></td>
                </tr>
                <?php
              }
              else{

              $tquery = setQuery($squery);
              while($datax = getData($tquery)){

                $memid = $datax[0];
                $fname = $datax[1];
                $lname = $datax[2];
                $fullname = $fname.' '.$lname;

                $contact = $datax[3];
                $address = $datax[4];
                $memtype = $datax[5];
                $memstat = $datax[7];

                ?>
                <tr>
                  <td><?php echo $fullname ?></td>
                  <td><?php echo $contact ?></td>
                  <td><?php echo $address; ?></td>
                  <td><?php echo '---'; ?></td>
                  <td style="width: 300px;"><a href="" class="spaces"><button class="no-border tablebtn">Edit</button></a><a onclick="return confirm('Are you sure to delete this data?')" href="actions/actions.php?parameter=<?php echo 1; ?>&id=<?php echo $memid; ?>" class="spaces"><button class="no-border tablebtn">Delete</button></a><a href="" class="spaces"><button class="no-border tablebtn">View</button></a></td>
                </tr>
                <?php

              }
            }

               ?>
             





            </table>