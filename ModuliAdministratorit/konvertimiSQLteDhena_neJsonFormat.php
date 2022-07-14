<?php
$dbhost ="localhost";
$dbuser = "root";
$dbpass = "";
$dbname ="umshqgj";
//connect to database
$lidh = @mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Couldn't connet to database.");
//get the data from table umshqgj_edhenaadm
$query = "SELECT ballina_Adm FROM umshqgj_edhenaadm";
//execute the query
$rezultati = mysqli_query($lidh, $query);
if(!$rezultati){ echo "Couldn't execute the query"; die();}
else{
 //creates an empty array to hold data
 $edhena = array();
  while($rreshti = mysqli_fetch_assoc($rezultati)){
    $edhena[]=$rreshti;
  }
//  echo json_encode($data, JSON_PRETTY_PRINT);
//it will create file results.json with writing mode.
//you can read more about file handling in PHP here. 
$fp = fopen('test.json', 'w');
//json_enconde($array, $options(optional) is the method to convert array into JSON
fwrite($fp, json_encode($edhena, JSON_PRETTY_PRINT));
echo "Fajlli eshte krijuar";
//close the file
fclose($fp);
}
?>