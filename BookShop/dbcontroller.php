<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "BookShop";
	
	function __construct() {
		$con = $this->connectDB();
		if(!empty($con)) {
			$this->selectDB($con);
		}
	}
	
	function connectDB() {
		$con = mysql_connect($this->host,$this->user,$this->password);
		return $con;
	}
	
	function selectDB($con) {
		mysql_select_db($this->database,$con);
	}
	
	function runQuery($query) {
		$result = mysql_query($query);
		while($row=mysql_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>