<?php
$type = $_GET['type'];
$id = $_GET['id'];
$farmid = $_GET['farmid'];
include '../../db/connections.php';
if($type=="tyrone1"){
$sql = "update crop set stat = -1 where crop_id = '$id'";

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
               <div class="check"><b class="" style="color: white;">&#128465;</b></div>
            </div>
            <div class="content">
               <h1>Record deleted</h1>
               <p>Some records that are related on this are also affected</p>
               <a href="../farmmgt.php?farmid=<?php echo $farmid; ?>"><button>Back to Farm page</button></a>
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