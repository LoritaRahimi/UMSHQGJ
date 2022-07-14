<?php
	include("kontrollo.php");	
?>
<?php
//including the database connection file
include_once("konfiguro.php");

//fetching data in descending order (lastest entry first)
$rezultati = mysqli_query($lidh,
"SELECT * FROM umshqgj_shpalljet ORDER BY ID_shpallja DESC");
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
										<tr><h3>Kërko të dhënat e shpalljes për modifikim</h3></tr>
										<tr>
											<td>Shkruaj:</td>
											<td><input type="text" name="kusht" placeholder="Emri ose Mbiemri"/></td>
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
									<td>Titulli</td>
									<td>Pershkrimi</td>
									<td>Çmimi</td>
									<td>Lagjja</td>
									<td>Foto</td>
									<td>Emri i fotos</td>
									<td>Modifiko</td>
								</tr>
								</thead>
								<tbody>
								<?php
									if (!empty($_REQUEST['kusht'])) {

									$kusht = mysqli_real_escape_string($lidh,$_REQUEST['kusht']);     

									$sql = mysqli_query($lidh,	
								"SELECT
									umshqgj_shpalljet.ID_shpallja,
								  umshqgj_shpalljet.Titulli,
								  umshqgj_shpalljet.Pershkrimi,
								  umshqgj_shpalljet.Çmimi,
								  umshqgj_lagjet.Emri_lagjes,
								  umshqgj_shpalljet.Foto,
								  umshqgj_shpalljet.emri_fotos 

								FROM
								  umshqgj_shpalljet 
								INNER JOIN
								  umshqgj_lagjet ON umshqgj_shpalljet.ID_Lagjja = umshqgj_lagjet.ID_Lagjja
								WHERE
								  umshqgj_shpalljet.Titulli LIKE '%".$kusht."%' OR umshqgj_shpalljet.Çmimi LIKE '%".$kusht."%'"
									); 

									while($rreshti = mysqli_fetch_array($sql)) { 		
											echo "<tr>";
											echo "<td>".$rreshti['Titulli']."</td>";
											echo "<td>".$rreshti['Pershkrimi']."</td>";
											echo "<td>".$rreshti['Çmimi']."</td>";
											echo "<td>".$rreshti['Emri_lagjes']."</td>";
											
											echo "<td><img src=data:image/jpeg;base64,".base64_encode($rreshti['Foto'])." width='80'  height='100'/></td>";
											echo "<td>".$rreshti['emri_fotos']."</td>";
												
											
											
											echo "<td><a href=\"forma_modifikoShpallje.php?ID_shpallja=$rreshti[ID_shpallja]\" class='button primary'>Modifiko</a> </td>";			
										}

									}

							    ?>
								</tbody>
							</div>
							</table>
							</div>
						
						
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