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
		<li><input name="first_name" type="text" size="50" value="<?php first_name() ?>"></li>
		
		<li>Insertion</li>
		<li><input name="insertion" type="text" size="50" value="<?php insertion() ?>"></li>
			
		<li>*Last name</li>
		<li><input name="last_name" type="text" size="50" value="<?php last_name() ?>"></li>
			
		<li>*Adress</li>
		<li><input name="address" type="text" size="50" value="<?php address() ?>"></li>
			
		<li>*Zip code</li>
		<li><input name="zip" type="text" size="50" value="<?php zip() ?>"></li>
			
		<li>*City</li>
		<li><input name="city" type="text" size="50" value="<?php city() ?>"></li>
			
		<li>Phone number</li>
		<li><input name="phone_number" type="text" size="50" name="<?php phone_number() ?>"></li>
			
		<li>*E-mail adress</li>
		<li><input name="email" type="text" size="50" value="<?php email() ?>"></li>
			
		<li>*Password</li>
		<li><input name="password" type="password" size="50" value="<?php password() ?>"></li>
		
		<li>*Re-type password</li>
		<li><input name="password_check" type="password" size="50" value="<?php password_check() ?>"></li>
		
		<br>
		
		<li><input type="reset" value="Begin opnieuw"> <input type="submit" name="versturen" value="Verstuur bericht"></li>
		<p>
			All fields with * must be filled in correctly.
		</p>
	</ul>
	</form></div>