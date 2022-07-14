<?php
//including the database connection file
include("konfiguro.php");

//getting ID_perdoruesi of the data from url
$ID_perdoruesi = $_GET['ID_perdoruesi'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umshqgj_perdoruesit WHERE ID_perdoruesi=$ID_perdoruesi");

//redirecting to the display page (index.php in our case)
header("Location:tabela_fshijPerdorues.php");

?>