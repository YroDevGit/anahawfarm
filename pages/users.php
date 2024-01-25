<?php
session_start();
$_SESSION['active'] = 2;

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Members
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
 
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


</head>

<body class="">


<div class="modalx" id="modalx" style="display: none;">
  <div align="center">
    <div>
      
      <div class="modal-content">
        <div>
         <div>
          <div>
            <form>

              <div>
                <div>
                  <div>
                    
                  </div>
                </div>
              </div>

              

              <div class="for-form">
                <div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add new Member</h5>
              </div>
              <div class="modal-close">
                <div>
                  <div>
                    <span class="close-modal" id="closemodal">X</span>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Anahaw Farmers association">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" required="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="password" class="form-control" placeholder="Email">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="Company" value="Chet">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" value="Faker">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="Melbourne">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="Australia">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Save Profile</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
              </div>

            </form>
          </div>
         </div>
        </div>
      </div>


    </div>
  </div>
</div>



  <div class="wrapper ">
    <?php include 'sidebar.php'; ?>
    <div class="main-panel">
      <!-- Navbar -->
     <?php include 'topbar.php'; ?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          


          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title"> Farmer's association members</h4>
                <p class="card-category"> Here is the members of farmer's association</p>
                <div align="right">
                    <div style="position: absolute;right: 0; top: 0; margin-right: 30px; margin-top: 30px;">
                      <div>
                        <button class="addbtn">Add new member</button>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  

<div class="mg-left">
    <div>
        <div>
            <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011-07-25</td>
                <td>$170,750</td>
            </tr>
               
    </table>
        </div>
    </div>
</div>


 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            
            <div class="credits ml-auto">
              <span class="copyright">
                © <script>
                  document.write(new Date().getFullYear())
                </script>, made <i class="fa fa-heart heart"></i> by YroLeeEmz
              </span>
            </div>
          </div>
        </div>
      </footer>
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

  <link href="tables/stylex.css" rel="stylesheet" />
    <link href="tables/styley.css" rel="stylesheet" />

     <script type="text/javascript" src="tables/jquery.js"></script>
    <script type="text/javascript" src="tables/data.js"></script>
    <script type="text/javascript" src="tables/tab.js"></script>
    <script type="text/javascript">
        $(document).ready(function () { $('#example').DataTable(); });
    </script>
</body>

</html>

<style type="text/css">
  .mg-left{
    margin-left: 10px;
  }
  .addbtn{
    border:solid 1px #38d39f;
    background-color: #38d39f;
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
  }
  .addbtn:hover{
    background-color: #46ff2e;
    border:solid 1px #46ff2e;
  }

  .modalx{
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: rgb(0,0,0,0.5);
    z-index: 99999;
    overflow: all;
  }
  .modal-content{
    width: 80%;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: transparent;
    top: 0;
    bottom: 0;
    margin-top: 50px;
  }

  .modal-close{
    position: absolute;
    top: 0;
    right: 0;
    margin-top: 10px;
    margin-right: 20px;
  }
  .close-modal{
    font-size: 20px;
    color: #ababab;
    cursor: pointer;
  }
  .close-modal:hover{
    color: orange;
  }
</style>


<script type="text/javascript">
  document.getElementById('closemodal').onclick = function(){
    document.getElementById('modalx').style.display = 'none';
  }
</script>

