<?php

include '../include.php';
require_once '../utility/HTMLGenerator.php';
	generateTitle('redirecting...', "../index/optionpage.php", "1");

	/*$last_name_err = $adress_err = $zip_err = $city_err = $email_err = $password_err = $password_check_err = "";
	$last_name = $adress = $zip = $city = $email = $password = $password_check = "";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["last_name"])) {
	    $last_name_err = "Last name is required";
	  } else {
	    break;
	  }
	
	  if (empty($_POST["adress"])) {
	    $emailErr = "Adress is required";
	  } else {
	    break;
	  }
	
	  if (empty($_POST["zip"])) {
	    $website = "";
	  } else {
	    break;
	  }
	
	  if (empty($_POST["city"])) {
	    $comment = "";
	  } else {
	   	break;
	  }
	
	  if (empty($_POST["email"])) {
	    $genderErr = "Email is required";
	  } else {
	    break;
	  }
	  if (empty($_POST["password"])) {
	    $genderErr = "Password is required";
	  } else {
	    break;
	  }
	  if (empty($_POST["password_check"])) {
	    $genderErr = "Password re-type is required";
	  } else {
	    break;
	  }
	}*/		
	/*if ($value_klantnummer) {
	$result =mysql_query("SELECT customer_number FROM customer WHERE `customer_number` = '$klantnummer'");

	if ($_POST['password']!= $_POST['password_check'])
	 {
	     echo("Oops! Password did not match! Try again. ");
	 }

	}
	else {
	print "Database NOT Found.";
	mysql_close($db_handle);
	}*/
	
		$email = trim($_POST['email']);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) // Als het email adres niet correct is
	{
		print 'Helaas, het email adres is niet correct!';
	}
	
	/*wachtwoord hashen*/	
	$cost = array('cost' => 11);
	
    $hash = password_hash('$_POST[password]', PASSWORD_BCRYPT, $cost);
	
	
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
		'$_POST[adress]',
		'$_POST[zip]',
		'$_POST[city]',
		'$_POST[email]',
		'$_POST[phone_number]',
		'$hash'
		)";
	
	$result =- mysql_query($sql)
		or die($sql);
		
	
		
?>