<?php
/*$phpusername = "root";
$phppassword = "";
$hostname    = "localhost";
$dbnaam      = "projectdb";

$dbconnect = mysql_connect($hostname, $phpusername, $phppassword, $dbnaam);



if (mysqli_connect_errno()) { /* Check connection 
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}*/

	$link = mysql_connect("http://yellowsparkle.sentientturtle.me/phpmyadmin/localhost", "Joost", "Project")
		or die("Error connecting to server");
	
	mysql_select_db("projectdb")
		or die("Database not available");  	

?>