<?php

	include '../include.php';
	require_once '../utility/HTMLGenerator.php';
	generateTitle('redirecting...', "../index/homepage.php", "3");

	/*wachtwoord hashen*/	
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
	
	
	/*gegevens posten*/
	$sql="INSERT INTO Customer (
		Title, 
		First_name, 
		Insertion, 
		Last_name, 
		Adress, 
		Zip, 
		City, 
		Email, 
		Tel_number, 
		Password
		)
		
		VALUES(
		'$_POST[title]',
		'$_POST[first_name]',
		'$_POST[insertion]',
		'$_POST[last_name]',
		'$_POST[address]',
		'$_POST[zip]',
		'$_POST[city]',
		'$_POST[email]',
		'$_POST[phone_number]',
		'$hash'
		)";
	
	$result =- mysql_query($sql)
		or die($sql);
		
	
?>