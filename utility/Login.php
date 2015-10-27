<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	include '../include.php';
	
	if (array_key_exists("login", $_POST) && (array_key_exists("password", $_POST))){
		$username = $_POST["login"];
		$password = $_POST["password"];}
		
		// TODO: Database magic here.
		
		
		$sql=" 
		SELECT * 
		FROM Customer 
		WHERE Email='".$username."' ";
		$result=mysql_query($sql);		
		/*if ($sql==TRUE) {
			$result1=1;
		}
		if ($sql==FALSE){
			$result1=0;
		}*/
		var_dump($result);
		$count=mysql_num_rows($result);
		if($count==1){
			$row = mysql_fetch_assoc($result);
			if ($password == $row['Password']){ 
        	echo "Login Successful";
			 
			 
			 /*password_verify('$_POST(login)', $row['Password'])){
				session_register("username");
				session_register("password");
				echo "Login Successful";*/
			} else {
				echo "Login Unsuccesful! 0_0";
			}
		}

		
		
/*		if (password_verify('$_POST(login)', '$hash')) {
	    echo 'Password is valid!';
		} else {
	    echo 'Invalid password.';
		}
		
		
		
		// TODO: Session magic here.
		
		generateTitle("Logging in...");
	} else {
		generateTitle("Logging in...", "../index/homepage.php");
	}
	generateHeader();
	echo "Logging in please wait...<br>";
	echo "<a href='../index/homepage.php'>If nothing happens after 5 seconds, click here to go back.</a>";
	generateFoot();*/
	
?>