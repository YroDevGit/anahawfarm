<?php
session_start();
$_SESSION['active'] = 3;
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
    Incoming activities
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
    

<?php include 'sidebar.php'; ?>
<div class="main-panel">
  <?php include 'topbar.php'; ?>



  <div>
  <div class="smain">
    <div>
      <div>
        
        
<?php include 'calendar.php'; ?>


       
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
   
  </script>
</body>

</html>
