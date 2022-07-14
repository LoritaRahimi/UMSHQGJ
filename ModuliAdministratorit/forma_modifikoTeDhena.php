<?php
	include("kontrollo.php");	
?>

<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko_teDhena']))
{	
	$ID_tedhenat = $_POST['ID_tedhenat'];
	$Titulli_tedhenave=$_POST['Titulli_tedhenave'];
	$Pershkrimi_tedhenave=$_POST['Pershkrimi_tedhenave'];
	$Fajlli=$_POST['Fajlli'];			
	$Pamja_faqes=$_POST['Pamja_faqes'];	
	
	
	
	// checking empty fields
	if(empty($Titulli_tedhenave) || empty($Pershkrimi_tedhenave) || empty($Fajlli) || empty($Pamja_faqes)){	
			
		if(empty($Titulli_tedhenave)) {
			echo "<font color='red'>Fusha e titullit të dhënave është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi_tedhenave)) {
			echo "<font color='red'>Fusha e përshkrimit të dhënave është e zbrazët.</font><br/>";
		}
		
		if(empty($Fajlli)) {
			echo "<font color='red'>Fusha e fajllit është e zbrazët.</font><br/>";
		}	
	if(empty($Pamja_faqes)) {
			echo "<font color='red'>Fusha e pamjes së faqes është e zbrazët.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umshqgj_tedhenat SET Titulli_tedhenave='$Titulli_tedhenave',Pershkrimi_tedhenave='$Pershkrimi_tedhenave',Fajlli='images/$Fajlli',Pamja_faqes='$Pamja_faqes' WHERE ID_tedhenat=$ID_tedhenat");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: tabela_modifikoTedhena.php");
	}
}
?>
<?php
//getting ID_tedhenat from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//selecting data associated with this particular ID_Studenti
$rezultati = mysqli_query($lidh,"SELECT * FROM umshqgj_tedhenat WHERE ID_tedhenat=$ID_tedhenat");

while($rez = mysqli_fetch_array($rezultati))
{
	$Titulli_tedhenave = $rez['Titulli_tedhenave'];
	$Pershkrimi_tedhenave = $rez['Pershkrimi_tedhenave'];
	$Fajlli = $rez['Fajlli'];	
	$Pamja_faqes = $rez['Pamja_faqes'];
	
	
}
?>
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
				<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Mënytë</span></a>
									<div id="menu">
										<ul>
											<li><a href="ballina.php">Ballina</a></li>
											<li><a href="pranimi_shpalljeveDQ.php">Pranimi i shpalljeve të dërguara me qera</a></li>
											<li><a href="perdoruesit.php">Përdoruesit</a></li>
											<li><a href="ckyqu.php">Çkyqu</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
			</header>
			
		<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>UEBAPLIKACIONI PËR MENAXHIMIN E SHTËPIVE ME QERA NË GJILAN (UMSHQGJ)</h2>
						</div>
					</section>

		<!-- Main -->
		<article id="main">
			<section class="wrapper style5">
			<div class="inner">
			<p style="text-align:right;">Përshëndetje, <em><?php  echo $kontrollo_perdorues;?>!</em></p>
								
				<section>
					<div class="table-wrapper">
					<div class="row gtr-uniform">
					<form form="form1" method="post" action="forma_modifikoteDhena.php">
						<h3>Modifiko të dhënat</h3>

							Titulli i te dhenave
							<input type="text" name="Titulli_tedhenave" value='<?php echo $Titulli_tedhenave;?>'   required />
							<br>
							Pershkrimi i te dhenave
							<!--<input type="text" name="Pershkrimi_tedhenave" value='<?php /*echo $Pershkrimi_tedhenave;*/?>'   required />-->
											<textarea name="Pershkrimi_tedhenave"  rows="10" cols="30"><?php echo $Pershkrimi_tedhenave;?></textarea>
							<br>
							Emri i fajllit
							<input type="text" name="Fajlli" value='<?php echo $Fajlli;?>'   required />
							<br >
							Pamja e faqes
							<input type="text" name="Pamja_faqes" value='<?php echo $Pamja_faqes;?>'   required />
							<br >
							<input type="hidden" name="ID_tedhenat" value='<?php echo $_GET['ID_tedhenat'];?>' />
							<input type="submit" name="modifiko_teDhena" value="Modifiko" class='button primary'>
					
					</form>
					</div>
					</div>
				</section>
		  </div>
		  </section>
		</article>
	
	<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Untitled</li><li>Dizajni: <a href="http://html5up.net">HTML5 UP</a></li>
							<li>&copy; Meritat:  @html5up.net për template të lejuar <a href="https://html5up.net/license">Creative Commons</a></li>
							<li>Fotot: <a href="https://unsplash.com/">unsplash</a></li>
						</ul>
					</footer>

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
