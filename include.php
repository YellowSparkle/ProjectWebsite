<?php
/*
$phpusername = "Joost";
$phppassword = "Project";
$hostname    = "yellowsparkle.sentientturtle.me";
$dbnaam      = "projectdb";

$dbconnect = mysqli_connect($hostname, $phpusername, $phppassword, $dbnaam);



if (mysqli_connect_errno()) { /* Check connection
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}*/

/*	$link = mysql_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysql_select_db("projectdb")
		or die("Database not available"); */
		
		
		
global class DBController {
	private $host = "yellowsparkle.sentientturtle.me";
	private $user = "Joost";
	private $password = "Project";
	private $database = "projectdb";
	
	function __construct() {
		$conn = $this->connectDB();
		if(!empty($conn)) {
			$this->selectDB($conn);
		}
	}
	
	function connectDB() {
		$conn = mysql_connect($this->host,$this->user,$this->password);
		return $conn;
	}
	
	function selectDB($conn) {
		mysql_select_db($this->database,$conn);
	}
}
?>