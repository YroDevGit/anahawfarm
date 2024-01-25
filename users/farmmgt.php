<?php
session_start();
$_SESSION['xsched'] =1;
$_SESSION['active'] = 2;
include "../db/connections.php";
$farmid = $_GET['farmid'];

$sql = "select * from farm where farm_id = '$farmid'";

$farmname = "";
$desc = "";

$res = setQuery($sql);

if($col = getData($res)){
  $farmname = $col[2];
  $desc = $col[3];
}
//
else{
 // header($headshot);
}






 ?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
 
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="tables/stylex.css" rel="stylesheet" />
    <link href="tables/styley.css" rel="stylesheet" />
</head>
<body style="background: url('../images/bg.jpg')no-repeat;">

<div id="modalx" class="modalx" style="display: none;">
  <div align="center">
    <div>
      
      <div id="modalc" class="modalc">

        <div>
          <div class="for-add">
            <span>Start new cropping season</span>
          </div>
        </div>

        <div>
          <div align="right">
            <div class="forx">
              <span id="addclose">X</span>
            </div>
          </div>
        </div>

        <div>
          <form method="post" action="actions/crop.php?type=78673d2g7d2">
            <input type="hidden" name="idfield" value="<?php echo $farmid; ?>">
            
          <table>
            <tr class="t-row" >
              <td ><label>Cropping season: </label></td>
              <td><input type="text" name="acrop" placeholder="Season name" required=""></td>
            </tr>

            <tr class="t-row">
              <td style="padding-top: 15px;"><label>Description: </label></td>
              <td style="padding-top: 15px;"><input type="text" name="adesc" placeholder="Add Description" required=""></td>
            </tr>
            <tr class="t-row">
              <td style="vertical-align: top;padding-top: 15px;"><label>Start Date: </label></td>
              <td style="padding-top: 15px;"><input type="date" id="date1" name="date1" placeholder="" required="">
                <div align="right" id="divname1">
                   <label style="color: orange;font-size: 11px;font-family: monospace;" id="labelname1">No date selected</label>
                </div>

              </td>
            </tr>
            <tr class="t-row">
              <td style="vertical-align: top;"><label>End date: </label></td>
              <td><input type="date" id="date2" disabled="" name="date2" placeholder="" required="">
                <div align="right" id="divname2">
                   <label style="color: orange;font-size: 11px;font-family: monospace;" id="labelname2">No date selected</label>
                </div>
              </td>
            </tr>

            <tr class="t-row">
              <td><label>Total months: </label></td>
              <td><input style="text-align: right;" type="text" name="" id="totalm" readonly="" required="" placeholder="Total months will automatically appear here." required=""></td>
            </tr>

            <tr class="t-row">
              <td align="right" colspan="2"><button name="addbtn" class="addbtn" type="submit">SAVE</button></td>
              
            </tr>
          </table></form>

          <div>
            <div style="padding-bottom: 20px;">
              
            </div>
          </div>
        </div>
      </div>

      <style type="text/css">
        .t-row td input{font-size: 14px;font-family: cursive;}
      </style>

    </div>
  </div>
</div>



<div>
  <div>
<?php include 'sidebar.php'; ?>

    <div>
      <div class="for-close">
        <a href="farms.php"><span><< Back to previous page</span></a>
      </div>
    </div>
    <div>
      <div class="content">
       

       <div align="center">
         <div>
           <div>
             
            <div>
              <div class="for-name">
                <div><span  class="farmname"><?php echo $farmname; ?></span></div>
                <div class="sub-title"><small><?php echo $desc; ?></small></div>
              </div>
            </div>


            <div>
              <div class="active">
                <div class="ac-head">
                  <span>Active Season</span>
                </div>

                <div class="ac-body">
                  <?php
                  $sql = "select * from crop where farm_id  = '$farmid' and stat = 0 and status =0";
                  
                  $rz = setQuery($sql);
                  include 'actions/functions.php';

                  if($coll = getData($rz)){
                    $cropid = $coll[0];
                    $xfname = $coll[2];
                    $start = getDateName($coll[4]);

                    $coder = $coll[9];
                    $end = getDateName($coll[5]);

                    $rmonth = getRange($coll[4],$coll[5]);
                    $hectar = getFarmInfo($farmid,4);
                    $fields = getFarmInfo($farmid,5);


                    $s = $coll[4];
                    $e = $coll[5];
                    $today = today();

                    $textx = "";
                    $collor = "";

                    if($today<$s){
                      $textx = "PENDING";
                      $collor = "#cfcece";
                    }
                    else{
                      if($today>$e){
                        $textx = "DELAYED";
                        $collor = "#ee9090";

                      }
                      else{
                        $textx = "ON GOING";
                        $collor = "#aae6ee";
                      }
                    }



                    ?>

                  

                    <div align="center" style="">
                      <div>
                        <div class="card">
                          
                          <div class="main-row">
                            <div>
                              <div class="for-title">
                                <span><?php echo $xfname; ?></span>
                              </div>
                              <div class="for-actions">
                                <a href="" class="action"><label><span class="reverse">&#9998;</span> Edit</label></a> <a href="actions/delcrop.php?type=tyrone1&id=<?php echo $cropid;?>&farmid=<?php echo $farmid; ?>" onclick="return confirm('Are you sure to delete this record?\n\nWarning: All records related on this will also be affected.')" class="action"><label>&#128465;<span></span> Delete</label></a>
                              </div>
                            </div>
                          </div>


                          <div>
                            <div>
                              <div class="rowx">
                                <span class="span"><?php echo $start; ?></span>
                                <hr>
                                <span class="tiny">Start date</span>
                              </div>
                            </div>
                          </div>

                          <div>
                            <div>
                              <div class="rowx">
                                <span class="span"><?php echo $end; ?></span>
                                <hr>
                                <span class="tiny">End date</span>
                              </div>
                            </div>
                          </div>

                          <div>
                            <div>
                              <div class="rowx">
                                <span class="span"><?php echo $rmonth; ?></span>
                                <hr>
                                <span class="tiny">Total months</span>
                              </div>
                            </div>
                          </div>


                          <div>
                            <div>
                              <div class="rowx">
                                
                                <button class="statbtn" style="width: 90%;font-size: 16px; font-weight: 900; font-family: cursive; background-color: <?php echo $collor; ?>;color: black; border:solid 1px <?php echo $collor; ?>;"><?php echo $textx; ?></button>
                              </div>
                            </div>
                          </div>


                          <div>
                            <div>
                              <div class="rowx">
                                
                                <a href="managefarm.php?farmid=<?php echo $farmid; ?>&cropid=<?php echo $cropid; ?>&code=<?php echo $coder; ?>"><button class="statbtn openbtn">OPEN</button></a>
                              </div>
                            </div>
                          </div>


                          

                          <div>
                            <div>
                              
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>


                    <?php
                  }
                  else{
                    ?>
                    <div>
                      <div class="no-active">
                        <label >Farm not active</label>

                        <div class="add-one">
                          <button onclick="document.getElementById('modalx').style.display = '';">START NEW CROPPING SEASON</button>
                        </div>
                      </div>
                    </div>
                    <?php
                  }

                   ?>
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
</body>
</html>


<style type="text/css">
  .content{
    margin-top: 30px;
  }
  .for-name{
    margin-top: 20px;
    margin-bottom: 15px;
  }
  .farmname{
    font-size: 22px;
    color: #1b32de;
  }
  .ac-head{
    margin-bottom: 15px;
    background-color: #b8f5d8;
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .ac-head span{
    font-size: 18px;

  }
  .active{
    border:solid 1px #cfcfcf;
    padding-bottom: 15px;
    background-color: rgb(255,255,255,0.7);
  }
  .ac-bod{
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .no-active{
    padding-top: 10px;
    padding-bottom: 20px;
  }
  .no-active label{
    color:#a6a6a6;
    font-size: 17px;
  }
  .add-one{
    margin-top: 10px;
  }
  .add-one button{
    background-color: #38d39f;
    border:solid 1px #38d39f;
    border-radius: 5px;
    height: 30px;
    padding-left: 10px;
    padding-right: 10px;
    cursor: pointer;
  }
  .add-one button:hover{
    background-color: orange;
  }
  .for-close{
    position: absolute;
    left: 10;
    margin-left: 10px;

  }
  .for-close a{
    text-decoration: none;
  }
  .for-close a span{
    color: #38d39f;
    text-decoration: none;
    font-size: 18px;
  }
  .for-close a span:hover{color:orange;}

  .modalx{
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: black;
    background-color: rgb(0,0,0,0.5);
    z-index: 999;
  }
  .modalc{
    width: 50%;
    height: 50%;
    background-color: white;
    margin-top:50px;
    border-radius: 5px;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .t-row td{
    padding-top: 5px;
    padding-bottom: 5px;
    padding-left: 10px;
    padding-right: 10px;
  }
  .t-row td input{
    width:  350px;
    border:solid 1px #bdbdbd;
    height: 30px;
    border-radius: 5px;
    outline: none;
  }
  .t-row td label{
    color: #9f9d9d;
  }
  .for-add{
    margin-top: 30px;
    margin-bottom: 30px;
  }
  .for-add span{
    font-size: 20px;
    font-family: monospace;
  }
  .forx{
   float: right;
   margin-top: -88px;
   margin-right: 15px;
  }
  .forx span{
    font-size: 25px;
    font-family: monospace;
    color: #adadad;
    cursor: pointer;
    user-select: none;
  } 
  .forx span:hover{color:orange;}

  .addbtn{
    width: 100px;
    height: 30px;
    border-radius: 5px;
    background-color: #38d39f;
    border:solid 1px #38d39f;
    cursor: pointer;
  }
  .addbtn:hover{
    background-color: orange;
  }
  #labelname1, #labelname2{
    font-size: 13px;
    font-family: cursive;
  }

  .card{
    margin-top: 10px;
    border:solid 5px black;
    border-radius: 5px;
    width: 40%;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: black;
  }
  hr{
    width: 60%; color: #c7c7c7;background-color: #c7c7c7;
  }
  .for-title{
    padding-bottom: 15px;
  }
  .for-title span{
    font-size: 18px;
    font-family: cursive;
    font-weight: 900;
    color: white;
  }
  .main-row{
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: black;
  }
  .rowx{
    border-bottom: 5px black solid;
    padding-top: 15px;
    padding-bottom: 15px;
    background-color: white;
  }
  .rowx .span{
    font-size: 18px;
  }
  .tiny{
    color:#a8a4a4;
    font-size: 13px;
  }
  .statbtn{
    border-radius: 5px;
    height: 35px;
    width: 200px;
    border:solid 1px #dedede;
  }

  .openbtn{
    background-color: #7ff0bb;
    cursor: pointer;
  }
  .openbtn:hover{
    background-color: orange;
  }
  .action{
    text-decoration: none;
    margin-left: 10px;
    margin-right: 10px;
  }
  .action label{
    color: white;
    font-size: 14px;
    cursor: pointer;
    transition: linear 0.5;

  }
  .reverse{
    display: inline-block;
  transform: scaleX(-1);
  }
  .action label:hover{
    color: red;
    font-weight: 900;
  }
</style>

<script type="text/javascript">
  window.onload = function(){
    setDate();
  }

  function setDate(){
    //
  }

  function resetTotal(){
    document.getElementById('totalm').value="";
  }

  document.getElementById('addclose').onclick = function(){
    document.getElementById('modalx').style.display = 'none';
  }

  var date1 = document.getElementById('date1');
  var date2 = document.getElementById('date2');
  var lb1 = document.getElementById('labelname1');
  var lb2 = document.getElementById('labelname2');


  function reset(){
    lb1.innerHTML= "No date selected";
    lb2.innerHTML= "No date selected";
    lb1.style.color = 'orange';
    lb2.style.color = 'orange';
  }



  date1.onclick = function(){
    this.showPicker();
  }
  date2.onclick = function(){
    this.showPicker();
  }

  date1.onchange = function(){
    resetTotal();
    var val1 = date1.value;
    date2.value= "";

    reset();


    if(val1==""){
      date2.disabled = true;
      reset();

    }
    else{
      date2.disabled = false;
      date2.min = val1;

      setTimeout(setDate1, 1000);
    }
  }


   function setDate1(){
    var val1 = date1.value;
    lb1.style.color = 'blue';
    var htp = new XMLHttpRequest();
    htp.onload = function(){

      document.getElementById('labelname1').innerHTML = this.responseText;
    }

    htp.open("GET","xml/datenames.php?q1="+val1+"&type=1&q2=ashd32872db");
    htp.send();
  }


  date2.onchange = function(){
    resetTotal();
    val2 = date2.value;
    if(val2==""){

    lb2.innerHTML= "No date selected";
  
    lb2.style.color = 'orange';
    }
    else{

      setTimeout(setDate2, 1000);

    }


  }




  function setDate2(){

    lb2.style.color = 'blue';
    var val2 = date2.value;
    var htp = new XMLHttpRequest();
    htp.onload = function(){

      document.getElementById('labelname2').innerHTML = this.responseText;
    }

    htp.open("GET","xml/datenames.php?q1="+val2+"&type=3&q2=213123124&q2="+date1.value);
    htp.send();
    document.getElementById('totalm').placeholder = "Loading....";
    setTimeout(getRange,1000);
  }


  function getRange(){
    v1 = date1.value;
    v2 = date2.value;
    var xml = new XMLHttpRequest();
    xml.onload = function(){
      document.getElementById('totalm').value = this.responseText;
    }
    xml.open("GET","xml/datenames.php?q1="+v1+"&q2="+v2+"&type=2");
    xml.send();
  }

</script>