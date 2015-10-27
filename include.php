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

	$link = mysql_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysql_select_db("projectdb")
		or die("Database not available");  	

?>