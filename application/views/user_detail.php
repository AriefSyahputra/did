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
<script src="../js/signature_pad.js"></script>
<script>
	var base_url = "<?php echo base_url();?>";
</script>	
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
	.message{
		font-family: Verdana,Arial,sans-serif;
		font-size: 1.085714em;
	}
</style>
<title>Dealers' Intelligent Day</title>
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
								<h1><span>Dealers' Intelligent Commitment</span></h1>
									<p><span>Nissan Indonesia</span></p>
							</div>
								<p class="content-copy">User Profile</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="columns column section columns6">
		<div class="grid-row">
			<div class="col-6 center">
				<div class="form section">
					<div class="c_019">
					<form id="regForm">
						<fieldset>
							<div class="parsys formBuilder">
							<div class="textfield section">
								<div class="form-group required ">
									<?php
										if(!empty($user))
										{
											foreach($user as $key => $data)
											{ 
												echo "<input type='hidden' id='ID' name='ID' value='". $data->ID ."'>";
												echo "<input type='hidden' id='UserID' name='UserID' value='". $data->UserID ."'>";
												
												echo '<div class="form-group-container"><label> Nama		: </label> ';
												echo "<input type='text' id='UserName' name='UserName' value='". $data->UserName ."' disabled></div>";
												echo '<div class="form-group-container"><label> Perusahaan	: </label> ';
												echo "<input type='text' id='CompanyName' name='CompanyName' value='". $data->CompanyName."' disabled></div>";
												echo '<div class="form-group-container"><label> Cabang/Perusahaan	:</label>  ';
												echo "<input type='text' id='Cabang' name='Cabang' value='". $data->Cabang."' disabled></div>";
												echo '<div class="form-group-container"><label> Jabatan/Posisi		:</label> ';
												echo "<input type='text' id='Title' name='Title' value='". $data->Title."' disabled></div>";
												
												if($data->IsActivated == 'No')
												{
													echo "
													<div class='form-group-container'>
														<label> Komitmen	:</label> 
														<textarea rows='5' id='Commitment' name='Commitment' placeholder='Contoh : Saya berkomitmen mencapai target penjualan 100 unit' autofocus></textarea>
													</div>";
													
													echo '
													<label> Tanda Tangan Digital	:</label> 
													<div class="wrapper">
													  <canvas id="signature-pad" class="signature-pad" max-width=340 height=150 style="border:1px solid #ccc;"></canvas>
													</div><div></div>';
													
													echo'
													<div class=""><div class="c_004"><div class="heading-group"><h2><span></span></h2></div></div></div>';
													
													echo '
													<div class="form-group-container"><font color="red"><b><span id="error-message"></span></b></font></div>
													<div class="submit-form">
													<button type="button" id="clear">Ulangi</button>
													<button class="submit-form-button" type="button" autocomplete="off" id="save">Simpan</button>';
												}
												else
												{
													echo "
													<div class='form-group-container'>
														<label> Komitmen	:</label> 
														<textarea rows='5' id='Commitment' name='Commitment' disabled>". $data->Commitment ."</textarea>
													</div>";
													$file = 'images/signature/'.$data->UserID.'.png';
													if(!file_exists($file))
													{
														echo '
														<label> Tanda Tangan	:</label> 
														<div class="form-group-container">
														  <img src=' .base_url(). 'images/noimage.png alt="signature" style="width:400px;height:190px;border:1px solid #ccc;"/>
														</div><br/>';
													}
													else
													{
														echo '
														<label> Tanda Tangan	:</label> 
														<div class="form-group-container">
														  <img src=' .base_url(). 'images/signature/'.$data->UserID.'.png alt="signature" style="width:400px;height:190px;border:1px solid #ccc;"/>
														</div><br/>';
													}
												}
											}
										}
										else
										{
											echo '<div class="form-group-container"><span class="message"><font color="red">UserID salah atau tidak ditemukan!</font> <br/> Pastikan anda memasukkan UserID yang benar.</span></div>';
											echo "<div class='submit-form'><button class='submit-form-button' type='button' autocomplete='off' id='btnBack'>Ulangi</button></div>";
											
										}
									?>
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

<script>

	$('#btnBack').click(function (event) {	
		window.location.href  = base_url;
	});
	
	var signaturePad = new SignaturePad(document.getElementById('signature-pad'), {
	  backgroundColor: 'rgba(255, 255, 255, 0)',
	  penColor: 'rgb(0, 0, 0)'
	});
	var saveButton = document.getElementById('save');
	var cancelButton = document.getElementById('clear');

	saveButton.addEventListener('click', function (event) {
		var signature = signaturePad.toDataURL('image/png');
		$.ajax({
			dataType : "Json",
			type: "POST",
			url: base_url + "user/UpdateCommitment",
			data : $('#regForm').serialize() + "&signature=" + signature,
			
			success : function(result)
			{
				if(result.status)
				{
					window.location.href = "thankyou";
				}
				else{
					$("#error-message").html(result.message);
				}
			}
		});
	});
	cancelButton.addEventListener('click', function (event) {
	  signaturePad.clear();
	});
	
</script>