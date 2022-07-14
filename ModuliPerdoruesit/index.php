<?php include_once("konfiguro.php"); ?>
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

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
					<?php
            $rezultati = mysqli_query($lidh, "SELECT  umshqgj_lagjet.Emri_lagjes, umshqgj_shpalljet.Titulli, umshqgj_shpalljet.Pershkrimi, umshqgj_shpalljet.Foto, umshqgj_shpalljet.emri_fotos, umshqgj_shpalljet.Çmimi  FROM umshqgj_shpalljet
LEFT OUTER JOIN umshqgj_lagjet ON umshqgj_shpalljet.ID_Lagjja = umshqgj_lagjet.ID_Lagjja
GROUP BY umshqgj_lagjet.Emri_lagjes, umshqgj_shpalljet.Titulli, umshqgj_shpalljet.Pershkrimi, umshqgj_shpalljet.Foto, umshqgj_shpalljet.Çmimi
ORDER BY umshqgj_lagjet.ID_Lagjja, umshqgj_shpalljet.ID_shpallja ASC");
            while ($rreshti = mysqli_fetch_assoc($rezultati)) {

              extract($rreshti);
			  
			
if($rezultati==null)
  mysqli_free_result($rezultati);

            ?>
						<section class="spotlight">
							<div class="image">
							<?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $rreshti['Foto'] ).'" width="50%" height="50%">'; ?>
							</div>
							<div class="content">
								<h2><?php echo $Titulli; ?></h2>
								<p><?php echo $Emri_lagjes; ?></p>
								<p><?php echo $Pershkrimi; ?></p>
								<p><?php echo $Çmimi ?></p>
							</div>
						</section>
						<?php } ?>
					</section>
          
				<!-- Three -->
					

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