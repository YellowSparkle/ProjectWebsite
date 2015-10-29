<?php

//require '../include.php';

$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
mysqli_select_db($link,"projectdb")
		or die("Database not available");
	
	
	$product = $_POST(*VOERPRODUCTIN*);
	
    
    $test = "	
    	UPDATE Product 
    	SET In_stock = In_stock - 1 
    	WHERE Product_number = $product;
    	";
	
	$testupdate = mysqli_query($link, $test) or die (mysqli_error());
	
	
?>