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

if(isset($_POST['shto_Shpallje'])) {	
	$Titulli = $_POST['Titulli'];
	$Pershkrimi = $_POST['Pershkrimi'];
	$Çmimi = $_POST['Çmimi'];
	$ID_Lagjja = $_POST['ID_Lagjja'];
	
	
	$imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
	$name = $_FILES['userfile']['name'];
	
	 $maxsize = 10000000; //set to approx 10 MB
	

	
	
	// checking empty fields
	if(empty($Titulli) || empty($Pershkrimi)|| empty($Çmimi)) {
				
		if(empty($Titulli)) {
			echo "<font color='red'>Fusha e emrit është e zbrazët.</font><br/>";
		}
		
		if(empty($Pershkrimi)) {
			echo "<font color='red'>Fusha e përshkrimit është e zbrazët.</font><br/>";
		}
		
		if(empty($Çmimi)) {
			echo "<font color='red'>Fusha e çmimit është e zbrazët.</font><br/>";
		}
		
		//link to the previous 
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umshqgj_shpalljet(Titulli, Pershkrimi, Çmimi, ID_Lagjja, Foto, emri_fotos) VALUES('$Titulli','$Pershkrimi','$Çmimi', '$ID_Lagjja', '$imgData', '$name')");
		
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
