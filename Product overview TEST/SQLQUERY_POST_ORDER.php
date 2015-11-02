<?php

include "../include.php";
		
$klantnummer = "51";

$create_query =	"	
				CREATE TABLE IF NOT EXISTS  `Shoppingcart_$klantnummer` (
				 			`Shoppingcart_number` INT( 10 ) NOT NULL AUTO_INCREMENT ,
<<<<<<< HEAD
							`Product_name` VARCHAR( 254 ) NOT NULL ,
=======
							`Product_number` VARCHAR( 254 ) NOT NULL ,
>>>>>>> de05552019bb023e464ccf0a10a2b98046939c10
						 	`Discription` VARCHAR( 254 ) NOT NULL ,
							`Price` VARCHAR( 254 ) NOT NULL ,
							`In_stock` VARCHAR( 254 ) NOT NULL ,
							`Catagory` VARCHAR( 254 ) NOT NULL ,
							PRIMARY KEY (  `Shoppingcart_number` )
				)
				";
				
$insert_query = "
				INSERT INTO `Shoppingcart_$klantnummer` (	
							`Product_name`, 
							`Product_number`, 
							`Discription`, 
							`Price`,
							`In_stock`
							) 
				
				VALUES		(	
							'$product_name_query', 
							'$price_query', 
							'$in_stock_query'	
							);
				";

	$testupdate1 = mysql_query($create_query, $link) or die (mysqli_error());
	$testupdate2 = mysql_query($insert_query, $link) or die (mysqli_error());

/* c.Customer_id
  or.Product_number
  or.Amount*/
	
	$query_nieuw_idee = "	SELECT c.Customer_number, or.Product_number, or.Amount
							FROM Customer c 
							JOIN Order o
							ON c.Customer_number = o.Customer_number
							JOIN Orderrule or
							ON o.Order_number = or.Order_number ;
							"
/*
 $product_name_query = "SELECT Product_name, 
 						FROM Product;	";
 $price_query = 	   "SELECT Price, 
 						FROM Product;	";
 $in_stock_query = 	   "SELECT In_stock, 
 						FROM Product;	";				
*/

?>
