<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	
	
	generateTitle("Registration");
	generateHeader();
?>
	
	
	<div class="features">
	<form name="registerform" method="post" action="Register_page.php" class="tekst">
	<ul>
		
		<li>First name</li>
		<li><input name="product_name" type="text" size="50" value=""></li>
		
		<li>Insertion</li>
		<li><input name="description" type="text" size="50" value=""></li>
			
		<li>*Last name</li>
		<li><input name="price" type="text" size="50" value=""></li>
			
		<li>In stock</li>
		<li><input name="in_stock" type="text" size="50" value=""></li>
			
		<li>Category</li>
		<input type="radio" name="category" value="Audio"> Audio
		<input type="radio" name="category" value="Computers"> Computers
		<input type="radio" name="category" value="Phones"> Phones
		<input type="radio" name="category" value="Radio"> Radio
		<input type="radio" name="category" value="Television"> Television
		
		<li><input type="reset" value="Reset"> <input type="submit" name="versturen" value="Add to database"></li>
		<p>
			All fields with * must be filled in correctly.
		</p>
	</ul>
	</form></div>