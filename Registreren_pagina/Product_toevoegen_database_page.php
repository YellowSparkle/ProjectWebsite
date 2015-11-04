<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	
	
	generateTitle("Registration");
	generateHeader();
?>
	
	
	<div class="features">
	<form name="add_product" method="post" action="Product_toevoegen_database_script.php" class="tekst">
	<ul>
		
		<li>Product name</li>
		<li><input name="product_name" type="text" size="50" value=""></li>
		
		<li>Description</li>
		<li><input name="description" type="text" size="50" value=""></li>
			
		<li>Price</li>
		<li><input name="price" type="text" size="50" value=""></li>
			
		<li>In stock</li>
		<li><input name="in_stock" type="text" size="50" value=""></li>
			
		<li>Category</li>
		<input type="radio" name="category" id="Audio" value="Audio">
		<label for="Audio">Audio</label>
		
		<input type="radio" name="category" id="Computers" value="Computers">	
		<label for="Computers">Computers</label>
						
		<input type="radio" name="category" id="Phones" value="Phones">
		<label for="Phones">Phone</label>		

		<input type="radio" name="category" id="Radio" value="Radio">
		<label for="Radio">Radio</label>		

		<input type="radio" name="category" id="Television" value="Television">
		<label for="Television">Television</label>
		
		<li><input type="reset" value="Reset"> <input type="submit" name="versturen" value="Add to database"></li>
	</ul>
	</form></div>