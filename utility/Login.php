<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	include '../include.php';
	generateTitle("Logging in...");
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
        		echo "Login Successful";
				$_SESSION['username'] = $row['First_name'];
			} else {
				echo "Login Unsuccesful! 0_0\n";
			}
		}
	generateHeader();
	echo '<center><meta http-equiv="refresh" content="5;url=../index/optionpage.php" />'; //Auto redirect
	echo "Logging in please wait...<br>";
	echo "<a href='../index/optionpage.php'>If nothing happens after 5 seconds, click here to go back.</a></center>";
	generateFoot();
	}
?>