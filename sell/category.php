<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Sell your device");
	generateHeader();
	// This is a comment
	var_dump($_POST);
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
	<div id="buttonBox">
		<form id="categoryButtons" class="container" action="details.php" method="get">
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