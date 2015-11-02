<?php

require_once '../utility/imageprovider.php';
echo '<link href="../utility/assets/css/main.css" rel="stylesheet">';
session_start();
// Site header
function generateHeader($loginbox = true) {
	echo "<div id='banner'>";
	echo getImgTag("logo", 150);
	echo "<hr>";
	echo "</div>";

	// TODO: Login box
	if (array_key_exists("username", $_SESSION)) {
		echo "
			<div class=headlogin>
				Welcome, $_SESSION[username]
   			</div>";
	} elseif ($loginbox) {
		echo "
			<div class=headlogin>
				<form method='post' action='../utility/Login.php'>
							<input type='text' name='email' id='email' value='' placeholder='Email' />
        					<input type='password' name='password' value='' placeholder='Password'>
        			<input href='#' class='button special' type='submit' value='Login'>
        			<!--<p class='button special'><input type='submit' name='commit' value='Login'></p>-->
      			</form>
   			</div>";
	}

}
?>
