<?php
    session_start();
    require("dbcontroller.php");
	$dbController = new DBController();
	
	$Pergjigjeja_Id  = $_POST['Pergjigjeja'];
	$Pyetja_Id = $_POST['Pyetja'];
	
	$query = "INSERT INTO umshqgj_votimet(Pyetja_Id,Pergjigjeja_Id,antari_Id) VALUES ('" . $Pyetja_Id ."','" . $Pergjigjeja_Id . "','" . $_SESSION["antari_Id"] . "')";
    $insert_id = $dbController->insertQuery($query);
    
    if(!empty($insert_id)) {
        $query = "SELECT * FROM umshqgj_pergjigjjet WHERE Pyetja_Id = " . $Pyetja_Id;
        $Pergjigjeja = $dbController->runQuery($query);
    }
    
    if(!empty($Pergjigjeja)) {
?>        
        <div class="poll-heading"> Rezultati </div> 
<?php
        $query = "SELECT count(Pergjigjeja_Id) as total_count FROM umshqgj_votimet WHERE Pyetja_Id = " . $Pyetja_Id;
        $total_rating = $dbController->runQuery($query);

        foreach($Pergjigjeja as $k=>$v) {
            $query = "SELECT count(Pergjigjeja_Id) as Pergjigjeja_count FROM umshqgj_votimet WHERE Pyetja_Id = " .$Pyetja_Id . " AND Pergjigjeja_Id = " . $Pergjigjeja[$k]["Id"];
            $Pergjigjeja_rating = $dbController->runQuery($query);
            $Pergjigjejet_count = 0;
            if(!empty($Pergjigjeja_rating)) {
                $Pergjigjejet_count = $Pergjigjeja_rating[0]["Pergjigjeja_count"];
            }
            $perqindja = 0;
            if(!empty($total_rating)) {
                $perqindja = ( $Pergjigjejet_count / $total_rating[0]["total_count"] ) * 100;
                if(is_float($perqindja)) {
                    $perqindja = number_format($perqindja,2);
                }
            }
            
?>
		<div class="answer-rating"> <span class="answer-text"><?php echo $Pergjigjeja[$k]["Pergjigjeja"]; ?></span><span class="answer-count"> <?php echo $perqindja . "%"; ?></span></div>      
<?php 
        }
    }
?>
<div class="poll-bottom">
	<button class="next-link" onClick="shfaq_votimin();">Vazhdo</button>
</div>