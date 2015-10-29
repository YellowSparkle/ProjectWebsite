<?php

	require_once '../utility/imageprovider.php';
	// Site header
	session_start();
	function generateHeader($loginbox = true){
		echo "<div id='header'>";
		echo getImgTag("logo", 150);
		echo "<hr>";
		echo "</div>";
		

		// TODO: Login box
		if($loginbox){
			echo "
				<link rel='stylesheet' type='text/css' href='../utility/stylesheet.css'>
				<div class=headlogin>
				<form method='post' action='../utility/Login.php'>
					<table>
        				<tr>
       						<td><input type='text' name='login' value='' placeholder='Email'></td>
        					<td><input type='password' name='password' value='' placeholder='Password'></td>        
        				</tr>
        			</table>
        			<p class='submit'><input type='submit' name='commit' value='Login'></p>
      			</form>
   			</div>";
		}

	}
	$username = "Joeri";
	echo "Welcome {$username}"

?>
