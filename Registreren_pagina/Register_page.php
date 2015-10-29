<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	require_once "../include.php";
	session_start();
	
	generateTitle("Registration");
	generateHeader();
?>
	<form name="registerform" method="post" action="Register_page.php" class="tekst">
	
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
		<li><input name="address" type="text" size="50" value="
<?php
	if (array_key_exists("address", $_POST)){
		echo htmlspecialchars($_POST["address"]);
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
		<li><input name="phone_number" type="text" size="50" name="
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
	$keys = array("title", "first_name", "last_name", "address", "zip", "city", "email", "password", "password_check");
	$errorkeys = array();
	$continue = true;
	
	foreach ($keys as $value) {
		if(array_key_exists($value, $_POST)){
			if ($_POST[$value] == ""){
				$continue = false;
				array_push($errorkeys, $value);
			}
		} else {
			array_push($errorkeys, $value);
			$continue = false;
		}
	}
	if ($continue){
		if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || 
		!$_POST["password"] == $_POST["password_check"]){
			$continue = false;
		}
	
	}
	if ($continue){
		echo "<script>";
		echo "document.registerform.action='Register_script.php';";
		echo "document.registerform.submit();";
		echo "</script>";
	} elseif(array_key_exists("registererror", $_SESSION) && $_SESSION["error"] == true) {
		echo "<br>";
		echo "<font color='red'>";
		$passcheck = true;
		foreach ($errorkeys as $value) {
			switch($value){
				case "title":
					echo "* Gender selection is required.<br>";
					break;
				case "first_name":
					echo "* First name is required<br>";
					break;
				case "last_name":
					echo "* Last name is required<br>";
					break;
				case "address":
					echo "* Address is required<br>";
					break;
				case "zip":
					echo "* Zip code is required<br>";
					break;
				case "city":
					echo "* City is required<br>";
					break;
				case "email":
					echo "* Email is required<br>";
					break;
				case "password":
				case "password_check":
					if ($passcheck){
						echo "* Password is required<br>";
						$passcheck = false;
					}
					break;
			}
		}
		echo "</font>";
	} else {
		$_SESSION["registererror"] = true;
	}
	
	generateFoot();
?>