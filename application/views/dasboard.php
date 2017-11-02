<!DOCTYPE html>
<html lang="en">
<head>
	<title>Commitment Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link rel="stylesheet" media="print, screen" href="css/fonts/fonts-latin-basic.min.css">
	<link rel="stylesheet" media="print, screen" href="css/small.css">
	<link rel="stylesheet" media="print, screen and (min-width: 36.3125em)" href="css/medium.css">
	<link rel="stylesheet" media="print, screen and (min-width: 60em)" href="css/large.css">
	<link rel="stylesheet" media="print" href="css/print.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		var base_url = "<?php echo base_url();?>";
		var page = "<?php echo $page ?>";
		var page_count = "<?php echo count($user); ?>";
	</script>
	<script src="js/dasboard.js"></script>
	<style>
		body
		{
			background: linear-gradient(to top right, #000000 62%, #800000 100%) no-repeat center center fixed;
			background-size:cover;
			font-family: "Nissan Bold",Verdana,Arial,sans-serif!important;
		}
		#counter .count{
			font-family: "Nissan Bold",Verdana,Arial,sans-serif!important;
			display:inline;
		}
		#count-countainer{
			
		}
		.count{
			display:inline;
			height: 190px;
			
		}
		.border-count
		{
			border:2px solid white;width:100px;display:inline;height:100px;margin-left: -50px;
		}
		.ct{
			min-height:200px;
			max-height:200px;
			border:2px solid white;
			font-size:140px;
			font-family: "Nissan Bold",Verdana,Arial,sans-serif!important;
			margin-top:30px;
			margin-left:5px;
			color:white;
			border-radius: 20px;
		}
		.panel-primary:before {
			content: "";
			position: absolute;
			right: 96%;
			top: 25px;
			width: 0;
			height: 0;
			border-top: 0px solid transparent;
			border-right: 26px solid #eee;
			border-bottom: 21px solid transparent;
		}
	</style>
</head>
<body>

	<input type="hidden" class="form-control" id="hdnCount" name='hdnCount' value="0">
	<input type="hidden" class="form-control" id="hdnCount" name='hdnCount' value="1">

	<div class="container text-center" style="margin-bottom:10px;margin-top:10px;">
		<div class="col-sm-3"></div>
		<div class="col-sm-2 ct">
			<span id="1">0</span>
		</div>
		<div class="col-sm-2 ct">
			<span id="2">0</span>
		</div>
		<div class="col-sm-2 ct">
			<span id="3">0</span>
		</div>
		
		<div class="">
			<div class="c_004">
				<div class="heading-group">
					<h2>
						<span></span>
					</h2>
					
				</div>
			</div>
		</div>
	</div>
	
	<?php
		if(!empty($user)){
			echo '<div class="container" id="row-one" style="display:none">';   
			echo '<div class="row">';
			foreach($user as $key => $data)
			{
				$name = $data->UserName;
				if(empty($data->UserName)){
					$name = 'Guest';
				}
				echo '<div class="col-sm-4">';
				echo '<div class="panel panel-primary">';
				echo '<div class="panel-heading">'. $name .'</div>';
				echo '<div class="panel-body">'. $data->Commitment .'</div>';
				echo '</div></div>';
			}
			echo '</div></div>';
		}
	?>
	
	<footer class="container-fixed navbar-fixed-bottom">
		<div class="container" style="padding-bottom:25px;">  
			<button type="button" id="btnRefresh" onclick=GetCommitment() class="pull-right"></button>
		</div>
	</footer>
</body>
</html>
