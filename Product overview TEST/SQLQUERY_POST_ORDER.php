<?php

$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
mysqli_select_db($link,"projectdb")
		or die("Database not available");
		
$klantnummer = "51";

$create_query =	"	
				CREATE TABLE IF NOT EXISTS  `Shoppingcart_$klantnummer` (
				 			`Product_number` INT( 10 ) NOT NULL AUTO_INCREMENT ,
							`Product_name` VARCHAR( 254 ) NOT NULL ,
						 	`Discription` VARCHAR( 254 ) NOT NULL ,
							`Price` VARCHAR( 254 ) NOT NULL ,
							`In_stock` VARCHAR( 254 ) NOT NULL ,
							`Catagory` VARCHAR( 254 ) NOT NULL ,
							PRIMARY KEY (  `Product_number` )
				)
				";
 
$insert_query = "
				INSERT INTO `Shoppingcart_$klantnummer` (	
							`Product_name`, 
							`Discription`, 
							`Price`,
							`In_stock`,
							`Catagory`
							) 
				
				VALUES		(	
							'aoe', 
							'qq', 
							'23',
							'1',
							'axa'	
							);
				";

	$testupdate1 = mysqli_query($link, $create_query) or die (mysqli_error());
	$testupdate2 = mysqli_query($link, $insert_query) or die (mysqli_error());

?>
