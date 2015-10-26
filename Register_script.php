<?php

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
	
	
		
	$link = mysql_connect("localhost", "root", "")
		or die("Error connecting to server");
	
	mysql_select_db("testdatabase")
		or die("Database not available");
		
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
	
	
		
	$cost = ['cost' => 11,];
	
    $hash = password_hash('$_POST[password]', PASSWORD_BCRYPT, $cost);
	
	
	
	$sql="INSERT INTO customers (
		title, 
		first_name, 
		insertion, 
		last_name, 
		adress, 
		zip, 
		city, 
		email, 
		phone_number, 
		password
		)
		
		VALUES(
		'$_POST[title]',
		'$_POST[first_name]',
		'$_POST[insertion]',
		'$_POST[last_name]',
		'$_POST[adress]',
		'$_POST[zip]',
		'$_POST[city]',

		'$_POST[phone_number]',
		'$hash'
		)";
	
	$result =- mysql_query($sql)
		or die($sql);
		
?>