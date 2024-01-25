<?php
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
   Register
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
      
      <div align="center" style="padding-top: 25px;">
          <div class="col-md-8" align="left">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">RSBSA Enrollment Form</h5>
              </div>
              <div align="right" style="position: absolute;right: 0;">
                <div>
                  <a href="../index.php" class="back"><< Back to homepage</a>
                </div>
              </div>
              <div class="card-body">
                <!-- enctype="multipart/form-data" -->
                <form method="post" action="actions/regmember.php" enctype="multipart/form-data">
                 <div class="row" style="display: none;">
                   <div class="col-md-3">
                     <div class="form-group">
                       <label><input type="radio" name="rstatus" value="new" > New</label>
                       <label style="margin-left: 20px;"><input type="radio" name="rstatus" value="update"> Updating</label>
                     </div>
                   </div>
                 </div>
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First name" required="">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required="">
                      </div>
                    </div>

                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="Middle" class="form-control" placeholder="Middle initial" required="">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>Name Suffix (N/A if none)</label>
                        <input type="text" name="suffix" class="form-control" placeholder="" required="">
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Complete Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Home Address" required="">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Rice area</label>
                        <input type="text" name="Lot" class="form-control" placeholder="Rice Area..." required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 pr-1">
                      <div class="form-group">
                        <label>GENDER</label>
                        <?php getDropdown('gender','form-control','gender','gender') ?>
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>DATE OF BIRTH</label>
                        <input type="date" name="bdate" id="datecal" class="form-control" placeholder="" required="" onchange="calculateAge()">
                      </div>
                    </div>

                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>AGE</label>
                        <input type="number" id="age1" onkeypress="return false" name="age" class="form-control" placeholder="" value="" required="">
                      </div>
                    </div>
                    <div class="col-md-3 pl-1">
                      <div class="form-group">
                        <label>CIVIL STATUS</label>
                        <?php getDropdown('civil_status','form-control','civil','civil') ?>
                      </div>
                    </div>

                  </div>


                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Contact number</label>
                        <input type="text" class="form-control" name="contact" placeholder="Contact number" required="">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>RSBSA Reference No.:</label>
                        <input type="text" class="form-control" name="idnum" placeholder="######" required="">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-groups">
                        <label>Upload valid id photo</label>
                       
                        <input id="getfile" name="idimg" style="outline: none;height: 38px;" type="file" class="form-control" required="" accept="image/*">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>About Me</label>
                        
                        <input type="text" name="about" required="" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>Highest formal education</label>
                        <?php getDropdown('education','form-control','ed','ed') ?>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>username</label>
                        <input type="text" name="uname" class="form-control" placeholder="Enter username" required="" id="username" autocomplete="false">
                        <label id="warn" style="display: none;"></label>
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Password:</label>
                        <input type="password" name="pword" class="form-control" disabled="" required="" id="pass1" onkeyup="checkpw()">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Re-enter password:</label>
                        <input type="password" class="form-control" disabled="" required="" id="pass2" onkeyup="checkpw()">
                        <label id="wpass"></label>
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
                    <div class="update ml-auto mr-auto">
                      <button type="submit" id="subbtn" name="btn" disabled="" class="btn btn-primary btn-round">Save Profile</button>
                    </div>
                  </div>

                  
                </form>
              </div>
            </div>
          </div>

        </div>
<div>
  <div id="getter">
    
  </div>
</div>
          
        </div>
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            
            <div class="credits ml-auto">
              
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
</body>

</html>


<style type="text/css">
  .back{
    font-size: 18px;
    text-decoration: none;
  }
  .back:hover{
    text-decoration: none;
    color: orange;
  }
</style>


<script type="text/javascript">
  
  var btnn = document.getElementById('subbtn');
  var pass1 = document.getElementById('pass1');
  var pass2 = document.getElementById('pass2');
  var warn = document.getElementById('warn');
   var fwarn = document.getElementById('fwarn');

  document.getElementById('username').onkeyup = function(){
    checkUsername();

  }

  function checkUsername(){
    warn.style.display = 'none';
    btnn.disabled = true;
    pass1.disabled = true;
    pass2.disabled = true;
    pass1.value = "";
    pass2.value = "";
    wpass.style.display = 'none';
    var val = document.getElementById('username').value;
    var http = new XMLHttpRequest();
    http.onload = function(){
      document.getElementById('getter').innerHTML = this.responseText;
    }
    http.open("GET","checker.php?uname="+val);
    http.send();
    if(val==""){
      pass1.disabled = true;
      pass2.disabled = true;
      warn.style.display = '';
      warn.innerHTML = "Username is empty";
      warn.style.color = "red";
      
    }
    else{
      warn.style.display = '';
      warn.innerHTML = "Checking the username";
      warn.style.color = "blue";
      setTimeout(nowCheck, 1500);
    }
  }

  function nowCheck(){
    var newval = document.getElementById('chk').value;
    if(newval=="0"){
      pass1.disabled =false;
      pass2.disabled =false;
      warn.style.display = '';
      warn.innerHTML = "<b>Username is valid</b>";
      warn.style.color = "#0bda2e";
    }
    else if(newval=="-1"){
      pass1.disabled = true;
      pass2.disabled = true;
      warn.style.display = '';
      warn.innerHTML = "Username is empty.";
      warn.style.color = "red";
    }
    else{
      pass1.disabled = true;
      pass2.disabled = true;
      warn.style.display = '';
      warn.innerHTML = "Username is already taken.";
      warn.style.color = "red";
    }
  }

  function checkpw(){
  var pass1 = document.getElementById('pass1');
  var pass2 = document.getElementById('pass2');
  var wpass = document.getElementById('wpass');

  if(pass1.value == "" || pass2.value ==  ""){
    wpass.style.display = 'none';
  }
  else{
    if(pass1.value == pass2.value){
    wpass.style.display = '';
    wpass.innerHTML = '<b>Password matched</b>';
    wpass.style.color = "#0bda2e";
    btnn.disabled = false;
    }
    else{
    wpass.style.display = '';
    wpass.innerHTML = 'Password not matched';
    wpass.style.color = "red";
    btnn.disabled = true;
    }
  }


  }


  function calculateAge(){
    var bdate = document.getElementById('datecal').value;
    var xml = new XMLHttpRequest();
    xml.onload = function(){
      document.getElementById('age1').value = this.responseText;
    }
    xml.open("GET","calculate.php?q="+bdate);
    xml.send();
  }

</script>