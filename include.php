<?php
$phpusername = "root";
$phppassword = "";
$hostname    = "localhost";
$dbnaam      = "projectdb";

$dbconnect = mysqli_connect($hostname, $phpusername, $phppassword, $dbnaam);

if (mysqli_connect_errno()) { /* Check connection */
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}

?>