<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
<body>
<?php
//including the database connection file
include_once("konfiguro.php");

if(isset($_POST['shto_teDhena'])) {	
	$Titulli_tedhenave = $_POST['Titulli_tedhenave'];
	$Pershkrimi_tedhenave = $_POST['Pershkrimi_tedhenave'];
    $Fajlli = $_POST['Fajlli'];
 	$Pamja_faqes = $_POST['Pamja_faqes'];
	

	
	
	// checking empty fields
	if(empty($Titulli_tedhenave) || empty($Pershkrimi_tedhenave)|| empty($Fajlli) || empty($Pamja_faqes)) {
				
		if(empty($Titulli_tedhenave)) {
			echo "<font color='red'>Fusha e titullit është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi_tedhenave)) {
			echo "<font color='red'>Fusha e përshkrimit është e zbrazët.</font><br/>";
		}
			if(empty($Fajlli)) {
			echo "<font color='red'>Fusha e fajllit është e zbrazët.</font><br/>";
		}
		if(empty($Pamja_faqes)) {
			echo "<font color='red'>Fusha e pamjes së faqes është e zbrazët.</font><br/>";
		}
		
		//link to the previous pMbiTitulli
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umshqgj_tedhenat(Titulli_tedhenave,Pershkrimi_tedhenave, Fajlli, Pamja_faqes) VALUES('$Titulli_tedhenave', '$Pershkrimi_tedhenave', 'images/$Fajlli', '$Pamja_faqes')");
				//display success message
			echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
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
