<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "umshqgj";
	private $lidh;
	
	function __construct() {
		$this->lidh = $this->connectDB();
	}
	
	function connectDB() {
		$lidh = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $lidh;
	}
	
	function runQuery($query) {
		$rezultati = mysqli_query($this->lidh,$query);
		while($rreshti=mysqli_fetch_array($rezultati)) {
			$resultset[] = $rreshti;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function insertQuery($query) {
	    mysqli_query($this->lidh, $query);
	    $insert_id = mysqli_insert_id($this->lidh);
	    return $insert_id;
	}
	
	function getIds($query) {
	    $rezultati = mysqli_query($this->lidh,$query);
	    while($rreshti=mysqli_fetch_array($rezultati)) {
	        $resultset[] = $rreshti[0];
	    }
	    if(!empty($resultset))
	        return $resultset;
	}
}
?>