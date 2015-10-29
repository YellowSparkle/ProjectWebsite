<?php
	$imageArray = array();
	
	
	$dir = new DirectoryIterator("../img/");
	foreach ($dir as $fileinfo) {
    	if (!$fileinfo->isDot()) {
        	$name = $fileinfo->getFilename();
			$namearray = explode(".",$name);
			$imageArray[$namearray[0]] = "../img/" . $name;
			
    	}
	}
	// Returns the relative path to an image.
	function getImg($name){
		global $imageArray;
		if (array_key_exists($name, $imageArray)){
			return $imageArray[$name];
		} else {
			return $imageArray["noimg"];
		}
	}
	
	// Returns an HTML image tag for an image, with supplied size. (sizeY is optional and defaults to sizeX)
	function getImgTag($name, $sizeX, $sizeY = false){
		if (!$sizeY){ $sizeY = $sizeX;}
		return "<img src='" . getImg($name) . "' width='$sizeX' height='$sizeY'>";
	}
?>