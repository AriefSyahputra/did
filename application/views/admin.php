<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="version" content="9b10e">
	<meta name="geo.country" content="ID">

	<link rel="stylesheet" media="print, screen" href="css/fonts/fonts-latin-basic.min.css">
	<link rel="stylesheet" media="print, screen" href="css/small.css">
	<link rel="stylesheet" media="print, screen and (min-width: 36.3125em)" href="css/medium.css">
	<link rel="stylesheet" media="print, screen and (min-width: 60em)" href="css/large.css">
	<link rel="stylesheet" media="print" href="css/print.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		var base_url = "<?php echo base_url();?>";
	</script>	
	<script src="js/admin.js"></script>
	
	<style>
		#camera,#image-file{
			margin-top: 15px;
			margin-bottom: 5px;
			box-shadow: 0 0 0 0.1428571429em #eee, inset 0 0.1111111111em 0.2222222222em -0.0555555556em rgba(0,0,0,.15);
		}
		#btnSubmit, .btn-custom{
			width: 100px;
			background-color: #c3002f;
			padding: .8571428571em 45px .8571428571em 20px;
			color: white;
			margin-top: 5px;
			border: none;
			text-decoration: none;
		}
		.submit-form{
			margin-top: 20px;
			margin-bottom: 20px;
		}
		
		.form-group-container{
			margin-bottom: 10px;
		}
		select{
			width: 70%;
			border: 1px solid #d2d2d2;
			border-radius: .1666666667em;
			box-shadow: 0 0 0 0.1428571429em #eee, inset 0 0.1111111111em 0.2222222222em -0.0555555556em rgba(0,0,0,.15);
			line-height: normal;
			margin-bottom: -.0555555556em;
			padding: 0.611111em 8px 0.95556em;
			background-color: #fff;
			font-family: "Nissan Bold",Verdana,Arial,sans-serif!important;
		}
		#form-loading{
			height: 150px;
			text-align: center;
		}
		.loader {
			border: 16px solid #f3f3f3;
			border-radius: 50%;
			border-top: 16px solid #db3434;
			width: 120px;
			height: 120px;
			-webkit-animation: spin 2s linear infinite;
			animation: spin 2s linear infinite;
			margin-left: 230px;
		}
		@-webkit-keyframes spin {
			0% { -webkit-transform: rotate(0deg); }
			100% { -webkit-transform: rotate(360deg); }
		}
		@keyframes spin {
			0% { transform: rotate(0deg); }
			100% { transform: rotate(360deg); }
		}
		label{
			font-family: "Nissan Bold",Verdana,Arial,sans-serif;
			font-size: .8571428571em;
		}
	</style>
<title>Admin</title>
</head>

<body>
<div class="header">
	<div>
		<div class="noindex">
			<header class="c_010 grid-row bleed">
				<div class="col-12">
					<div class="global-nav-container" role="navigation" aria-label="global navigation">
						<ul class="nav-global grid-row">
							<li class="login"></li><li></li>
							<li></li><li class="nav-global-batd"></li>
						</ul>
					</div>

					<div class="nav-root">
						<div class="title-logo-container grid-row">
							<a class="show-menu" href="#" title="" aria-label="">
							</a>         
								<span class="logo">
									<a href="<?php echo base_url();?>">
										<img src="images/logo.png" alt=""/>
										<img class="logo-print" src="images/logo.png" alt=""/>
									</a>
								</span>
						 
							<p class="page-title">
								DEALERS' INTELLIGENT COMMITMENT
							</p>
								<ul class="print-info">
									<li class="print-info-date"> <span></span></li>
									<li class="print-info-url"></li>
								</ul>
							</div>

							<div class="nav-container grid-row">
								<div class="nav-inner">
									<button class="close-menu" aria-label="">
									</button>
									<nav aria-label="main navigation" class="grid-row">
										<div class="primaryNav pageNavigation">
										</div>
									</nav>
								</div>
							</div>   
					</div>
					<div class="nav-mask"></div>
				</div>
			</header>
		</div>
	</div>
</div>

<main id="container" role="main">
	<div class="grid-row bleed">
    <div class="col-12">
        <div class="editorialInPageNavigation">
			<div class="noindex">
				<div class="c_046">
					<div class="docked-nav-wrapper nav-static">
					<div class="docked-nav-outer">
						<div class="grid-row">
							<div class="col-12">
								<div class="docked-nav-container" role="navigation">
									<div class="docked-nav-root">
										<button type="button" class="icon-show-menu">
											<span></span>
										</button>
										<div class="docked-nav-cont">
										<div class="inner">
											<nav aria-label="main navigation">
												<ul class="nav-primary">
														<li class="active">
															<a href="<?php echo base_url();?>admin">
																		<span>Edit User</span>
															</a>
														</li>
														<li class="">
															<a href="<?php echo base_url();?>dasboard" target="new">
																		<span>Show Dashboard</span>
															</a>
														</li>
														<li class="">
															<a href="<?php echo base_url();?>user/import">
																		<span>Import Data</span>
															</a>
														</li>
														<li class="">
															<a href="#" class="btn" id="btnSync">
																		<span>Sync Data</span>
															</a>
														</li>
														<li class="">
															<a href="<?php echo base_url();?>status">
																		<span>Status</span>
															</a>
														</li>
												</ul>
												<div class="sub-nav">
													<button type="button" class="btn-more">
														<span>Lebih detail</span>
													</button>
													<ul class="nav-primary"></ul>
												</div>
											</nav>
										</div>
									</div>
									</div>
									<span class="vehicle-name"></span>
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
	
	<div class="grid-row">
		<div class="col-12">
			<div class="pageHeader">
				<div class="c_023 chevron-grey">
					<div class="container-inner">
						<div class="c_023-1 default">
							<div class="heading-group">
								<h1><span>Digital Registration</span></h1>
									<p><span>Nissan Indonesia</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="columns column section columns6" id="form-update">
		<div class="grid-row">
			<div class="col-6 center">
				<div class="form section">
					<div class="c_019">
					<div class="form-group">
						<input type="text" class="form-control" id="userid" name="userid">
							<div class="submit-form">
								<button style="margin-top: -10px; type="button" class="" place-holder="User ID" onclick='GetUserAjax()';>Cari</button>
							</div>
						</div>
						<form action="" method="post" enctype="multipart/form-data">
						<fieldset>
							<div class="parsys formBuilder">
								<div class="textfield section">
									<div class="form-group required ">
										<input type="hidden" id="ID" name="ID" >
									<input type="hidden" id="UserID" name="UserID" >
									
									<hr/>
									<div class="form-group-container">
										<label>User ID		:</label>
										<input type="text"  id="UserCode" name="UserCode" value="" disabled>
									</div>
									<div class="form-group-container">
										<label>Nama		:</label>
										<input type="text" id="UserName" name="UserName" value="">
									</div>
									<div class="form-group-container">
										<label>Perusahaan	:</label>
										<div class="section dropdown">
											<select id="CompanyID" name="CompanyID">
												<option value="0">Pilih Perusahaan</option>
												<?php
													echo $company;
												?>
											</select>
										</div>
									</div>
									
									<div class="form-group-container">
										<label>Cabang/Perusahaan	: </label>
										<input type="text"  id="Cabang" name="Cabang" value="">
									</div>
									<div class="section dropdown">
										<label>Jabatan/Posisi		: </label>
										<div class="section dropdown">
											<select id="Title" name="Title">
												<option value="0" class="selectedValue">Pilih Jabatan</option>
												<?php
													echo $title;
												?>
											</select>
										</div>
									</div>
									<div class="form-group-container">
										<img src="" alt="" id="image-file" style="width=180px;height=135;display:none" />
										<div id="content-webcam">
											<div id="camera">Capture</div>
											<div id="webcam">
												<input type=button value="Ambil Gambar" onClick="preview()">
											</div>
											<div id="simpan" style="display:none">
												<input type=button value="Remove" onClick="batal()">
											</div>
											<div id="hasil"></div>
										</div>
										<br/><input type=button value="Ambil Gambar" id="btnChange" onClick="change()" style="display:none"">
									</div>
									<div class="form-group-container">
										<label>Komitmen	:</label>
										<textarea  rows="5" id="Commitment" name="Commitment"disabled></textarea>
									</div>
									<div class="form-group-container">
										<label>Tanda Tangan	:</label>
										<img src="images/noimage.png" id="signature" alt="signature" style="max-width:200px;max-height:200px" />
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
									
									<button type="button" id="btnUpdateUser" class="submit-form-button">Simpan</button>
										</div>
								</div>
							</div>
						</fieldset>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="columns column section columns6" id="form-loading">
	<div class="grid-row">
		<div class="col-6 center">
			<div class="form section">
				<div class="columns column section columns6" id="form-loading">
					<div class="loader"></div>
					<div class="success-message">
						<div class="heading-group ">
							<h1><span><font color=red> Sync Data Success </font></span></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<div class="freeEditorial freeEditorialParsys parsys">
		<div class="contentZone section">
			<div class="content-zone container c_002 " >
				<div  class="link-zone">
					<div class="title"></div>
					<div class="columns parsys">
						<div class="columns column columns66 section">
							<div class="grid-row">
								<div class="col-6">
									<div class="parsys col1-par">
										<div class="section heliostext">
											<div class="c_001 ">
												<div class="heading-group"></div>	
											</div>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="parsys col2-par">
										<div class="section heliostext">
										<div class="c_001 "></div>
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
</main>

<div class="grid-row bleed">
	<div class="noindex">
		<div class="c_054-2">
			<div class="grid-row">
				<div class="col-12">
						<ol>
							<li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
								<a href="<?php echo base_url();?>">
									<span itemprop="title">
										Home
									</span>
								</a>
							</li>
						
						<li>
							<span>Admin</span>
						</li>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="noindex">
	<footer class="grid-row bleed">
			<nav class="c_054-3">
				<div class="grid-row">
					<div class="col-12">
						<dl class="col-3 last">
							<dt>
								<a href="#" class="accordionToggle">
									<span>Toggle Follow Nissan Indonesia menu</span>
								</a>
								<span>Follow Nissan Indonesia</span>
							</dt>
							<dd><a class="social-icon icon-facebook" href="https://www.facebook.com/NissanZoneIndonesia" target="_blank" rel="">
								   <span>facebook</span>
								</a>
							</dd>
							<dd><a class="social-icon icon-twitter" href="https://twitter.com/nissanid" target="_blank" rel="">
								   <span>twitter</span>
								</a>
							</dd>
							<dd><a class="social-icon icon-youtube" href="https://www.youtube.com/user/nissanid" target="_blank" rel="">
								   <span>youtube</span>
								</a>
							</dd>
							<dd><a class="social-icon icon-instagram" href="https://www.instagram.com/nissanid/?hl=en" target="_blank" rel="">
								   <span>instagram</span>
								</a>
							</dd>
						</dl>
					</div>
				</div>
			</nav>
	</footer>
</div>

<div class="noindex">
	<footer class="grid-row bleed">
		<nav class="c_025">
			<div class="grid-row">
				<div class="col-12">
					<div class="footer-legal" style="text-align: right;">
					<ul>
						<li><a href="https://www.nissan.co.id/copy-right-and-disclaimer.html" title="">COPYRIGHT AND DISCLAIMER</a></li>
					</ul>
						<p class="footer-copyright">&copy; Nissan 2017</p>
					</div>
				</div>
			</div>
		</nav>
	</footer>
</div>
</div>
</body>

</html>
<script src="js/webcam.min.js"></script>
<script src="js/admin-webcam.js"></script>	
<script>
	var baseAPIURL = 'http://www.nissandid.com/';
	$("#form-loading").hide();
	$(".success-message").hide();
	
	$('#userprofile').change(function (event) {
		$("#image-file").attr("src",URL.createObjectURL(event.target.files[0]));
	});
	
	$('#btnSync').click(function (event) {
		$("#form-update").hide("slow");
		$("#form-loading").show("slow");
		$.ajax({
			url		: baseAPIURL + 'user/GetSyncData', 
			dataType: 'json', 
			type: 'POST',
			success	: function(result)
			{
				$.each(result, function(key,value)
				{
					UpdateSync(value.UserID, value.Commitment, baseAPIURL + 'images/signature/' + value.UserID + '.png');
				});
				$(".loader").hide();
				$(".success-message").show();
			}
		});
	});
	
	function UpdateSync(userid,commitment,signature_url)
	{
		$.ajax({
			url		: base_url + 'user/UpdateSyncData', 
			dataType: 'json', 
			type: 'POST',
			data : {UserID:userid,Commitment:commitment,SignatureURL:signature_url},
			success	: function(result)
			{
				return true;
			}
		});
	}
	
	$('#btnUpdateUser').click(function (event) {
		$.ajax({
			dataType : "Json",
			type: "POST",
			url: base_url + "User/Update",
			data : $('#regForm').serialize() + "&signature=" + signature,
			
			success : function(result)
			{
				if(result.status)
				{
					simpan();
					window.location.href = "http://axacoid.sudahdistaging.com";
				}
				else{
					$("#error-message").html(result.message);
				}
			}
		});
	});
</script>
