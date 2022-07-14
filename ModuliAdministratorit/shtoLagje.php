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

if(isset($_POST['shtoLagje'])) {	
	$Emri_lagjes = $_POST['Emri_lagjes'];
	
		
	// checking empty fields
	if(empty($Emri_lagjes)) {			
		if(empty($Emri_lagjes)) {echo "<font color='red'>Emri i lagjes është i zbrazët.</font><br/>";}
		
		//link to the previous programi
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umshqgj_lagjet(Emri_lagjes) VALUES('$Emri_lagjes')");
		//display success messprogrami
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='ballina.php'>View Result</a>";
		echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
	}
}
?>
</body>
</html>
