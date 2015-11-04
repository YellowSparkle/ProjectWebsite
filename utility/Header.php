<?php

require_once '../utility/imageprovider.php';
echo '<link href="../utility/assets/css/main.css" rel="stylesheet">';
session_start();
// Site header
function generateHeader($loginbox = true, $logoutbox = true, $cartflip = NULL) {
	echo "<div id='banner'>";
	echo getImgTag("logo", 150);
	echo "<hr>";
	echo "</div>";
	if (isset($_SESSION['username'])){
		echo "<input id=homebutton class='button special' type=button name='Home' value='Home' onclick=\"window.location.href='../sell/category.php'\">";
	} else {
		echo "<input id=homebutton class='button special' type=button name='Home' value='Home' onclick=\"window.location.href='../index/homepage.php'\">";
		if (!isset($_SESSION['mustlogin'])){
			echo "<meta http-equiv='refresh' content='0; url=../index/homepage.php' />";
			$_SESSION["mustlogin"] = true;
		}
	}
	// test img ( xavier )//
	
		echo "<div class='vierkant1'>";
		echo getImgTag("Vierkant", 120);
		echo "</div>";
		
		echo "<div class='vierkant2'>";
		echo getImgTag("Vierkant", 100);
		echo "</div>";
	
		echo "<div class='vierkant3'>";
		echo getImgTag("Vierkant", 80);
		echo "</div>";
		
		echo "<div class='vierkant4'>";
		echo getImgTag("Vierkant", 60);
		echo "</div>";
		
		echo "<div class='vierkant5'>";
		echo getImgTag("Vierkant", 40);
		echo "</div>";
		
		echo "<div class='vierkant6'>";
		echo getImgTag("Vierkant", 120);
		echo "</div>";
		
		echo "<div class='vierkant7'>";
		echo getImgTag("Vierkant", 100);
		echo "</div>";
		
		echo "<div class='vierkant8'>";
		echo getImgTag("Vierkant", 80);
		echo "</div>";
		
		echo "<div class='vierkant9'>";
		echo getImgTag("Vierkant", 60);
		echo "</div>";
		
		echo "<div class='vierkant10'>";
		echo getImgTag("Vierkant", 40);
		echo "</div>";
	// end test img ( xavier ) //

	// TODO: Login box
	if (array_key_exists("username", $_SESSION) & $logoutbox) {
		$echodata = "
			<div class=headlogin>
				<form method='get' action='../utility/Login.php'>
				Welcome, $_SESSION[username]<br>
				<input href='#' class='button special' type='submit' value='Logout'>
				<input type=hidden name='logout' value='true'>";
			if (isset($cartflip)){
				if($cartflip){
					if (isset($_SESSION['category'])){
					
						$echodata .= "<input id=cartbutton class='button special' type=button name='Cart' value='Back' onclick=\"window.location.href='../Product_overview_TEST/Zoeken.php?submit=true&category=$_SESSION[category]'\">";
					}
				} else {
					$countstring = "";
						if (isset($_SESSION['cart_item'])){
							if (!empty($_SESSION['cart_item'])){
								$countstring = " (" . count($_SESSION['cart_item']) . ")";
							}
						}
					$echodata .= "<input id=cartbutton class='button special' type=button name='Cart' value='Shopping cart" . $countstring . "' onclick=\"window.location.href='../Shoppingcart/index.php'\">";
				}
			}
   			echo $echodata . "</form></div>";
	} elseif ($loginbox) {
		echo "
			<div class=headlogin>
				<form method='post' action='../utility/Login.php'>
							<input type='text' name='email' id='email' value='' placeholder='Email' />
        					<input type='password' name='password' value='' placeholder='Password'>
        			<input href='#' class='button special' type='submit' value='Login'> <br>
        			<a href='../Registreren_pagina/Register_page.php'><font size='2'>Don't have an account? Register here!</font></a></label>
      			</form>
   			</div>";
	}

}
?>
