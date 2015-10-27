<!DOCTYPE html>

<?php
require_once "../utility/HTMLGenerator.php";
 ?>


<html>
	<head>
		<title>Make your choice.</title>
	</head>
	<link rel="stylesheet" type="text/css" href="../utility/stylesheet.css">
<body>

 
 <div id="buttonBox2">
		<form id="categoryButtons" class="container" action="../sell/category.php" method="get">
			<div class=sell_left>
				<p><img src="../img/sellimage.jpg" width="256px" height="177px" alt=""></p>
				<input class="catButton" type="submit" name="submit" value="Sell a Product">
			</div>
			<div class=buy_right>
				<p><img src="../img/buyimage.jpg" width="256px" height="177px" alt=""></p>
				<input class="catButton" type="submit" name="submit" value="Buy a Product">
				</div>
		</form>
	</div> 

   
</body>
</html>

<?php
//knoppen opmaak
	addStyle("#buttonBox {text-align: center;}");
	addStyle(".catButton {width:145px;}");
	generateFoot();
?>

