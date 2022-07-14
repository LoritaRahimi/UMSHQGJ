<?php
//including the database connection file
include("konfiguro.php");

//getting ID_shpallja of the data from url
$ID_shpallja = $_GET['ID_shpallja'];

//deleting the row from table
$rezultati = mysqli_query($lidh,"DELETE FROM umshqgj_shpalljet WHERE ID_shpallja=$ID_shpallja");

//redirecting to the display page (index.php in our case)
header("Location:tabela_fshijShpallje.php");
?>

