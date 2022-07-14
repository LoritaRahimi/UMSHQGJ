<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese 
username dhe passwordi qe ka shkruar useri ne Index.php 
gjindet ne db ne MySQL */
	session_start();
	include("konfiguro.php"); //Mundeson lidhjen me databazen e krijuar
	$gabimi = ""; //Variabel për ruajtjen e gabimeve tona.
	if(isset($_POST["shto"]))
	{
		if(empty($_POST["perdoruesi"]) || empty($_POST["fjalekalimi"]))
		{
			$gabimi = "Kerkohet mbushja e te gjitha fushave!.";
		}else
		{
			// Definimi i $perdoruesi dhe $fjalekalimi
			$perdoruesi=$_POST['perdoruesi'];
			$fjalekalimi=$_POST['fjalekalimi'];
			//Kontrollo username dhe password prej database
			$sql="SELECT ID_perdoruesi FROM umshqgj_perdoruesit WHERE 
			perdoruesi='$perdoruesi' 
			and fjalekalimi='$fjalekalimi'";
			$rezultati=mysqli_query($lidh,$sql);
			$rreshti=mysqli_fetch_array($rezultati,MYSQLI_ASSOC);
			/*Nese username dhe password ekzistojne ne databaze, atehere 
			krijo nje sesion. Perndryshe shfaq nje (echo) error.*/
			if(mysqli_num_rows($rezultati) == 1)
			{
				$_SESSION['perdoruesi'] = $perdoruesi; // Fillimi i sesionit
				header("location: admin_home.php"); // hapet faqja pas logimit me sukses
			}else
			{
				$gabimi = "Username ose Passwordi gabim.";
			}
		}
	}
?>