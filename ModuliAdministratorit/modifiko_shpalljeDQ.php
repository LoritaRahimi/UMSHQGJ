<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("kontrollo.php");	
?>

<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko_shpalljeDQ']))
{	
	$ID_shpalljaD = $_POST['ID_shpalljaD'];
	$Titulli_shpalljesD=$_POST['Titulli_shpalljesD'];
	$Pershkrimi_shpalljesD=$_POST['Pershkrimi_shpalljesD'];
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$emri_fotosShpalljesD = $_FILES['userfile']['name'];
	 $maxsize = 10000000;			
	$Çmimi_shpalljesD=$_POST['Çmimi_shpalljesD'];
	$Emri_derguesit = $_POST['Emri_derguesit'];
	$Mbiemri_derguesit = $_POST['Mbiemri_derguesit'];
	$Email_derguesit = $_POST['Email_derguesit'];
	
	
	
	
	// checking empty fields
	if(empty($Titulli_shpalljesD) || empty($Pershkrimi_shpalljesD) || empty($Çmimi_shpalljesD) || empty($Emri_derguesit) || empty($Mbiemri_derguesit) || empty($Email_derguesit)){	
			
		if(empty($Titulli_shpalljesD)) {
			echo "<font color='red'>Fusha e titullit të shpalljes është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi_shpalljesD)) {
			echo "<font color='red'>Fusha e përshkrimit të shpalljes është e zbrazët.</font><br/>";
		}
		
		if(empty($Çmimi_shpalljesD)) {
			echo "<font color='red'>Fusha e çmimit të shpalljes është e zbrazët.</font><br/>";
		}	
	    if(empty($Emri_derguesit)) {
			echo "<font color='red'>Fusha e emrit të dërguesit është e zbrazët.</font><br/>";
		}
        if(empty($Mbiemri_derguesit)) {
			echo "<font color='red'>Fusha e mbiemrit të dërguesit është e zbrazët.</font><br/>";
		}
        if(empty($Email_derguesit)) {
			echo "<font color='red'>Fusha e email-it të dërguesit është e zbrazët.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umshqgj_shpalljetederguara SET Titulli_shpalljesD='$Titulli_shpalljesD',Pershkrimi_shpalljesD='$Pershkrimi_shpalljesD', Foto_shpalljesD='$imgData', emri_fotosShpalljesD='$emri_fotosShpalljesD',Çmimi_shpalljesD='$Çmimi_shpalljesD', Emri_derguesit='$Emri_derguesit', Mbiemri_derguesit='$Mbiemri_derguesit', Email_derguesit='$Email_derguesit' WHERE ID_shpalljaD=$ID_shpalljaD");
		
		//redirectig to the display pProgrami. In our case, it is admin.php
		header("Location: tabela_modifikoShpalljeDQ.php");
	}
}
?>
<?php
//getting ID_shpalljaD from url
$ID_shpalljaD = $_GET['ID_shpalljaD'];

//selecting data associated with this particular ID_Studenti
$rezultati = mysqli_query($lidh,"SELECT * FROM umshqgj_shpalljetederguara WHERE ID_shpalljaD=$ID_shpalljaD");

while($rez = mysqli_fetch_array($rezultati))
{
	$Titulli_shpalljesD = $rez['Titulli_shpalljesD'];
	$Pershkrimi_shpalljesD = $rez['Pershkrimi_shpalljesD'];
	$Çmimi_shpalljesD = $rez['Çmimi_shpalljesD'];	
	$Emri_derguesit = $rez['Emri_derguesit'];
	$Mbiemri_derguesit = $rez['Mbiemri_derguesit'];
	$Email_derguesit = $rez['Email_derguesit'];
	
	
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
				<form enctype="multipart/form-data" name="form1" method="post" action="modifiko_shpalljeDQ.php">
					<h3>Modifiko të dhënat e shpalljeve të dërguara me qera</h3>

						Titulli i shpalljes së dërguar
						<input type="text" name="Titulli_shpalljesD" value='<?php echo $Titulli_shpalljesD;?>'   required />
						<br>
						Përshkrimi i shpalljes së dërguar
						<!--<input type="text" name="Pershkrimi_shpalljesD" value='<?php /*echo $Pershkrimi_shpalljesD;*/?>'   required />-->
						<textarea name="Pershkrimi_shpalljesD"  rows="10" cols="30"><?php echo $Pershkrimi_shpalljesD;?></textarea>
						<br>
						<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
						<input name="userfile" type="file" />
						<br>
						<br>
						Çmimi i shpalljes së dërguar
						<input type="text" name="Çmimi_shpalljesD" value='<?php echo $Çmimi_shpalljesD;?>'   required />
						<br >
						Emri i dërguesit
						<input type="text" name="Emri_derguesit" value='<?php echo $Emri_derguesit;?>'   required />
						<br >
						Mbiemri i dërguesit
						<input type="text" name="Mbiemri_derguesit" value='<?php echo $Mbiemri_derguesit;?>'   required />
						<br >
						Email i dërguesit
						<input type="text" name="Email_derguesit" value='<?php echo $Email_derguesit;?>'   required />
						<br >
						
						<input type="hidden" name="ID_shpalljaD" value='<?php echo $_GET['ID_shpalljaD'];?>' />
						<input type="submit" name="modifiko_shpalljeDQ" value="Modifiko" class='button primary'>
		
		
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
