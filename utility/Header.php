<?php
	require_once '../utility/imageprovider.php';
	// Site header
	function generateHeader(){
		echo "<div id='header'>";
		echo getImgTag("logo", 150);
		echo "<hr>";
		echo "</div>";
		// TODO: Login box
	}

?>