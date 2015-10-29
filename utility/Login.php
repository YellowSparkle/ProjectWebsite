<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	include '../include.php';
	if (array_key_exists("login", $_POST) && (array_key_exists("password", $_POST))){
		$username = $_POST["login"];
		$password = $_POST["password"];
		
		$sql=" 
		SELECT * 
		FROM Customer 
		WHERE Email='".$username."' ";
		$result=mysql_query($sql);		
		$count=mysql_num_rows($result);
		if($count==1){
			$row = mysql_fetch_assoc($result);
			if (password_verify($password,$row['Password'])){
				generateTitle("Logging in...", "../index/optionpage.php", "1"); 
			} else {	
				generateTitle("Logging in...", "../index/homepage.php?error=true", "1");
			}
		} else {
			generateTitle("Logging in...", "../index/homepage.php?error=true", "1");
		}
	echo "Logging in please wait...<br>";
	echo "<a href='../index/homepage.php'>If nothing happens after 5 seconds, click here to go back.</a>";
	generateFoot();
	}
?>