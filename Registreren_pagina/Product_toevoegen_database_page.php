<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	
	
	generateTitle("Registration");
	generateHeader();
?>
	
	
	<div class="features">
	<form name="registerform" method="post" action="Register_page.php" class="tekst">
	<ul>
		<li>*Title</li>
		<input type="radio" name="title" value="male"<?php male() ?>> Mr.
			
		<input type="radio" name="title" value="female"<?php female() ?>> Ms.
		
		<li>First name</li>
		<li><input name="product_name" type="text" size="50" value="<?php first_name() ?>"></li>
		
		<li>Insertion</li>
		<li><input name="description" type="text" size="50" value="<?php insertion() ?>"></li>
			
		<li>*Last name</li>
		<li><input name="price" type="text" size="50" value="<?php last_name() ?>"></li>
			
		<li>*Adress</li>
		<li><input name="in_stock" type="text" size="50" value="<?php address() ?>"></li>
			
		<li>*Zip code</li>
		<li><input name="category" type="text" size="50" value="<?php zip() ?>"></li>
		
		
		<li><input type="reset" value="Begin opnieuw"> <input type="submit" name="versturen" value="Verstuur bericht"></li>
		<p>
			All fields with * must be filled in correctly.
		</p>
	</ul>
	</form></div>