<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	
	if (array_key_exists("login", $_POST) && (array_key_exists("pass", $_POST))){
		$username = $_POST["login"];
		$password = $_POST["pass"];
		
		// TODO: Database magic here.
		
		// TODO: Session magic here.
		
		generateTitle("Logging in...");
	} else {
		generateTitle("Logging in...", "../index/homepage.php");
	}
	generateHeader();
	echo "Logging in please wait...<br>";
	echo "<a href='../index/homepage.php'>If nothing happens after 5 seconds, click here to go back.</a>";
	generateFoot();
?>