

<?php
session_start();
$_SESSION['active'] = 2;
$uid = $_SESSION['userid'];

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
   Farms
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


<div class="modalx" id="modalx" style="display:none;">
  <div align="center">
    <div>
      
      <div class="modal-content">
        <div>
         <div>
          <div>
          

              <div>
                <div>
                  <div>
                    
                  </div>
                </div>
              </div>

              

              <div class="for-form">
                <div class="col-md-8" align="left">
            <div class="card card-user" >
              <div class="card-header">
                <h5 class="card-title">Add new farm</h5>
              </div>
              <div align="right" style="position: absolute;right: 0;margin-right: 20px;margin-top: 10px;">
                <div>
                  <span class="close-modal" id="closemod">X</span>
                </div>
              </div>
              <div class="card-body">
                
                
                <form method="post" action="actions/addfarm.php" >
                 <input type="hidden" name="uid" value=<?php echo $uid; ?>>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Farm name</label>
                        <input type="text" name="farm" class="form-control" placeholder="Enter farm name" required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pl-1">
                      <div class="form-groups">
                        <label>Farm image/photo</label>
                       
                        <input id="getfile" name="fimg" disabled="" style="outline: none;height: 45px;padding-top: 9px;" type="file" class="form-control"  accept="image/*">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Hectar</label>
                        <input type="number" class="form-control" name="hectare" placeholder="Area of the farm in hectare" required="">
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Fields</label>
                        <input type="number" class="form-control" name="fields" placeholder="" required="">
                      </div>
                    </div>
                    
                    
                  </div>

                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Farm description/location/address</label>
                        <textarea class="form-control textarea" name="desc" placeholder="Tell us a bit about this farm" required=""></textarea>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label id="genwarn">Note: you can't submit the form unless you have completed all the fields</label>
                        
                      </div>
                    </div>
                  </div>

                  <div class="row" style="margin-bottom: 40px;">
                    <div class="update ml-auto mr-auto" align="right">
                      <button type="submit" id="subbtn" name="btn"  class="btn btn-primary btn-round">Save Data</button>
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
            <div class="card card-plain" style="padding-bottom: 30px;">
              <div class="card-header">
                <h4 class="card-title"> My farms</h4>
                <p class="card-category"> Here is the list of your farms</p>
                
                <div align="right">
                  <div>
                    <div style="">
                      <div style="float: left;">
                        
                        <div>
                          <input title="search for farm name, farm code, description" class="searchtf" type="text" id="searchbar" name="" placeholder="Search farm"><a href="quest.php?id=d26gd2xc252&type=324771jda66d2vb2&guee=n8201882&quiid=<?php echo $uid; ?>&hack=8399&x=tyroneleeemz" title="I can't remember what to find" style="text-decoration: none;"><span style="border:solid 1px gray; border-radius: 50%; padding: 5px; margin-left: 3px;">&#10067;</span></a>
                        </div>
                        
                        <div align="left" style="margin-top: 6px;">
                          <label class="radio1"><input id="radio1" type="radio" name="abcde" checked="" value="1" onclick="searchNow()">All</label>
                          <label class="radio1"><input id="radio2" type="radio" name="abcde" value="2" onclick="searchNow()">Active</label>
                          <label class="radio1"><input id="radio3" type="radio" name="abcde" value="3" onclick="searchNow()">Inactive</label>
                          <style type="text/css">
                            .radio1{cursor: pointer;margin-right: 10px;}
                            .radio1{font-weight: 900;}
                          </style>
                        </div>
                      </div>
                      <div align="right">
                      <button class="addbtn" id="addbtn">Add new farm</button>
                    </div>
                    </div>
                  </div>
                </div>

                <div style="margin-top: 60px;">
                  <div id="tobesettle">
                    
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
                </script>, made <i class="fa fa-heart heart"></i>
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
    margin-top: 5px;
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
  .searchtf{
    border-radius: 5px;
    border:solid 1px #c3c1c1;
    outline: none;
    width: 260px;
    height: 35px;
  }
</style>


<script type="text/javascript">
  document.getElementById('closemod').onclick = function(){
    document.getElementById('modalx').style.display = 'none';
  }

  document.getElementById('pclose').onclick = function(){
    document.getElementById('popupx').style.display = 'none';
  }

  document.getElementById('addbtn').onclick = function(){
    document.getElementById('modalx').style.display = '';
  }


  window.addEventListener("load",searchNow());


  document.getElementById('searchbar').onkeyup = function(){
    searchNow();
  }



  function searchNow(){
    
    var rad1 = document.getElementById('radio1');
    var rad2 = document.getElementById('radio2');
    var rad3 = document.getElementById('radio3');
    var rad =0;
    if(rad1.checked){
      rad = 0;
    }
    if(rad2.checked){
      rad = 1;
    }
    if(rad3.checked){
      rad=2;
    }

   
    var searchtext = document.getElementById('searchbar').value;
    var htp = new XMLHttpRequest();
    htp.onload = function(){
      document.getElementById('tobesettle').innerHTML = this.responseText;
    }
    htp.open("GET","farmstbl.php?my_id=662662&qtype=772hd2gd2&farmname="+searchtext+"&type=ad62gd6623gd&rad="+rad);
    htp.send();
  }

</script>

<script type="text/javascript">
  
</script>

