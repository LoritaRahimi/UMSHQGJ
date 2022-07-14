<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
$rezulttai = mysqli_query($lidh,
"SELECT * FROM umshqgj_dergoshpallje ORDER BY ID_shpalljaD DESC");
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
								
				<section>
				
					<form action="" method="post">
					<div class="table-wrapper">
						<table>
							<tr>
							<h3>Kërko të dhënat e shpalljes së dërguar për fshirje</h3>
							</tr>
							<tr>
								<td>Shkruaj:</td>
								<td><input type="text" name="kusht" placeholder="Titulli ose emri i dërguesit"/></td>
								<td><input type="submit" value="Kërko" class='button primary'/></td>
							</tr>
						</table>
					</div>
					</form>
					
				</section>
				
				<section>
				
					<div class="table-wrapper">
						<table class="alt">
						<thead>
							<tr>
								<td>Titulli i shpalljes</td>
								<td>Përshkrimi i shpalljes</td>
								<td>Foto e shpalljes</td>
								<td>Emri i fotos</td>
								<td>Çmimi i shpalljes</td>
								<td>Emri i dërguesit</td>
								<td>Mbiemri i dërguesit</td>
								<td>Email i dërguesit</td>
								<td>Fshij</td>								
							</tr>
							</thead>
							<tbody>
								<?php
								
								if (!empty($_REQUEST['kusht'])) {
								$kusht = mysqli_real_escape_string
								($lidh,$_REQUEST['kusht']);     
								$sql = mysqli_query($lidh,
								"SELECT * FROM umshqgj_shpalljetederguara
								WHERE Titulli_shpalljesD LIKE '%".$kusht."%' 
								OR  Emri_derguesit LIKE '%".$kusht."%'");
								while($rreshti = mysqli_fetch_array($sql)) { 		
										echo "<tr>";
										echo "<td>".$rreshti['Titulli_shpalljesD']."</td>";
										echo "<td>".$rreshti['Pershkrimi_shpalljesD']."</td>";
										echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['Foto_shpalljesD'])." width='80'  height='100'/></td>";
										echo "<td>".$rreshti['Emri_fotosShpalljesD']."</td>";
										echo "<td>".$rreshti['Çmimi_shpalljesD']."</td>";	
										echo "<td>".$rreshti['Emri_derguesit']."</td>";	
										echo "<td>".$rreshti['Mbiemri_derguesit']."</td>";
										echo "<td>".$rreshti['Email_derguesit']."</td>";
										
										echo "<td><a href=\"fshij_shpalljeDQ.php?ID_shpalljaD=$rreshti[ID_shpalljaD]\" class='button primary'>
										Fshij</a></td></tr>";		
									}

								}

								?>
								</tbody>
							</div>
							</table>
							
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