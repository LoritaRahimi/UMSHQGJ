<html>
	<head>
		<title>Moduli Përdoruesit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

<body>
<?php
//including the database connection file
include_once("konfiguro.php");

if(isset($_POST['dergo_shpallje'])) {	
	$Titulli_shpalljesD = $_POST['Titulli_shpalljesD'];
	$Pershkrimi_shpalljesD = $_POST['Pershkrimi_shpalljesD'];
	$Çmimi_shpalljesD = $_POST['Çmimi_shpalljesD'];
	$Emri_derguesit = $_POST['Emri_derguesit'];
	$Mbiemri_derguesit = $_POST['Mbiemri_derguesit'];
	$Email_derguesit = $_POST['Email_derguesit'];
	
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$emri_fotosShpalljesD = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($Titulli_shpalljesD) || empty($Pershkrimi_shpalljesD)|| empty($Çmimi_shpalljesD) || empty($Emri_derguesit) || empty($Mbiemri_derguesit) || empty($Email_derguesit)) {
				
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
		
		//link to the previous pMbiemri
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umshqgj_shpalljetederguara(Titulli_shpalljesD, Pershkrimi_shpalljesD, Foto_shpalljesD, emri_fotosShpalljesD, Çmimi_shpalljesD, Emri_derguesit, Mbiemri_derguesit, Email_derguesit) VALUES('$Titulli_shpalljesD','$Pershkrimi_shpalljesD','$imgData','$emri_fotosShpalljesD', '$Çmimi_shpalljesD', '$Emri_derguesit', '$Mbiemri_derguesit', '$Email_derguesit')");
		
		//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
		 
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
	}
}
?>

</body>
</html>
