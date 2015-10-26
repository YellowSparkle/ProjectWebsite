<?php
$phpusername = "root"; 		//gebruikersnaam
$phppassword = "";			//geen wachtwoord
$hostname    = "localhost";	//dit connect naar 'localhost' (phpMyadmin)
$dbnaam      = "projectdb"; //dit is de databasenaam
// dit gecombineerd heeft alle info om de connectie te maken.

$dbconnect = mysqli_connect($hostname, $phpusername, $phppassword, $dbnaam); //de connectie met de database

if (mysqli_connect_errno()) { /* Check connection */
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
}//dit geeft een error als hij niet kan connecten

?>