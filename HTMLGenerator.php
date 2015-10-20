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
	
	// Generates HTML5 footer
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
	
	function addStyle($style){
		global $generatedStyle;
		array_push($generatedStyle, $style);
	}


?>