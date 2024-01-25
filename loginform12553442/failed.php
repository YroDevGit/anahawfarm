<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div align="center">
	<div>
		<div class="error">
			<div>
				<span class="error-title">Account not found.!</span>
			</div>
			<div class="sub-title">
				<span>Pleas log in again</span>
			</div>
		</div>
	</div>
</div>


</body>
</html>


<style type="text/css">
	.error{
		margin-top:200px;
	}

	.error-title{
		font-size: 24px;
		color: red;
	}

	.sub-title{
		margin-top:10px;
	}
	.sub-title span{
		font-size: 18px;
		color: #38d39f;
	}
</style>

<script type="text/javascript">
	window.onload = function(){
		setTimeout(back, 3000);
	}

	function back(){
		window.location = "login.php";
	}
</script>