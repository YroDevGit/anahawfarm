<?php
session_start();
$_SESSION['active'] = 3;
$_SESSION['xsched'] = 3;
include '../db/connections.php';

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ---
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
 
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

<div align="center">
  
 <?php
 if(hasNotif($_SESSION['userid'])==1){

  ?>

   <div class="modax" id="modax" style="display: none;">
    <div>
      <div>
        
        <div class="contenx">
          <div>
            <div>

              <div>
                <div>
                  <div class="closex" align="right">
                    <span id="closex">X</span>
                  </div>
                </div>
              </div>
              


              <div>
                <div class="bodyx">
                  <div>
                  
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
 }



  ?>

  <style type="text/css">
    .modax{width: 100%; height: 100%; position: fixed; background-color: rgb(0,0,0,0.5);z-index: 9000;}
    .contenx{width: auto;padding-top: 20px; padding-bottom: 25px;background-color: white;margin-top:80px; width: 50%;border-radius: 5px;}
    .closex span{font-family: monospace;font-size: 25px;color: #ababab; cursor: pointer;}
    .closex{margin-right: 15px;float: right;}
  </style>
  <script type="text/javascript">
    document.getElementById('closex').onclick = function(){
      document.getElementById('modax').style.display = 'none';
    }
  </script>

</div>


  <div class="wrapper ">
    

<?php include 'sidebar.php'; ?>
<div class="main-panel">
  <?php include 'topbar.php'; ?>



  <div>
  <div class="smain">
    <div>
      <div>
        
        



        <div>
          <div class="stable">
        <div class="stitle">
          <div>
            <span>Incoming activity </span>
          </div>
        </div>

            <table id="myTable">
              <tr>
                <th>Farm</th>
                <th>Activity</th>
                <th>-</th>
                <th>Date</th>
                <th>Status</th>

                <th>Action</th>

              </tr>
              <?php
              $uzr = $_SESSION['userid'];
              

              
              $uzr = $_SESSION['userid'];
              $qll = "SELECT s.crop_id,f.farm_name,s.sched_title,s.sched_date,DATE_FORMAT(s.sched_date,'%M %d %Y'), TIMESTAMPDIFF(DAY,NOW(),s.sched_date), f.farm_id FROM farm f, scheduler s WHERE f.farm_id = s.farm_id AND f.stat=0 AND s.stat=0 AND TIMESTAMPDIFF(DAY,NOW(),s.sched_date)>-1 AND f.user_id = $uzr";

              if(hasResult($qll)){

              $req = setQuery($qll);
              
              while($colz = getData($req)){
                $cid = $colz[0];
                $pname = $colz[1];
                $pstitle = $colz[2];
                $dtdt = $colz[3];
                $pdate = $colz[4];
                $days = $colz[5];
                $farmIDx = $colz[6];
                $stt = "";
               $dy = $days+1;
                  if($dy>1){
                    $stt= $dy." Days to go";
                  }
                  else if($dy==1){
                    $stt="On going";
                  }
                  else if($dy==0 && $dy<0){

                  }
                
               ?>
              

              <tr>
                <td><?php echo $pname; ?></td>
                <td><?php echo $pstitle; ?></td>
                <td style="font-size: 1px;user-select: none;"><?php echo $dtdt; ?></td>
                <td><?php echo $pdate; ?></td>
                <td><?php echo $stt; ?></td>
                <td><a href="http://localhost/farmers.com/users/managefarm.php?farmid=<?php echo $farmIDx; ?>&cropid=<?php echo $cid; ?>&code=<?php echo $cid; ?>"><button class="bbtn viewbtn">VIEW</button></a></td>
              </tr>
            <?php }

          }
          else{
            ?>
            <tr>
              <td colspan="6" style="padding-top: 20px; padding-bottom: 20px;"><span>No data available</span><br><span>Please <a href="farms.php" style="text-decoration: none;color: blue;">Add record</a> on any farm</span></td>
            </tr>
            <?php 
          }



           ?>





            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    .smain{padding-top: 100px; background-color: white;}
    .stable{margin-left: 20px; margin-right: 20px;}
    .stable table{width: 100%;}
    .stable table, .stable th, .stable tr, .stable td{border:solid 1px #b8b7b7;border-collapse: collapse;text-align: center;}
    .stable th{background-color: #38d39f;border:solid 1px white;}
    .stitle{margin-bottom: 20px;}
    .stitle div span{font-size: 23px;font-family: cursive;}
    .bbtn{
    --color: #000000;
    --background-color: #d8d8d8;
    --border-color: darken(#d8d8d8, 7.5%);
    color: var(--color);
    font-family: inherit;
    background-color: var(--background-color);
    padding: 0.6rem 0.9rem;
    border: solid 1px var(--border-color);
    outline: none;
    position: relative;
    border-radius: 0.5rem;
    user-select: none;
    box-shadow: 0 0.2rem 0.4rem rgba(0, 0, 0, 0.4), 0 -0.3rem 0.6rem rgba(0, 0, 0, 0.2) inset;
    transition: box-shadow 64ms ease-out;
    margin-bottom: 0.5rem;
    margin-right: 0.5rem;
    -webkit-appearance: button;
    overflow: visible;
    }
    .viewbtn{
    --color: #ffffff;
    --background-color: #00c853;
    --border-color: #00a243;


    }
  </style>
</div>
</div>





    






  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <script src="../assets/js/plugins/bootstrap-notify.js"></script>

  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
     
      demo.initChartsPages();
    });

window.addEventListener("load", function(){ sortTable(); });

    function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  
  while (switching) {
  
    switching = false;
    rows = table.rows;

    for (i = 1; i < (rows.length - 1); i++) {
 
      shouldSwitch = false;
      
      x = rows[i].getElementsByTagName("TD")[2];
      y = rows[i + 1].getElementsByTagName("TD")[2];
      
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
     
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
  </script>
</body>

</html>
