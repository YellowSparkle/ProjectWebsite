<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	require_once "../utility/imageprovider.php";
	generateTitle("Sell your device");
	generateHeader(FALSE, TRUE, TRUE);
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart <a id="btnEmpty" href="index.php?action=empty">Empty Cart</a></div>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th><strong>Name</strong></th>
<th><strong>Code</strong></th>
<th><strong>Quantity</strong></th>
<th><strong>Price</strong></th>
<th><strong>Action</strong></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><strong><?php echo $item["Product_name"]; ?></strong></td>
				<td><?php echo $item["Product_number"]; ?></td>
				<td><?php echo $item["quantity"]; ?></td>
				<td align=right><?php echo "&#8364;".$item["Price"]; ?></td>
				<td><a href="index.php?action=remove&code=<?php echo $item["Product_number"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
        $item_total += ($item["Price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php echo "$".$item_total; ?></td>
</tr>
</tbody>
</table>
<input id=cartbutton class='button special' type=button name='Cart' value='Checkout' onclick="window.location.href='../Payment_processing/Login_Form_bank.php'\">
		
  <?php
}
?>
<!--</div>

<div class="features">
	<div class="feature">
		<div id="product-grid">
			<div class="txt-heading">Products</div>
			<?php
			$product_array = $db_handle->runQuery("SELECT * FROM Product WHERE Catagory='Telefoons';");  //zoekt de items uit 'Catagory'
			if (!empty($product_array)) { 
				foreach($product_array as $key=>$value){
			?>
				<div class="product-item">
					<form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["Product_number"]; ?>">
					<div class="product-image"><?php echo getImgTag($product_array[$key]["Product_number"],128, 100); ?></div>
					<div><strong><?php echo $product_array[$key]["Product_name"]; ?></strong></div>
					<div class="product-price"><?php echo "$".$product_array[$key]["Price"]; ?></div>
					<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
					</form>
				</div>
		</div>
	
	<?php
			}
	}
	?>
	</div>
</div> -->
</BODY>
