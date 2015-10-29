<?php

$create_query =	"	CREATE TABLE IF NOT EXISTS `Shoppingcart` (	
					`Product_number` int(10) NOT NULL AUTO_INCREMENT, 
				  	`Product_name` varchar(254) NOT NULL,
				  	`Discription` varchar(254) NOT NULL,
					`Price` varchar(254) NOT NULL,
					`In_stock` varchar(254) NOT NULL,
					`Catagory` varchar(254) NOT NULL,
					PRIMARY KEY (`Product_name`)		) 
					ENGINE=InnoDB  
					DEFAULT CHARSET=utf8_unicode_ci
					AUTO_INCREMENT=7; ";
 
$insert_query = "
				INSERT INTO `Shoppingcart` (	
							`Product_name`, 
							`Discription`, 
							`Price`,
							`In_stock`,
							`Catagory`		) 
				VALUES		(	
							`$Product_name`, 
							`$Discription`, 
							`$Price`,
							`$In_stock`,
							`$Catagory`,	); 		" ;


?>
