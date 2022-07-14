<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("konfiguro.php");	
?>

<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli i Përdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					
				<header id="header" class="alt">
						<?php include_once("meny.php"); ?>
				</header>
				
				<!-- Banner -->
					<section id="banner">
							<?php include_once("fillimiFaqes.php"); ?>
					</section>

				<!-- Main -->
					<article id="main">
					<section class="wrapper style5">
					<div class="inner">
						
						<section>
								
							<form enctype="multipart/form-data" method="post" action="dergo_shpallje.php" name="form1">
							<h4>Forma për dërgimin e shpalljeve me qera</h4>
								<div class="row gtr-uniform">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="Titulli_shpalljesD" id="demo-name" value="" placeholder="Titulli i shpalljes" />
									<br>
										<textarea name="Pershkrimi_shpalljesD" id="demo-message" placeholder="Përshkrimi" rows="6"></textarea>
									<br>
										<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
									
										<input name="userfile" type="file" /></td>
									<br><br>
										<input type="text" name="Çmimi_shpalljesD" id="demo-message" placeholder="Çmimi" />
									<br>
										<input type="text" name="Emri_derguesit" id="demo-message" placeholder="Emri juaj" />
									<br>
										<input type="text" name="Mbiemri_derguesit" id="demo-message" placeholder="Mbiemri juaj" />
									<br>
										<input type="email" name="Email_derguesit" id="demo-email" value="" placeholder="Email juaj" />
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" name="dergo_shpallje" value="Dërgo shpallje" class="primary" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
				</div>
				</section>
				</article>

				<!-- Footer -->
					<?php include_once("fundiFaqes.php"); ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>