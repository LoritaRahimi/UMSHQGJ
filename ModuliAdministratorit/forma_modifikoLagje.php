<?php
	include("kontrollo.php");	
?>
<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['Modifiko']))
{	
	$ID_Lagjja = $_POST['ID_Lagjja'];
	
	$Emri_lagjes=$_POST['Emri_lagjes'];
	
	
	// checking empty fields
	if(empty($Emri_lagjes) ) {	
			
		if(empty($Emri_lagjes)) {
			echo "<font color='red'>Fusha e lagjes është e zbrazët.</font><br/>";
		}
		
	
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umshqgj_lagjet SET Emri_lagjes='$Emri_lagjes' WHERE ID_Lagjja=$ID_Lagjja");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: tabela_modifikoLagje.php");
	}
}
?>
<?php
//getting ID_Lagjja from url
$ID_Lagjja = $_GET['ID_Lagjja'];

//selecting data associated with this particular ID_Lagjja
$rezultati = mysqli_query($lidh,"SELECT * FROM umshqgj_lagjet WHERE ID_Lagjja=$ID_Lagjja");

while($rez = mysqli_fetch_array($rezultati))
{
	$Emri_lagjes = $rez['Emri_lagjes'];
	
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
						<?php include_once("fillimiFaqes.php"); ?>
						<section class="wrapper style5">
							<div class="inner">
							<p style="text-align:right;">Përshëndetje, <em><?php  echo $kontrollo_perdorues;?>!</em></p>
							
							    <section>
									<form Emri_lagjes="form1" method="post" action="forma_modifikoLagje.php">
									<h4>Modifiko emrin e lagjes</h4>
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												Lagjja
												
												<input type="text" name="Emri_lagjes"  value='<?php echo $Emri_lagjes;?>' required />
												<br>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="hidden" name="ID_Lagjja" value='<?php echo $_GET['ID_Lagjja'];?>'/></li>
													<li><input type="submit" name="Modifiko" value="Modifiko" class="primary" /></li>
												</ul>
											</div>
										</div>
									</form>
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