<?php
//including the database connection file
include("konfiguro.php");

//getting ID_shpalljaD of the data from url
$ID_shpalljaD = $_GET['ID_shpalljaD'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umshqgj_shpalljetederguara WHERE ID_shpalljaD=$ID_shpalljaD");

//redirecting to the display page (index.php in our case)
header("Location:tabela_fshijShpalljeDQ.php");
?>

