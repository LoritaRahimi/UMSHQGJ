<html>
	<head>
		<title>Moduli Administratorit</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
<?php
include('../konfiguro.php');
session_start();
$kontrollo_perdorues=$_SESSION['perdoruesi'];
$sesioni_sql = mysqli_query($lidh,"SELECT ID_perdoruesi, perdoruesi FROM umshqgj_perdoruesit
 WHERE perdoruesi='$kontrollo_perdorues' ");
$rreshti=mysqli_fetch_array($sesioni_sql,MYSQLI_ASSOC);
$kontrollo_perdorues=$rreshti['perdoruesi'];
if(!isset($kontrollo_perdorues))
{
header("Location: index.php");
}

	
    $_SESSION["antari_Id"] = $rreshti['ID_perdoruesi'];
    
	require("dbcontroller.php");
	$dbController = new DBController();
	
	$query = "SELECT DISTINCT Pyetja_Id from umshqgj_votimet WHERE antari_Id = " . $_SESSION["antari_Id"]; 
	$rezultati = $dbController->getIds($query);
	
	$Kushti = "";
	if(!empty($rezultati)) {
	    $Kushti = " WHERE Id NOT IN (" . implode(",", $rezultati) . ")";
    }
    
    $query = "SELECT * FROM `umshqgj_pyetjet` " . $Kushti . " limit 1";
    $Pyetjet = $dbController->runQuery($query);
    
    if(!empty($Pyetjet)) {
?>      
		<div class="question"><?php echo $Pyetjet[0]["Pyetja"]; ?><input type="hidden" name="Pyetja" id="Pyetja" value="<?php echo $Pyetjet[0]["Id"]; ?>" ></div>      
<?php 
        $query = "SELECT * FROM umshqgj_pergjigjjet WHERE Pyetja_Id = " . $Pyetjet[0]["Id"];
        $Pergjigjejet = $dbController->runQuery($query);
        if(!empty($Pergjigjejet)) {
            foreach($Pergjigjejet as $k=>$v) {
                ?>
			<div class="question"><input type="radio" name="Pergjigjeja" class="radio-input" value="<?php echo $Pergjigjejet[$k]["Id"]; ?>" /><?php echo $Pergjigjejet[$k]["Pergjigjeja"]; ?></div>      
<?php 
            }
        }
?>
		<div class="poll-bottom">
			<button id="btnSubmit" onClick="shtoVotim()">Dergo</button>
		</div>
<?php        
    } else {
?>

<div class="error">Votimi perfundoi me sukses!</div>


<?php 
    }
?>