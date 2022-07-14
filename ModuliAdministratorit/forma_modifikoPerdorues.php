<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko']))
{	
	$ID_perdoruesi = $_POST['ID_perdoruesi'];
	
	$perdoruesi=$_POST['perdoruesi'];
	$fjalekalimi=$_POST['fjalekalimi'];
	$email_adresa=$_POST['email_adresa'];	
	
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi) || empty($email_adresa)) {	
			
		if(empty($perdoruesi)) {
			echo "<font color='red'>Fusha e përdoruesit është e zbrazët.</font><br/>";
		}
		
		if(empty($fjalekalimi)) {
			echo "<font color='red'>Fusha e fjalëkalimit është e zbrazët.</font><br/>";
		}
		
		if(empty($email_adresa)) {
			echo "<font color='red'>Fusha e email-it është e zbrazët.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umshqgj_perdoruesit SET perdoruesi='$perdoruesi',fjalekalimi='$fjalekalimi',email_adresa='$email_adresa' WHERE ID_perdoruesi=$ID_perdoruesi");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: tabela_modifikoPerdorues.php");
	}
}
?>
<?php
//getting ID_perdoruesi from url
$ID_perdoruesi = $_GET['ID_perdoruesi'];

//selecting data associated with this particular ID_perdoruesi
$rezultati = mysqli_query($lidh,"SELECT * FROM umshqgj_perdoruesit WHERE ID_perdoruesi=$ID_perdoruesi");

while($rez = mysqli_fetch_array($rezultati))
{
	$perdoruesi = $rez['perdoruesi'];
	$fjalekalimi = $rez['fjalekalimi'];
	$email_adresa = $rez['email_adresa'];
}
?>
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
									<h3>Modifiko te dhenat e perdoruesit</h3>
									<form username="form1" method="post" action="forma_modifikoPerdorues.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
											
												Perdoruesi
												<input type="text" name="perdoruesi" value='<?php echo $perdoruesi;?>' />
												<br>
												Fjalekalimi
												<input type="text" name="fjalekalimi" value='<?php echo $fjalekalimi;?>' />
												<br>
												Email-i
												<input type="text" name="email_adresa" value='<?php echo $email_adresa;?>' />
												<br>
											</div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="hidden" name="ID_perdoruesi" value='<?php echo $_GET['ID_perdoruesi'];?>' /></li>
													<li><input type="submit" name="modifiko" value="Modifiko" class="button primary" ></li>
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