<?php
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidh,
"SELECT * FROM umshqgj_perdoruesit ORDER BY ID_perdoruesi DESC");
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
						
						<section>
						
							<form action="" method="post">
							<div class="table-wrapper">
								<table>
									<tr><h3>Kërko të dhënat e përdoruesit për modifikim</h3></tr>
									<tr>
										<td>Shkruaj:</td>
										<td><input type="text" name="kusht" placeholder="Përdoruesin ose Email-in"/></td>
										<td><input type="submit" value="Kërko" class="button primary"/></td>
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
									<th>Përdoruesi</th>
									<th>Fjalëkalimi</th>
									<th>Email-i</th>
									<th>Modifiko</th>
								</tr>
								</thead>
								<tbody>
							<?php
							if(!empty($_REQUEST['kusht'])) {
								$kusht=mysqli_real_escape_string
								($lidh,$_REQUEST['kusht']);
								$sql=mysqli_query($lidh,"SELECT * FROM umshqgj_perdoruesit WHERE perdoruesi LIKE '%".$kusht."%' OR email_adresa LIKE '%".$kusht."%'");
								while($rreshti=mysqli_fetch_array($sql)){
									echo"<tr>";
									echo"<td>".$rreshti['perdoruesi']."</td>";
									echo"<td>".$rreshti['fjalekalimi']."</td>";
									echo"<td>".$rreshti['email_adresa']."</td>";
									echo"<td><a href=\"forma_modifikoPerdorues.php?ID_perdoruesi=$rreshti[ID_perdoruesi]\"  class='button primary'> Modifiko</a></td></tr>";
								}
							}?>
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