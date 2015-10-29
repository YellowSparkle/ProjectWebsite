<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	include_once "../stylesheet.css";
	generateTitle("Order complete");
	generateHeader();
	
	
?>



<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="../utility/stylesheet.css">
		<title>Offer your product</title>
		
<!--	<style>/* hier staan buy layouts*/
	div.basic
		{
		  position: absolute;   
		  top: 50%;
		  left: 33%; 
		}
	</style>
-->
	</head>

	<body>

<div class="basic">
  	<ul class="checkbox">
  		Product includes a working:
    <li><input type="checkbox" name="delivery" id="del1" value="in" /><label for="del1">Charger</label></li>
    <li><input type="checkbox" name="delivery" id="del2" value="out" /><label for="del2">Powercable</label></li>
    <li><input type="checkbox" name="delivery" id="del3" value="delivery" /><label for="del3">Battery</label></li>
    <li><input type="checkbox" name="delivery" id="del1" value="in" /><label for="del4"></label>Screen</li>
  	</ul>
</div>

	</body>
	
</html>
