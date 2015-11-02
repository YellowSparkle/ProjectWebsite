<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Sell your device");
	generateHeader();
	// This is a comment
	var_dump($_GET);
?>

<div id="groupBox">
	<b>Please select your device type.</b>
	<br>
	<br>
	<div id="imageBox">
		<?php
		    echo getImgTag("audioicon", 150);
			echo getImgTag("phoneicon", 150);
			echo getImgTag("computericon", 150);
			echo getImgTag("tvicon", 150);
			echo getImgTag("radioicon", 150);
		?>
	</div>
			<?php /*
		if(array_key_exists("submit", $_GET) && $_GET["submit"] == "Buy a Product") {
			echo "../Shoppingcart/index.php"; 
		} else {
			echo "details.php"; 
		} */
		?>  
	<div id="buttonBox">
		<form id="categoryButtons" class="container" action="../Product_overview_TEST/Zoeken.php" method="post">
			<input class="catButton" type="submit" name="submit" value="Audio">
			<input class="catButton" type="submit" name="submit" value="Phones">
			<input class="catButton" type="submit" name="submit" value="Computer">
			<input class="catButton" type="submit" name="submit" value="Television">
			<input class="catButton" type="submit" name="submit" value="Radio">
		</form>
	</div>
</div>

<?php	
	addStyle("#groupBox {text-align: center;vertical-align:middle;}");
	addStyle("#imageBox {text-align: center;}");
	addStyle("#buttonBox {text-align: center;}");
	addStyle(".catButton {width:145px;}");
	generateFoot();
?>