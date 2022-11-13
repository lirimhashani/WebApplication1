<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "umpn";
	private $lidh;
	
	function __construct() {
		$this->lidh = $this->connectDB();
	}
	
	function connectDB() {
		$lidh = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $lidh;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->lidh,$query);
		while($row=mysqli_fetch_array($result)) {
			$resultset[] = $row;
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
	    $result = mysqli_query($this->lidh,$query);
	    while($row=mysqli_fetch_array($result)) {
	        $resultset[] = $row[0];
	    }
	    if(!empty($resultset))
	        return $resultset;
	}
}
?>