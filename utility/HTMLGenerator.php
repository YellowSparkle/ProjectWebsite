<?php
	$generatedStyle = array();
	// Generates HTML5 head.
	function generateTitle($titleName){
		echo "<!DOCTYPE html>";
		echo "<html>";
		echo "  <head>";
		echo "    <meta charset='UTF-8'>";
		echo "	    <title>$titleName</title>";
		echo "  </head>";
		echo "  <body>";
	}
	
	// Adds a style to the current document.
	function addStyle($style){
		global $generatedStyle;
		array_push($generatedStyle, $style);
	}

	
	// Generates HTML5 footer and adds styles to the document
	function generateFoot(){
		global $generatedStyle;
		echo " 	</body>";
		echo "<style>";
		foreach ($generatedStyle as $value) {
			echo $value;
		}
		echo "</style>";
		echo "</html>";
	}

?>