<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	include '../include.php';
	//generateTitle("Logging in...", "../index/homepage.php");
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
				generateTitle("Logging in...", "../index/optionpage.php", 2);
				$_SESSION['username'] = $row['First_name'];
			} else {
				generateTitle("Logging in...", "../index/homepage.php?loginerr=true", 2);
			}
		} else {
			generateTitle("Logging in...", "../index/homepage.php?loginerr=true", 2);
		}
		generateHeader(false, false);
		echo '<center>';
		echo "Logging in please wait...<br>";
		echo "<a href='../index/homepage.php'>If nothing happens after 5 seconds, click here to go back.</a></center>";
		generateFoot();
	} elseif (array_key_exists("logout", $_GET)) {
		unset($_SESSION['username']);
		generateTitle("Logging out...", "../index/homepage.php", 2);
		generateHeader(false, false);
		echo '<center>';
		echo "Logging out please wait...<br>";
		echo "<a href='../index/homepage.php'>If nothing happens after 5 seconds, click here to go back.</a></center>";
	}
?>