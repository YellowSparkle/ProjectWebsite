<?php
   	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	
	generateTitle("Order complete");
	generateHeader();
	
	
?>



<html lang="en">
	<head>
		<title>Offer your product</title>
		
	</head>

	<body>
		<?php require_once '../utility/stylesheet.css';?>
<div class="buy_page">
  	<ul class="checkbox">
    <li><input type="checkbox" name="delivery" id="del1" value="in" /><label for="del1">Dine in  </label></li>
    <li><input type="checkbox" name="delivery" id="del2" value="out" /><label for="del2">Carry out  </label></li>
    <li><input type="checkbox" name="delivery" id="del3" value="delivery" /><label for="del3">Delivery  </label></li>
  	</ul>
</div>
<style>/* hier staan buy layouts*/

	div.buy_page 
		{
    		position: absolute;
    		top: 35%;
    		left: 20%;
    		width: 200px;
    		height: 100px;
    		border: 3px solid green;
    	}

/* eind buy layout*/</style>
	</body>
	
</html>
