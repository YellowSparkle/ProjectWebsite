<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	
	generateTitle("Registration");
	generateHeader();
?>
	<form method="post" action="Register_page.php" class="tekst">
	
	<ul>
		<li>*Title</li>
		<input type="radio" name="title" value="male" 
<?php
	if (array_key_exists("title", $_POST)){
		if ($_POST["title"] == "male"){
			echo "checked";
		}
	} else {
		echo "checked";
	}

?>
> Mr.<input type="radio" name="title" value="female"
<?php
	if (array_key_exists("title", $_POST)){
		if ($_POST["title"] == "female"){
			echo "checked";
		}
	}

?>
> Ms.
		<li>First name </li>
		<li><input name="first_name" type="text" size="50" value="
<?php
	if (array_key_exists("first_name", $_POST)){
		echo htmlspecialchars($_POST["first_name"]);
	}
?>
"></li>
		<li>Insertion</li>
		<li><input name="insertion" type="text" size="50" value="
<?php
	if (array_key_exists("insertion", $_POST)){
		echo htmlspecialchars($_POST["insertion"]);
	}
?>
"></li>
		<li>*Last name</li>
		<li><input name="last_name" type="text" size="50" value="
<?php
	if (array_key_exists("last_name", $_POST)){
		echo htmlspecialchars($_POST["last_name"]);
	}
?>
"></li>
		<li>*Adress</li>
		<li><input name="adress" type="text" size="50" value="
<?php
	if (array_key_exists("adress", $_POST)){
		echo htmlspecialchars($_POST["adress"]);
	}
?>
"></li>
		<li>*Zip code</li>
		<li><input name="zip" type="text" size="50" value="
<?php
	if (array_key_exists("zip", $_POST)){
		echo htmlspecialchars($_POST["zip"]);
	}
?>
"></li>
		<li>*City</li>
		<li><input name="city" type="text" size="50" value="
<?php
	if (array_key_exists("city", $_POST)){
		echo htmlspecialchars($_POST["city"]);
	}
?>
"></li>
		<li>Phone number</li>
		<li><input name="phone_number" type="number" size="50" name="
<?php
	if (array_key_exists("phone_number", $_POST)){
		echo htmlspecialchars($_POST["phone_number"]);
	}
?>
"></li>
		<li>*E-mail adress</li>
		<li><input name="email" type="text" size="50" value="
<?php
	if (array_key_exists("email", $_POST)){
		echo htmlspecialchars($_POST["email"]);
	}
?>
"></li>
		<li>*Password</li>
		<li><input name="password" type="password" size="50" value="
<?php
	if (array_key_exists("password", $_POST)){
		echo htmlspecialchars($_POST["password"]);
	}
?>
"></li>
		<li>*Re-type password</li>
		<li><input name="password_check" type="password" size="50" value="
<?php
	if (array_key_exists("password_check", $_POST)){
		echo htmlspecialchars($_POST["password_check"]);
	}
?>
"></li>
		<li><input type="reset" value="Begin opnieuw"> <input type="submit" name="versturen" value="Verstuur bericht"></li>
		<p>
			All fields with * must be filled in correctly.
		</p>
	</ul>
	
	</form>
<?php
	generateFoot();
	$keys = array("title", "first_name");
	
?>