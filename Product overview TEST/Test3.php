<?php

$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
mysqli_select_db($link,"projectdb")
		or die("Database not available");
		
$klantnummer = "50";

$create_query =	"	
					CREATE TABLE IF NOT EXISTS `Shoppingcart` (	
					`Product_number` int(10) NOT NULL AUTO_INCREMENT, 
				  	`Product_name` varchar(254) NOT NULL,
				  	`Discription` varchar(254) NOT NULL,
					`Price` varchar(254) NOT NULL,
					`In_stock` varchar(254) NOT NULL,
					`Catagory` varchar(254) NOT NULL,
					PRIMARY KEY (`Product_name`)		
					) 
					ENGINE=InnoDB  
					DEFAULT CHARSET=utf8_unicode_ci
					AUTO_INCREMENT=7; 
				";
 
$insert_query = "
				INSERT INTO `Shoppingcart` (	
							`Product_name`, 
							`Discription`, 
							`Price`,
							`In_stock`,
							`Catagory`
							) 
				
				VALUES		(	
							`aoe`, 
							`qq`, 
							`23`,
							`1`,
							`axa`	
							);
				";

	$testupdate1 = mysqli_query($link, $create_query) or die (mysqli_error());
	//$testupdate2 = mysqli_query($link, $insert_query) or die (mysqli_error());

?>
