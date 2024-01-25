<?php
session_start();
$_SESSION['active'] = 70;
$_SESSION['xsched'] = 3;
$user = $_SESSION['userid'];
include '../db/connections.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<?php
include 'newstyle.css';
 ?>
    
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Sales
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
 
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">


<div id="modals" style="display: none;">
  <div class="modals" align="center">
    <div>
      
      <div class="mobody">
        <div>
          <div>

            <div class="fclose" style="float: right;">
              <div align="right">
                <span title="close the modal" onclick="document.getElementById('modals').style.display='none';">X</span>
              </div>
            </div>

            <div>
              <div class="titlefield">
                <span>Sales</span>
              </div>
            </div>

            
              
              <table>
                <form method="post" action="actions/admem.php?action=1">
                <tr>
                <td class="formfield"><label>Crop: </label></td>
                <td class="formfield"><?php crops($user,'memf','crop'); ?></td>
                </tr>
                <tr>
                <td class="formfield"><label>Rice Variety: </label></td>
                <td class="formfield"><?php echo rice($user,"memf","variety"); ?></td>
                </tr>
               
                <tr>
                <td class="formfield"><label>Sack weight: </label></td>
                <td class="formfield"><input class="memf" id="weight" onkeyup="getTotal()" type="text" name="weight" ></td>
                </tr>
              
                <tr>
                <td class="formfield"><label>Price per kilo: </label></td>
                <td class="formfield"><input class="memf" type="text" id="price" onkeyup="getTotal()" name="price" ></td>
                </tr>

                 <tr>
                <td class="formfield"><label>Sack sold: </label></td>
                <td class="formfield"><input class="memf" type="number" name="sack" id="sacks" min="1" onchange="getTotal()" onkeyup="getTotal()" required=""></td>
                </tr>
                
                <tr>
                <td class="formfield"><label>Total price: </label></td>
                <td class="formfield"><input class="memf" type="text" id="showTotal" name="total" ></td>
                </tr>

                <tr>
                <td class="formfield"><label>Name of customer: </label></td>
                <td class="formfield"><input class="memf" type="text" name="customer" ></td>
                </tr>
               
                <tr>
                  <td colspan="2" align="right" class="formfield pad5"><button name="sales" type="submit">Save</button></td>
                </tr>
              </form>
              </table>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<style type="text/css">
  .modals{
    position:fixed;
    z-index: 9990;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgb(0,0,0,0.5);
    padding-top: 50px;
  }
  .modals *{
    user-select: none;
  }
  .mobody{
    background-color: white;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 25px;
  }
  .formfield button{
    width: 120px;
    background-color:#38d39f;
    border:solid 1px #0dbd0a;
    border-radius: 5px;
    cursor: pointer;
  }
  .pad5{
    padding-top: 5px;
    padding-bottom: 5px;
  }
 .memf{
  width: 300px;
 }
 .formfield{
  padding-left: 10px;
  padding-right: 10px;
 }
 .titlefield{
  padding-top: 15px;
  padding-bottom: 30px;
 }
 .titlefield span{
  font-size: 18px;
  text-transform: uppercase;
 }

 .fclose div span{
  font-size: 23px;
  cursor: pointer;
  color: #969696;
  margin-right:5px;
 }
 .fclose div span:hover{color: orange;}
</style>





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
  <div class="smain" style="background-color: white;">
    <div>
      <div>
        
        



        <div>
          <div class="stable">
        <div class="stitle">
          <div style="margin-bottom: 10px;">
            <span>Sales management </span>
          </div>

          <div style="float: left;">
            <div>
              <input style="display: none;" type="search" name="" class="searchfield" id="search" placeholder="Search resource here..."  oninput="search()">
            </div>
          </div>
          <div style="display: flex; float: right;padding-bottom: 10px; background-color: white;">
            <?php
              if($_SESSION['userole']!=2){
                ?>
                  <button onclick="document.getElementById('modals').style.display='';" class="ybtn main-add no-border">Add sales</button>
                <?php
              }
              else{
                echo "<b style='padding-bottom:10px;'>.</b>";
              }
             ?>
          </div>

        </div>

        <div style="margin-top: 10px;">
        <div id="inserhere">
        </div>
        </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">

  .searchfield{border:solid 1px #9e9e9e;width: 300px;outline: none;border:solid 1px #d4d4d4; height: 30px;}
  .spaces{margin-left: 2px;margin-right: 2px;}
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
    .main-panel{
      background-color: white;
    }

    .main-add{width: 200px; height: 35px;}
    .ybtn{
      border-radius:5px;
      position: relative;
      z-index: 1;
      box-shadow: 4px 4px #d4d4d4;
    }

    .main-add:active{
      transform: translate(+3px,+3px);
      box-shadow: 1px 1px #d4d4d4;
    }

    .no-border{border:solid 1px #c6c3c3;}

    .main-add:before{
      content: '';
      position: absolute;
      background-image: linear-gradient(to right,#f40bc1,#f4ec0b, #f4aa0b ,#f4ec0b, #f40bc1);
      top: 50%;
      bottom: 50%;
      right: 50%;
      left: 50%;
      transition: 0.8s;
      z-index: -1;
    }

    .main-add:hover:before{
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
    }
    .main-add:focus:before{
      top: 0;
      bottom: 0;
      right: 0;
      left: 0;
    }

    .tablebtn{
      width: 80px;
    }


  </style>
</div>
</div>


<script type="text/javascript">
  
  window.addEventListener('load',search);


  function search(){
    var val = document.getElementById('search').value;
    var userid = <?php echo $_SESSION['userid']; ?>;
    var xml = new XMLHttpRequest();
    xml.onload = function(){
      document.getElementById('inserhere').innerHTML = this.responseText;
    }
    xml.open("GET","salestbl.php?value="+val+"&userid="+userid);
    xml.send();
  }


  function displayModal(){
    document.getElementById('modals').style.display = '';
  }

</script>




    






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

//window.addEventListener("load", function(){ sortTable(); });

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

<script type="text/javascript">
  function getTotal(){
    var weight = parseInt(document.getElementById('weight').value);
    var price = parseInt(document.getElementById('price').value);
    var sacks = parseInt(document.getElementById('sacks').value);
    var total = (weight * price) * sacks;
    document.getElementById('showTotal').value = total;
  }
</script>
