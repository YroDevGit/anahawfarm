

<?php
include "../db/connections.php";
function getCroping($month){
  $total = 0;
  $sql = "";
  $year = getDateF('%Y');
  $sql = "select count(*) from crop where start_date like '%$year-$month%'";
 
  $res = setQuery($sql);

  if($col = getData($res)){
    $total = $col[0];
  }


  return $total;
}

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
   User dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="./assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php
  include 'includes/sidebar.php';
   ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php include "includes/nav.php" ?>
    <!-- End Navbar -->


    <div id="modat" align="center" style="display: none;">
      <div>
        <div class="modat-body">
          <div>
            <div align="right"><label style="font-size: 18px;cursor: pointer;" onclick="document.getElementById('modat').style.display='none';">X</label></div>
            <div>
              <span class="title">Add new variety</span>
            </div>
            <div>
              <form method="post" action="../users/actions/admem.php?action=1">
                <table>
                  <tr>
                    <td align="center">Rice variety</td>
                  </tr>
                  <tr>
                    <td><input type="text" name="rice" required=""></td>
                  </tr>
                  <tr>
                    <td align="center" style="padding-top: 10px;">
                      <button type="submit" name="varbtn" class="savebtn">SAVE</button>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
      #modat{
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        background-color:rgb(0,0,0,0.5);
        z-index: 10000;
        padding-top: 200px;
      }
      .modat-body{
        display: inline-block;
        padding: 20px 20px 20px 20px;
        background-color: white;
        border-radius: 5px;
      }
      .title{
        font-size: 20px;
      }
      .savebtn{
        border-radius: 5px;
        border: solid 1px gray;
      }
    </style>



    <div class="container-fluid py-4">
      


      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Rice variety</h6>
            </div>
            <div style="padding-left: 10px;">
              <button style="border-radius: 5px; border:solid 1px gray;" onclick="document.getElementById('modat').style.display='';">Add new variety</button>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
              
                     
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    $sql = "select * from rice where stat = 0";
                    $res = setQuery($sql);
                    while($colx = getData($res)){

                      $gid = $colx[0];
                      

                     ?>
                      
                      <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="assets/img/rice.png" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $colx[1]; ?></h6>
                            <p class="text-xs text-secondary mb-0"><a href="../users/actions/del.php?q=7&link=none&data=<?php echo $gid; ?>" style="color: red;">Delete</a></p>
                          </div>
                        </div>
                      </td>
                      
                      
                      
                    </tr>

                    <?php

                  }
                     ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php include"includes/footer.php" ?>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Argon Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0 overflow-auto">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active me-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2" data-class="bg-default" onclick="sidebarType(this)">Dark</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="d-flex my-3">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <div class="mt-2 mb-5 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/argon-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/argon-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/argon-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="modax" id="modax" align="center" style="display: none;">
 
      <div class="modax-body">
         <div class="col-md-4">
          <div class="card card-profile">
            <img src="assets/img/bg-profile.jpg" id="imahe" height="500" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="../assets/img/team-2.jpg"  class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
              <div class="d-flex justify-content-between">
                <a href="" class="btn btn-sm btn-info mb-0 d-none d-lg-block" id="ver">VERIFY</a>
                <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i class="ni ni-collection"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block" onclick="document.getElementById('modax').style.display='none';">Cancel</a>
                <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i class="ni ni-email-83"></i></a>
              </div>
            </div>
            <div class="card-body pt-0">
              
              <div class="text-center mt-4">
                <h5>
                  <span id="namef"></span><span class="font-weight-light"></span>
                </h5>
                
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><span id="contf"></span>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><span id="addf"></span>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>

  </div>

  <style type="text/css">
    .modax{
      position: fixed;
      top: 0;
      left: 0;
      background-color: rgb(0,0,0,0.5);
      width: 100%;
    
      z-index: 10000
    }

    .modax-body{
      display: inline-block;
      background-color: white;
      padding: 20px 10px 20px 10px;
      transform: translateY(50px);
      width: 80%;
      height: 50%;
    }
    .col-md-4{
      width: 60%;
    }
  </style>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var jan = <?php echo getCroping('01'); ?>;
    var feb = <?php echo getCroping('02'); ?>;
    var mar = <?php echo getCroping('03'); ?>;
    var apr = <?php echo getCroping('04'); ?>;
    var may = <?php echo getCroping('05'); ?>;
    var jun = <?php echo getCroping('06'); ?>;
    var jul = <?php echo getCroping('07'); ?>;
    var aug = <?php echo getCroping('08'); ?>;
    var sep = <?php echo getCroping('09'); ?>;
    var oct = <?php echo getCroping('10'); ?>;
    var nov = <?php echo getCroping('11'); ?>;
    var dec = <?php echo getCroping('12'); ?>;


    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Jan","Feb","Mar","Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Farm Crops start",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>