 <?php
$data = $_GET['value'];
$user = $_GET['userid'];


include '../db/connections.php';

  ?>

 <table id="myTable">
            




      <thead>
        <tr>
          <th class="col0">ID</th>
          <th class="col1">Name</th>
          <th class="col2">Address</th>
          <th class="col3">Contact</th>
          <th class="col4">Farm address</th>
          <th class="col5">Area</th>
          <th class="col6">Seed</th>
          <th class="col7">Date planten</th>
          <th class="col8">Program</th>
          <th class="col9">Cause</th>
          <th class="col10">Damage date</th>
          <th class="col11">Plant age</th>
          <th class="col12">area damaged</th>
          <th class="col13">Damage %</th>
          <th class="col14">Crop date</th>
          <th class="col15">North</th>
          <th class="col16">South</th>
          <th class="col17">East</th>
          <th class="col18">West</th>
          <th class="col18">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php

         ?>
       



   


              <?php

              $squery = "SELECT * FROM damage d WHERE (d.dateplant LIKE '%$data%' OR d.cropdate LIKE '%$data%') AND (d.uzer =$user AND d.stat = 0)";
          
              $dta = hasData($squery);
              if($dta==0){
                $sampql = "SELECT * FROM damage d WHERE (d.uzer =$user AND d.stat = 0)";
                $getres = hasData($sampql);
                if($getres==0){
                  $display ="No data to show.";
                }
                else{
                  $display = "No data related to ".'"<span style="color:#2a9ff8;">'.$data.'"</span>"';
                }



                ?>
                <tr>
                  <td colspan="20" style="padding-top: 30px; padding-bottom: 30px;"><span><?php echo $display; ?></span></td>
                </tr>
                <?php
              }
              else{

              $tquery = setQuery($squery);
              while($datax = getData($tquery)){

                ?>


        <tr>
          <?php
          for ($i=0; $i <=18 ; $i++) { 
           ?>
           <td><?php echo $datax[$i]; ?></td>
           <?php
          }

           ?>
           <td><a onclick="return confirm('Are you sure to delete this data?')" href="" class="spaces"><button class="no-border tablebtn">Delete</button></a></td>
        </tr>

                  
                
                <?php

              }
            }

               ?>
             




</tbody>
            </table>