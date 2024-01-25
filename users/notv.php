<?php
session_start();
$_SESSION['active'] = 1;
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
    Account not verified
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
 
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    

<?php include 'fakesidebar.php'; ?>
    



    <div class="main-panel">
     <?php include 'topbar.php'; ?>
      <div class="content">



        




        <div class="row">
          <div class="col-md-12">
            <div class="card " style="height: 500px;">
              <div class="card-header ">
                <h5 class="card-title">Account not verified &#128274;</h5>
                
              </div>
             
             <dir>
               <div>
                 <p>Hello <strong style="color: green;"><?php echo getFullname($_SESSION['userid']); ?></strong>, sorry to tell you that your account is not yet verified.
                  Our team is busy on pending applications,<br>We will review your form when we are free.<br>
                  <p style="color: gray;">Note: Your access on this site is limited since your account is not verified<br>
                  You can only access to all features when you have a verified account.
                </p>

                  Please Open your account later to check if you are already verified.


                 </p>

                 <p>Thank you for your understanding</p>
                 <p><strong>Super Admin</strong></p>


               </div>
             </dir>
              <div class="card-footer ">
                
                
              </div>
            </div>
          </div>
        </div>



        



      </div>
     
    </div>
  </div>
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
</body>

</html>
