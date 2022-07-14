<?php
/* Kontrollon sesionin */
include('konfiguro.php');
session_start();
$kontrollo_perdorues=$_SESSION['perdoruesi'];
$sesioni_sql = mysqli_query($lidh,"SELECT perdoruesi FROM umshqgj_perdoruesit
 WHERE perdoruesi='$kontrollo_perdorues' ");
$rreshti=mysqli_fetch_array($sesioni_sql,MYSQLI_ASSOC);
$kontrollo_perdorues=$rreshti['perdoruesi'];
if(!isset($kontrollo_perdorues))
{
header("Location: index.php");
} ?>