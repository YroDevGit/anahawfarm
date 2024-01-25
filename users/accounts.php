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
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" id="mfirst" name="mfirst" class="form-control" placeholder="" >
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" id="mlast" name="mlast" class="form-control" placeholder="" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" id="maddress" class="form-control"  >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Contact number</label>
                        <input type="text" id="mcontact" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>ID number</label>
                        <input type="text" id="mid" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Status</label>
                        <input type="text" id="mstatus" class="form-control" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea id="mabout" class="form-control textarea"></textarea>
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


<div align="center" id="popupx" style="display: none;">
  <div>
    <div>
      
      <div id="popup-content">
        <div>
            <div class="popup-close">
              <div>
                <span class="p-close" id="pclose">X</span>
              </div>
            </div>

            <div>
              <div style="margin-bottom: 15px;">
                <span style="font-size: 19px;">Review User Profile</span>
              </div>
            </div>


            <div>
              <div>
                <table>
                  <tr class="prow">
                    <td><span class="pfield">Fullname: </span></td>
                    <td><span id="ffull" class="pfield"></span></td>
                  </tr>

                  <tr class="prow">
                    <td><span class="pfield">Contact: </span></td>
                    <td><span id="fcontact" class="pfield"></span></td>
                  </tr>

                  <tr class="prow">
                    <td><span class="pfield">Address: </span></td>
                    <td><span id="faddress" class="pfield" style="word-wrap: break-word;"></span></td>
                  </tr>

                  <tr char="prow">
                    <td colspan="2" align="center" style="padding-top: 10px; padding-bottom: 10px;">
                      <img id="setimg" src="" height="400" width="500">
                    </td>
                  </tr>

                  <tr class="prow">
                    <td><span class="pfield">Id number: </span></td>
                    <td align="right"><span id="fid" class="pfield"></span></td>
                  </tr>

                  <tr class="prow">
                     <td align="left" style="padding-top:10px;padding-bottom: 15px;">
                      <form>
                        <input type="hidden" name="userid" id="userid">
                        <button type="submit" class="addbtn" style="width: 100px; background-color: #a575ff;">Block</button>
                      </form>
                    </td>
                    <td align="right" style="padding-top:10px;padding-bottom: 15px;">
                      
                        <input type="hidden" name="userid" id="userid">
                        <a href="" id="verbtn" onclick="return confirm('Hello:\nAre you sure to verify this account?')"><button type="submit" class="addbtn" style="width: 100px;">Verify</button></a>
                     
                    </td>
                  </tr>

                </table>
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
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  

<div class="mg-left">
    <div>
        <div>
            <table id="example" class="table" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Contact</th>
               
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

          <?php
          $sql = "select * from users where stat =0 and user_type=2";

          $res = setQuery($sql);

          while($rows = getData($res)){
            $col0 = $rows[0];
            $col1 = $rows[1];
            $col2 = $rows[2];
            $col3 = $rows[3];
            $act = $rows[11];

            $actbtn = "";
            


           ?>

            <tr>
              <input type="hidden" name="" id="xfn" value="<?php echo $col1; ?>" >
              <input type="hidden" name="" id="xln" value="<?php echo $col2; ?>" >
              <input type="hidden" name="" id="xfull" value="<?php echo $col1.' '.$col2; ?>" >
              <input type="hidden" name="" id="xcont" value="<?php echo $col3; ?>" >
              <input type="hidden" name="" id="xadd" value="<?php echo $rows[4]; ?>" >
              <input type="hidden" name="" id="ximgt" value="<?php echo $rows[8]; ?>" >
              <input type="hidden" name="" id="ximg" value="<?php echo '../files/'.$rows[9]; ?>" >
              <input type="hidden" name="" id="xabout" value="<?php echo $rows[5]; ?>" >
              <input type="hidden" name="" id="xstat" value="<?php echo $rows[11]; ?>" >
              <input type="hidden" name="" id="xid" value="<?php echo $rows[0]; ?>" >
                <td><?php echo "$col0"; ?></td>
                <td><?php echo "$col1"; ?></td>
                <td><?php echo $col2; ?></td>
                <td><?php echo $rows[3]; ?></td>
                <td>
                 
                  <?php 
                if($act==0){
                  ?>
                  <button style='background-color:#fd75ff;  border:solid 1px #fd75ff;width:120px;border-radius: 5px;' onclick="

                 var val1 = document.getElementById('xfull').value;
                 var val2 = document.getElementById('xcont').value;
                 var val3 = document.getElementById('xadd').value;
                 var myimg = document.getElementById('ximg').value;
                 var val4 = document.getElementById('ximgt').value;
                 var valid = document.getElementById('xid').value;

                  document.getElementById('ffull').innerHTML = val1;
                  document.getElementById('fcontact').innerHTML = val2;
                  document.getElementById('faddress').innerHTML = val3;
                  document.getElementById('setimg').src = myimg;
                  document.getElementById('fid').innerHTML = val4;
                  document.getElementById('userid').value = valid;
                  document.getElementById('verbtn').href = 'actions/verify.php?valid=662353252815&id=7727cb2c263&qid='+valid+'&tyroneleeemz=true&secured=28nc263w73&xtype=v';


                  document.getElementById('popupx').style.display = '';
                  

                  ">Not verified</button>
                  <?php
                }
                else{
                  ?>
                  <button style='background-color:#38d39f; border:solid 1px #38d39f;width:120px;border-radius:5px;' title="">Verified</button>
                  <?php
                }

                ?></td>
                <td><button class="act-det act-btn" onclick="

                document.getElementById('modalx').style.display = '';
                document.getElementById('mfirst').value = document.getElementById('xfn').value;
                document.getElementById('mlast').value = document.getElementById('xln').value;
                document.getElementById('mcontact').value = document.getElementById('xcont').value;
                document.getElementById('maddress').value = document.getElementById('xadd').value;
                document.getElementById('mabout').value = document.getElementById('xabout').value;
                document.getElementById('mid').value = document.getElementById('ximgt').value;

                var stt = document.getElementById('xstat').value;
                var stst = '';
                if(stt=='0'){
                  stst = 'Not verified';
                  document.getElementById('mstatus').style.color = 'gray';

                }
                else{
                  stst = 'Verified';
                  document.getElementById('mstatus').style.color = 'green';
                }

                document.getElementById('mstatus').value = stst;


                ">Details</button><a href=""><button class="act-del act-btn">Delete</button></a></td>
            </tr>


          <?php } ?>
            
               
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

  #popupx{
    width: 100%;
    height: 100%;
    position: absolute;
    background-color: rgb(0,0,0,0.5);
    z-index: 99999;
    overflow: all;
  }

  #popup-content{
    width: 60%;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: white;
    margin-top: 10px;
    padding-top: 30px;
    padding-bottom: 30px;
    border-radius: 5px;
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
  .act-btn{
    width:100px;
    margin-left: 2px;
    margin-right: 2px;
    border-radius: 5px;
  }
  .act-del{
    background-color: #ef8157;
    border:solid 1px #ef8157; 
  }

  .act-det{
    background-color: #8bd2e9;
    border:solid 1px #8bd2e9;
  }
  .popup-close{
    float: right;
    margin-right: 30px;
  }
  .p-close{
    font-size: 25px;
    font-family: monospace;
    color: #ababab;
    cursor:pointer;
  }
  .p-close:hover{
    color: orange;
  }
  .pfield{
    color: gray;
    font-size: 16px;
    font-family: monospace;
  }
  th{

  }
  .prow td{
    padding-top: 2px;
    padding-bottom: 2px;
    padding-left: 5px;
    padding-right: 5px;
  }
</style>


<script type="text/javascript">
  document.getElementById('closemodal').onclick = function(){
    document.getElementById('modalx').style.display = 'none';
  }

  document.getElementById('pclose').onclick = function(){
    document.getElementById('popupx').style.display = 'none';
  }
</script>

