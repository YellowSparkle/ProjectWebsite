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

	// TODO: Login box
	if (array_key_exists("username", $_SESSION) & $logoutbox) {
		$echodata = "
			<div class=headlogin>
				<form method='get' action='../utility/Login.php'>
				Welcome, $_SESSION[username]<br>
				<input href='#' class='button special' type='submit' value='Logout'>
				<input type=hidden name='logout' value='true'>
				</form>";
			if (isset($cartflip)){
				if($cartflip){
					if (isset($_SESSION['category'])){
						$echodata .= "<input type=button name='Cart' value='Back' onclick=\"window.location.href='../Product_overview_TEST/Zoeken.php?submit=true&category=$_SESSION[category]'\">";
					}
				} else {
					$echodata .= "<input type=button name='Cart' value='Shopping cart' onclick=\"window.location.href='../Shoppingcart/index.php'\">";
				}
			}
   			echo $echodata . "</div>";
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
