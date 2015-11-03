<?php
require_once "../utility/HTMLGenerator.php";
require_once "../utility/Header.php";
generateTitle("Sell your device");
generateHeader();
// This is a comment
$desto = "location.href='../Product_overview_TEST/Zoeken.php";
if (isset($_GET['submit'])) {
	if ($_GET['submit'] == "Sell a Product") {
		$desto = "location.href='product_buy_page.php";
	}
}
?>

<div id="groupBox">
	<b>Please select your device type.</b>
	<br>
	<br>
	<div id="imageBox">
		<?php echo getImgTag("audioicon", 150);
		echo getImgTag("phoneicon", 150);
		echo getImgTag("computericon", 150);
		echo getImgTag("tvicon", 150);
		echo getImgTag("radioicon", 150);
		?>
	</div>
	<div id="buttonBox">
		<form id="categoryButtons" class="container" action="../Product_overview_TEST/Zoeken.php" method="post">
			<input id="catButton" class="button special" type="button" name="submit" value="Audio" onclick="<?= $desto . "?category=audio&submit=true';" ?>">
			<input id="catButton" class="button special" type="button" name="submit" value="Phones" onclick="<?= $desto . "?category=phones&submit=true';" ?>">
			<input id="catButton" class="button special" type="button" name="submit" value="Computer" onclick="<?= $desto . "?category=computers&submit=true';" ?>">
			<input id="catButton" class="button special" type="button" name="submit" value="Television" onclick="<?= $desto . "?category=television&submit=true';" ?>">
			<input id="catButton" class="button special" type="button" name="submit" value="Radio" onclick="<?= $desto . "?category=radio&submit=true';" ?>">
			</form>
			</div>
			</div>

			<?php
			addStyle("#groupBox {text-align: center;vertical-align:middle;}");
			addStyle("#imageBox {text-align: center;}");
			addStyle("#buttonBox {text-align: center;}");
			addStyle("#catbutton {width:145px;}");
			generateFoot();
			?>
