<?php
include '../../db/connections.php';

$get = $_GET['type'];
if($get=="78673d2g7d2"){
if(isset($_POST['addbtn'])){

$id = $_POST['idfield'];
$crop = get('acrop');
$desc = get('adesc');
$date1 = get('date1');
$date2 = get('date2');
$code = getCode();

$numcode = numCodeTR();
$sql = "insert into crop values('$numcode','$id','$crop','$desc','$date1','$date2',0,0,0,'$numcode')";

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
   
   .check i
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
               <div class="check"><i class="" style="color: white;">&#10004;</i></div>
            </div>
            <div class="content">
               <h1>Cropping season added successfully</h1>
               <p>You can now schedule activities on this farm</p>
               <a href="../farmmgt.php?farmid=<?php echo $id; ?>"><button>Back to Farm page</button></a>
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




}


 ?>