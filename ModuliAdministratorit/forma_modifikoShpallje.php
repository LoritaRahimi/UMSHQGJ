<?php
	include("kontrollo.php");	
?>

<?php
// including the database connection file
include_once("konfiguro.php");

if(isset($_POST['modifiko']))
{	
	$ID_shpallja = $_POST['ID_shpallja'];
	$Titulli=$_POST['Titulli'];
	$Pershkrimi=$_POST['Pershkrimi'];
	$Çmimi=$_POST['Çmimi'];			
	$ID_Lagjja=$_POST['ID_Lagjja'];	
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	$maxsize = 10000000; //set to approx 10 MB
	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi) || empty($Çmimi)) {	
			
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha e titullit është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha e përshkrimit është e zbrazët.</font><br/>";
		}
		
		if(empty($Çmimi)) {
			echo "<font color='red'>Fusha e çmimit është e zbrazët.</font><br/>";
		}		
	} else {	
		//updating the table
		$rezultati = mysqli_query($lidh,"UPDATE umshqgj_shpalljet SET Titulli='$Titulli',Pershkrimi='$Pershkrimi',Çmimi='$Çmimi', ID_Lagjja='$ID_Lagjja', Foto='$imgData', emri_fotos='$name' WHERE ID_shpallja=$ID_shpallja");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: ballina.php");
	}
}
?>
<?php
//getting ID_shpallja from url
$ID_shpallja = $_GET['ID_shpallja'];

//selecting data associated with this particular ID_Studenti
$rezultati = mysqli_query($lidh,"SELECT * FROM umshqgj_shpalljet WHERE ID_shpallja=$ID_shpallja");

while($rez= mysqli_fetch_array($rezultati))
{
	$Titulli = $rez['Titulli'];
	$Pershkrimi = $rez['Pershkrimi'];
	$Çmimi = $rez['Çmimi'];	
	$ID_Lagjja = $rez ['ID_Lagjja'];
	
	
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
					
							<form enctype="multipart/form-data"  name="form1" method="post" action="forma_modifikoShpallje.php">
							<h3>Modifiko të dhënat e shpalljes</h3>
							<br>
							<div class="row gtr-uniform">
							<div class="table-wrapper">
								<table style="color: black;">
									<tr>
										<select name="ID_Lagjja">
											<option selected="selected" required>Zgjedh Lagjen</option>
												<?php
												$rez=mysqli_query($lidh,"SELECT * FROM umshqgj_lagjet");
												while($rreshti=$rez->fetch_array())
												{
													?>
													<option value="<?php echo $rreshti['ID_Lagjja']; ?>"><?php echo $rreshti['Emri_lagjes']; ?></option>
													<?php
												}
												?>
										</select><br/>
									</tr>
									<tr> 
										<td>Titulli</td>
										<td><input type="text" name="Titulli" value='<?php echo $Titulli;?>' required /></td>
									</tr>
									<tr> 
										<td>Pershkrimi</td>
										<td><input type="text" name="Pershkrimi" value='<?php echo $Pershkrimi;?>' required /></td>
									</tr>
									<tr> 
										<td>Çmimi</td>
										<td><input type="text" name="Çmimi" value='<?php echo $Çmimi;?>' required /></td>
									</tr>			
									<tr>
									<td ><input type="hidden" name="MAX_FILE_SIZE" value="10000000" /></td>
									<td><input name="userfile" type="file" /></td>
									</tr>
								<tr>
							<td>	<input type="hidden" name="ID_shpallja" value='<?php echo $_GET['ID_shpallja'];?>' /></td>
							<td>	<input type="submit" name="modifiko" value="Modifiko" class='button primary'></td>
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
