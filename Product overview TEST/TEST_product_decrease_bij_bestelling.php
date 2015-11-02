<?php

include "../include.php";
	
	
	$product = 1;//$_POST(*VOERPRODUCTIN*);
	$decrease_stock = 1;//$_POST(*VOERAANTALIN*);
	
    
    $update_stock = "	
    	UPDATE Product 
    	SET In_stock = In_stock - $decrease_stock 
    	WHERE Product_number = $product 
    	AND In_stock > 0;
    	";
	
	$testupdate = mysql_query($update_stock, $link) or die (mysqli_error());
	
	
?>