<?php
//including the database connection file
include("konfiguro.php");

//getting ID_Lagjja of the data from url
$ID_Lagjja = $_GET['ID_Lagjja'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umshqgj_lagjet WHERE ID_Lagjja=$ID_Lagjja");

//redirecting to the display page (index.php in our case)
header("Location:tabela_fshijLagje.php");
?>

