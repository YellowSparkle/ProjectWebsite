<?php

//require '../include.php';

$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
mysqli_select_db($link,"projectdb")
		or die("Database not available");
	
	
	$product = $_POST(*VOERPRODUCTIN*);
	$decrease_stock = $_POST(*VOERAANTALIN*);
	
    
    $update_stock = "	
    	UPDATE Product 
    	SET In_stock = In_stock - $decrease_stock 
    	WHERE Product_number = $product 
    	AND In_stock > 0;
    	";
	
	$testupdate = mysqli_query($link, $update_stock) or die (mysqli_error());
	
	
?>