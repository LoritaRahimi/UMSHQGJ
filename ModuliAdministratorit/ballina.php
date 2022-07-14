<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
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
							<?php include_once("fillimiFaqes.php"); ?>
					</section>

				<!-- One -->
					

				<!-- Two -->
					

				<!-- Three -->
					<section id="three" class="wrapper style3 special">
					
						<div class="inner">
							<header class="major">
								<h2>MENAXHIMI I TË DHËNAVE TË BALLINËS</h2>
								<p style="text-align:right">Përshëndetje, <em><?php  echo $kontrollo_perdorues;?>!</em></p>
							</header>
							<ul class="features">
								<li class="icon fa-paper-plane">
									<a href="forma_shtoLagje.php"><h3>Shto lagje</h3></a>
									<p>Forma për shtimin e lagjeve të reja në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_modifikoLagje.php"><h3>Modifiko lagje</h3></a>
									<p>Forma për modifikimin e lagjeve aktuale në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_fshijLagje.php"><h3>Fshij lagje</h3></a>
									<p>Forma për fshirjen e shpalljeve aktuale në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="forma_shtoShpallje.php"><h3>Shto shpallje</h3></a>
									<p>Forma për shtimin e shpalljeve të reja në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_modifikoShpallje.php"><h3>Modifiko shpallje</h3></a>
									<p>Forma për modifikimin e shpalljeve aktuale në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_fshijShpallje.php"><h3>Fshij shpallje</h3></a>
									<p>Forma për fshirjen e shpalljeve aktuale në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_shtoTeDhena.php"><h3>Shto të dhënat</h3></a>
									<p>Forma për shtimin e të dhenave të reja në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_modifikoTedhena.php"><h3>Modifiko të dhënat</h3></a>
									<p>Forma per modifikimin e të dhenave aktuale në webaplikacion.</p>
								</li>
								<li class="icon fa-paper-plane">
									<a href="tabela_fshijTedhena.php"><h3>Fshij të dhënat</h3></a>
									<p>Forma për fshirjen e të dhënave aktuale në webaplikacion.</p>
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