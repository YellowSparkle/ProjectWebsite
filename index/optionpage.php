<?php
require_once "../utility/HTMLGenerator.php";
require_once '../utility/Header.php';
generateTitle("Make your choice.");
generateHeader();
 ?>

 
<div id="buttonBox2">
	<form id="categoryButtons" class="container" action="../sell/category.php" method="get">
		
		<div class="sell_left">
			<img class=optionimage src="../img/sellimage.jpg" width="400px" height="350px" alt="" border=2>
		</div>
		
		<div class="buttonleft">
			<input class="button special" type="submit" name="submit" value="Sell a Product">
		</div>
		
		<div class="buy_right">
			<img class=optionimage src="../img/buyimage.jpg" width="400px" height="350px" alt="" border=2>
		</div>
		
		<div class="buttonright">
			<input class="button special" type="submit" name="submit" value="Buy a Product">
		</div>
		
	</form>
</div> 



<?php
	addStyle("#buttonBox {text-align: center;}");
	addStyle(".catButton {width:145px;}");
	generateFoot();
?>

