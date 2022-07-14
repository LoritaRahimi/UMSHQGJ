<html>

	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" /> 
	</head>

<body>

<?php
//including the database connection file
include_once("konfiguro.php");

if(isset($_POST['shto'])) {	
	$perdoruesi = $_POST['perdoruesi'];
	$fjalekalimi = $_POST['fjalekalimi'];
	$email_adresa = $_POST['email_adresa'];
		
	// checking empty fields
	if(empty($perdoruesi) || empty($fjalekalimi) || empty($email_adresa)) {			
		if(empty($perdoruesi)) {echo "<font color='red'>Fusha e përdoruesit është e zbrazët.</font><br/>";}
		if(empty($fjalekalimi)) {echo "<font color='red'>Fusha e fjalëkalimit është e zbrazët.</font><br/>";}
		if(empty($email_adresa)) {echo "<font color='red'>Fusha e email-it është e zbrazët.</font><br/>";}
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		//insert data to database	
		$rezultati = mysqli_query($lidh, "INSERT INTO umshqgj_perdoruesit(perdoruesi,fjalekalimi,email_adresa) VALUES('$perdoruesi','$fjalekalimi','$email_adresa')");
		//display success messpassword
	echo "<script>
         setTimeout(function(){
            window.location.href = 'ballina.php';
         }, 5000);
      </script>";
		 echo"<p><b>   E dhëna është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda. <b></p>";
	
		//echo "<font color='green'>Data added successfully.";
		//echo "<br/><a href='perdoruesit.php'>View Result</a>";
	}
}
?>

</body>
</html>
