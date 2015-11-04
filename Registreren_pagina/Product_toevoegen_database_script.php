<?php
    
	include '../include.php';
	require_once '../utility/HTMLGenerator.php';
	generateTitle('redirecting...', "../Registreren_pagina/Product_toevoegen_database_page.php", "3");

	/*gegevens posten*/
	$sql="INSERT INTO Product (
			Product_name,
			Description,
			Price,
			In_stock,
			Category
		)
		
		VALUES(
		'$_POST[product_name]',
		'$_POST[description]',
		'$_POST[price]',
		'$_POST[in_stock]',
		'$_POST[category]'
		)";
		
	echo "Product is being added to the database.";
	
	$result =- mysql_query($sql)
		or die($sql);
?>