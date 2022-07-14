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
								
									<h3>Shto të dhënat e shpalljes</h3>
									
									
									<form enctype="multipart/form-data"  action="shto_shpallje.php" method="post" name="form1">
										<div class="row gtr-uniform">
										<div class="table-wrapper">
										<table>
												<tr>
													<select name="ID_Lagjja" id="demo-category">
													<option selected="selected">Zgjedh Lagjen</option>
														<?php
															$res=mysqli_query($lidh,"SELECT * FROM umshqgj_lagjet");
															while($rreshti=$res->fetch_array())
															{
																?>
																<option value="<?php echo $rreshti['ID_Lagjja']; ?>"><?php echo $rreshti['Emri_lagjes']; ?></option>
																<?php
															}
															?>
													</select>
													<br />
												</tr>
												<tr> 
													<td>Titulli</td>
													<td><input type="text" name="Titulli"></td>
												</tr>
											    <tr> 
													<td>Përshkrimi</td>
													<td><input type="text" name="Pershkrimi"></td>
												</tr>
												<tr>
													<td>Çmimi</td>
													<td><input type="text" name="Çmimi"></td>
												</tr>
												<tr>
													<td><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
													<td><input name="userfile" type="file" /></td>
												</tr>
												<tr>
											<td><input type="submit" name="shto_Shpallje" value="Shto" class='button primary'></td>
												</tr> 
											</table>
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