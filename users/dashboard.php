<?php
session_start();
$_SESSION['active'] = 1;
include '../db/connections.php';
$user = $_SESSION['userid'];

function plantedArea($user){
  $sql = "select * from method where user = $user and stat = 0";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col['planted_area'];
  }
  return $ret;
}
function season($user){
  $sql = "select * from method where user = $user and stat = 0";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col['season'];
  }
  return $ret;
}
function plantingProcedure($user){
  $sql = "select * from method where user = $user and stat = 0";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col['procedure'];
  }
  return $ret;
}
function variety($user){
  $sql = "select * from method where user = $user and stat = 0";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col['variety'];
  }
  return $ret;
}

function getProduction($user)
{
  $sql = "select sum(production) from cropp where uzer = $user";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[0];
  }
  return $ret;
}

function getInventory($user,$column)
{
  $sql = "select sum($column) from inventory where user = $user";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[0];
  }
  return $ret;
}
$por = getInventory($user,"p_porsyento");
$tres = getInventory($user,"p_triser");
$ani = getInventory($user,"p_ani");
$consume = getInventory($user,"p_consumo");

$total = $por + $tres + $ani + $consume;


 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard
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
  <input type="hidden" id="uzer" value="<?php echo $user; ?>" name="">
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
    

<?php include 'sidebar1.php'; ?>
    



<div class="yro"  style="">



    <div class="main-panel">
     <?php include 'topbar.php'; ?>
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card1 card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Planted area</p>
                      <p class="card-title"><?php echo plantedArea($user); ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <a href="method.php">
                  <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card1 card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-atom text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Variety</p>
                      <p class="card-title"><?php echo variety($user); ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                 <a href="method.php">
                  <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card1 card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-sun-fog-29 text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Season</p>
                      <p class="card-title"><?php echo season($user); ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                 <a href="method.php">
                  <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card1 card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-world-2 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Planting proceedure</p>
                      <p class="card-title"><?php echo plantingProcedure($user); ?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                 <a href="method.php">
                  <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
                </a>
              </div>
            </div>
          </div>
        </div>


<div class="row">
  <div class="card2">
            <div class="card card2 card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <?php crops($user,'form-control width-small','samp'); ?>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                      
                    


                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                  <div class="stats" id="stats">






                </div>
              </div>
            </div>
          </div>
</div>


        
        
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul style="display: none;">
                <li><a href="#" target="_blank">C</a></li>
                <li><a href="#" target="_blank">Blog</a></li>
                <li><a href="#" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by Y
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>



</div>
<style type="text/css">
  .card1{
    height: 200px;
  }
  .card2{
    width: 100%;
  }
  .width-small{
    width: 290px;
  }
  .card .head{
    padding-top: 3px;
    padding-bottom: 3px;
    background-color: #ffe3cc;
    font-size: 18px;
  }
  .card .body{
    padding-top: 10px;
    padding-bottom: 10px;
  }
</style>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>
<script type="text/javascript">
  function showStats(){
    var val = document.getElementById('cropcb').value;
    var uzer = document.getElementById('uzer').value;
    var xml = new XMLHttpRequest();
    xml.onload = function(){
      document.getElementById('stats').innerHTML = this.responseText;
    }
    xml.open("GET","xml/stats.php?q="+val+"&user="+uzer);
    xml.send();
  }
  window.addEventListener("load",showStats);
  document.getElementById('cropcb').onchange = function(){
    showStats();
  }
</script>

<script type="text/javascript">

</script>