<?php
include('kyqu.php');
if((isset($_SESSION['perdoruesi'])!=''))
{
	header('Location:ballina_administratorit.php');
}


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
				
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<?php include_once("fillimiFaqes.php"); ?>
						</div>
					</section>

				<!-- Main -->
					<article id="main">
						<section class="wrapper style5">
							<div class="inner">

								<section>
									<h4>Udhëzim</h4>
									<blockquote>Për t`u kyçur në webaplikacion ju lutem kontaktoni administratorin për krijimin e llogarisë! </blockquote>
								</section>
								<br>
								
								<section>
									<h4>Kyçja në webaplikacion</h4>
									<form method="post" action="#">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="perdoruesi" id="perdoruesi" value="" placeholder="Përdoruesi" />
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="password" name="fjalekalimi" id="fjalekalimi" value="" placeholder="Fjalëkalimi" />
											</div>
											
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" name="shto" value="Kyqu" class="primary" /></li>
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