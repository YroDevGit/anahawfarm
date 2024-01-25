<?php

include '../../db/connections.php';


if(isset($_POST['subx'])){
  session_start();
  $numcode = numCodeTR();
  $idfield = $_POST['idfield'];
  $crop = $_POST['cidfield'];
  $title = strip($_POST['title']);
  $amount = strip($_POST['amount']);
  $date = strip($_POST['date']);
  $userx = $_SESSION['userid'];

  $sql = "insert into expenses values('$numcode','$idfield','$crop','$title','$amount','$date',0,0,$userx)";

  if(setQuery($sql)){
    ?>
    <div align="center">
      <div style="margin-top: 150px;">
        <div>
          <div>
            <img src="../../images/loading.gif" id="img" height="300" width="300">
          </div>
          <div style="margin-top: 20px;">
            <span style="font-size: 30px;" id="loading">Expenses added</span>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      var count = 0;
      function load(){
        if(count<10){
          document.getElementById('loading').innerHTML = count+"%";
        }
        else if(count<40){
          document.getElementById('loading').innerHTML = count+"% Connecting to database...";
        }
        else if (count<60){
          document.getElementById('loading').innerHTML = count+"% Connected ✔️";
        }
        else if(count<99){
          document.getElementById('loading').innerHTML = count+"% Inserting data";
        }
        setTimeout(start,30);
      }

      function start(){
        if(count==100){
          document.getElementById('img').src ="../../images/148767.png";
          document.getElementById('loading').innerHTML = "Expenses added";
          setTimeout(function(){window.location.href="../managefarm.php?farmid=<?php echo $idfield; ?>&cropid=<?php echo $crop; ?>"},2000);
        }
        else{
          count +=1;
          load();
        }
        
      }
      load();
    </script>
    <?php
  }

}



if(isset($_POST['addbtn'])){
$idfield = $_POST['idfield'];
$title = strip($_POST['title']);
$dsc = strip($_POST['dsc']);
$date = strip($_POST['date']);
$crop = strip($_POST['cidfield']);
$numcode = numCodeTR();

$sql = "insert into scheduler values('$numcode','$idfield','$title','$dsc','$date','0','0','$crop')";
//echo "$sql";
if(setQuery($sql)){

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Added successful </title>

	<style type="text/css">

    body
    {
        background:#f2f2f2;
    }

    .payment
	{
		border:1px solid #f2f2f2;
		height:280px;
        border-radius:20px;
        background:#fff;
	}
   .payment_header
   {
	   background:#38d39f;
	   padding:20px;
       border-radius:20px 20px 0px 0px;
	   
   }
   
   .check
   {
	   margin:0px auto;
	   width:50px;
	   height:50px;
	   border-radius:100%;
	   background:#fff;
	   text-align:center;
	   background-color: black;
   }
   
   .check b
   {
	   vertical-align:middle;
	   line-height:50px;
	   font-size:30px;

   }

    .content 
    {
        text-align:center;
    }

    .content  h1
    {
        font-size:25px;
        padding-top:25px;
    }

    .content a button
    {
    	border:1px #38d39f solid;
        width:200px;
        height:35px;
        color:#fff;
        border-radius:30px;
        padding:5px 10px;
        background:#38d39f;
        transition:all ease-in-out 0.3s;
        cursor: pointer;
        transition: linear 0.5;
    }

    .content a button:hover
    {
        text-decoration:none;
        background:#000;
    }
		
	.video_ad
		{
			display: inline-block;
			width: 48%;
			margin-top: 20px;
			margin-left: 1%;
		}
   
	</style>
	
</head>

<body>
   <div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto mt-5">
         <div class="payment">
            <div class="payment_header">
               <div class="check"><b class="" style="color: white;">&#10004;</b></div>
            </div>
            <div class="content">
               <h1>Schedule added</h1>
               <p>We will notify you on that exact date, Thank you</p>
               <a href="../managefarm.php?farmid=<?php echo $idfield; ?>&cropid=<?php echo $crop; ?>"><button>Back to previous page</button></a>
            </div>
            
         </div>
      </div>
   </div>
</div>
	
   
   
</body>
</html>

<?php


}

}


 ?>