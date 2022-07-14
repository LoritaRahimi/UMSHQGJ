<?php
	include("kontrollo.php");	
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Moduli Administratorit</title>
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
						<div class="inner">
							<?php include_once("fillimiFaqes.php"); ?>
						</div>
					</section>

				<!-- One -->
					

				<!-- Two -->
					

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
					<div class="inner">
							<header class="major">
								<h2>Menaxhimi i të dhënave të shpalljeve të dërguara me qera</h2>
								<p style="text-align: right">Përshëndetje, <em><?php  echo $kontrollo_perdorues;?>!</em></p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane">
									<a href="forma_shtoShpalljeDQ.php"><h3>Shto shpallje të dërguar</h3></a>
									<p>Forma për shtimin e shpalljeve të reja në webaplikacion me të drejta të administratorit.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_modifikoShpalljeDQ.php"><h3>Modifiko shpallje të dërguar</h3></a>
									<p>Forma për modifikim të të dhënave të shpalljeve aktuale në webaplikacion me të drejta të administratorit.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_fshijShpalljeDQ.php"><h3>Fshij shpallje të dërguar</h3></a>
									<p>Forma për fshirje të shpalljeve aktuale nga webaplikacioni.</p>
								</li>
								
							</ul>
						</div>
						</section>

				<!-- CTA -->
			

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