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

				<!-- Main -->
					<article id="main">
					<section class="wrapper style5">
					<div class="inner">
					<p style="text-align:right;">Përshëndetje, <em><?php  echo $kontrollo_perdorues;?>!</em></p>

								<div>
							
							
							    <section>
								
									<h4>Shto të dhëna</h4>
									<div class="table-wrapper">
									<div class="row gtr-uniform">
									<form enctype="multipart/form-data"  action="shto_teDhena.php" method="post" name="form1">
										<table>
											<tr> 
												<td>Titulli</td>
												<td><input type="text" name="Titulli_tedhenave"></td>
											</tr>
											<tr> 
												<td>Përshkrimi</td>
												<td><!--<input type="text" name="Pershkrimi_tedhenave">-->
												<textarea name="Pershkrimi_tedhenave" rows="10" cols="30"></textarea></td>
											</tr>
											<tr> 
												<td>Emri file-it</td>
												<td><input type="text" name="Fajlli"></td>
											</tr>
											 <tr> 
												<td>Pamja e faqes</td>
												<td><input type="text" name="Pamja_faqes"></td>
											</tr>
											</table>
											<td><input type="submit" name="shto_teDhena" value="Shto" class='button primary'></td>
									</form>
									</div>
									</div>
									
								</section>
								</div>
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