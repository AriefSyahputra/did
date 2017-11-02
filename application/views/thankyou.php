<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<!--[if lt IE 9 ]><html lang="id-ID" dir="ltr" class="no-js ltie9" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if IE 9 ]><html lang="id-ID" dir="ltr" class="no-js ie9" prefix="og: http://ogp.me/ns#"><![endif]-->
<!--[if gt IE 9]><!--><html lang="id-ID" dir="ltr" class="no-js" prefix="og: http://ogp.me/ns#"><!--<![endif]-->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="version" content="9b10e">
	<meta name="geo.country" content="ID">

	<link rel="stylesheet" media="print, screen" href="../css/fonts/fonts-latin-basic.min.css">
	<link rel="stylesheet" media="print, screen" href="../css/small.css">
	<link rel="stylesheet" media="print, screen and (min-width: 36.3125em)" href="../css/medium.css">
	<link rel="stylesheet" media="print, screen and (min-width: 60em)" href="../css/large.css">
	<link rel="stylesheet" media="print" href="../css/print.css">

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script>
		var base_url = "<?php echo base_url();?>";
	</script>	
	<script src="../js/admin.js"></script>
<style>
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
		width: 100%;
		border: 1px solid #d2d2d2;
		border-radius: .1666666667em;
		box-shadow: 0 0 0 0.1428571429em #eee, inset 0 0.1111111111em 0.2222222222em -0.0555555556em rgba(0,0,0,.15);
		line-height: normal;
		margin-bottom: -.0555555556em;
		padding: .6111111111em 9px .5555555556em;
		background-color: #fff;
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
										<img src="../images/logo.png" alt=""/>
										<img class="logo-print" src="../images/logo.png" alt=""/>
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
	
	<div class="columns column section columns6" id="form-loading">
	<div class="grid-row">
		<div class="col-6 center">
			<div class="form section">
				<div class="columns column section columns6" id="form-loading">
					<div class="success-message">
						<div class="c_019" style="margin-bottom:20px">
							<span class="c_001"><font size="5pt"> Terima kasih, komitmen anda telah kami simpan. </font></span>
							
							<div class='submit-form'><button class='submit-form-button' type='button' autocomplete='off' id='btnBack'>Kembali</button></div>
							
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
							<span>Digital Registration</span>
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

<script>
	$('#btnBack').click(function (event) {	
		window.location.href  = base_url;
	});
</script>