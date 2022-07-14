<?php
//including the database connection file
include("konfiguro.php");

//getting ID_tedhenat of the data from url
$ID_tedhenat = $_GET['ID_tedhenat'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umshqgj_tedhenat WHERE ID_tedhenat=$ID_tedhenat");

//redirecting to the display page 
header("Location:tabela_fshijTedhena.php");
?>

