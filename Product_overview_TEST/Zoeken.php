<?php
include "../include.php";
//Hier staat de connectie e.d. in
require_once "../utility/HTMLGenerator.php";
//Geen idee
require_once "../utility/Header.php";
//De header erbij betrekken
generateTitle("Search");
//Titel bovenaan de pagina

if (!isset($_GET["category"])) {
	$_GET["category"] = "audio";
}
$_SESSION["category"] = $_GET["category"];
require_once("../Shoppingcart/dbcontroller.php");
$db_handle = new DBController();
if (!empty($_POST["quantity"])) {
	$productByCode = $db_handle -> runQuery("SELECT * FROM Product WHERE Product_number='" . $_GET["code"] . "'");
	$itemArray = array($productByCode[0]["Product_number"] => array('Product_name' => $productByCode[0]["Product_name"], 'Product_number' => $productByCode[0]["Product_number"], 'quantity' => $_POST["quantity"], 'Price' => $productByCode[0]["Price"]));

	if (!empty($_SESSION["cart_item"])) {
		if (array_key_exists($productByCode[0]["Product_number"], $_SESSION["cart_item"])) {
			foreach ($_SESSION["cart_item"] as $k => $v) {
				if ($productByCode[0]["Product_number"] == $k) {
					$_SESSION["cart_item"][$k]["quantity"] = $_POST["quantity"] + $_SESSION["cart_item"][$k]["quantity"];
				}
			}
		} else {
			foreach ($itemArray as $key => $value) {
				$_SESSION["cart_item"][$key] = $value;
			}
		}
	} else {
		$_SESSION["cart_item"] = $itemArray;
	}
}
generateHeader(FALSE, TRUE, FALSE);
?>
<p>
			<div class="row 200%">
				<div class="helemaallinksaapje"></div>
				<div class="linksaapje">
					<form name="search" method="get" action="">
						<input type="hidden" name="category" value="<?= $_GET["category"] ?>" id="category"/>
						<!--Hier voer je de zoekopdracht in. In de browser-->
						Search:
						<input class="zoekbox" type="text" name="search" autocomplete="off" id="" value="">
						<br>
						<input class="button special" type="submit" name="submit" value="Search">
						<input class="button special" type="button" name="back" value="Back" onclick="window.location.href='../sell/category.php'">
					</form>
				</div>
		</p>

		<?php
if (isset($_GET['submit'])) {
        
        //Zoekopdracht
        	if(isset($_GET['category'])){
        		if(!isset($_GET['search'])){
        		$category = mysql_real_escape_string($_GET['category'],$link );
				 $query = "  SELECT * 
	                        FROM Product 
	                        WHERE Category = '$category'";
	                        
				}else{
					 $search = mysql_real_escape_string($_GET['search'],$link );
        		$category = mysql_real_escape_string($_GET['category'],$link );
				 $query = "  SELECT * 
	                        FROM Product 
	                        WHERE Category = '$category'
	                        AND ( Product_name LIKE '%$search%' 
	                        OR Description LIKE '%$search%' 
	                        OR Price LIKE '%$search%' 
	                        OR In_stock LIKE '%$search%' 
	                        OR Category LIKE '%$search%' )
	                        ";
       			}
			
            	$result = mysql_query($query, $link); //De query samen met database linken en in variable drukken
           	
            	$numrows = mysql_num_rows($result); 
            //Hier heb je een werkende query met (meerdere) waarde(s) in variable gedrukt.
            
           // ($numrows >= 1)?"test":"niet test";
        
            	if ($numrows >= 1) {
		?>
		<div class="rechtsaapje">
			<div class="table-wrapper">
				<p>
					Found results:
				</p>
				<table class="alt" style="margin-right: 2cm;">
					<thead>
						<tr>
							<th>Productnr.</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>In stock</th>
							<th>Category</th>
							<th>Amount</th>
							<th>Add to cart</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysql_fetch_assoc($result)) {
// Hier word de resultaat van hierboven ergens query in een assoc array afgedrukt.
						?>
						<form method="post" action="Zoeken.php?category=<?=$_GET["category"]?>&submit=true&code=<?= $row['Product_number'] ?>">
						<tr>
							<td><?= $row['Product_number'] ?></td>
							<td><?= $row['Product_name'] ?></td>
							<td><?= $row['Description'] ?></td>
							<td><?= "&#8364;".$row['Price'] ?></td>
							<td><?= $row['In_stock'] ?></td>
							<td><?= $row['Category'] ?></td>
							<td class="joost">
							<input type="text" size="2" value="1" name="quantity">
							</td>
							<td>
							<input class="button special" type="submit" value="Add to cart">
							</td>
						</tr>
						</form>
					</tbody>
			</div>
		</div>
		</div>
		<?php
		}
		}// einde else zoekfunctie. Dit is in een else omdat in de eerste if word gecontroleerd of er wel iets is ingevoerd.
		}
		} // einde if/else van complete zoekfunctie
	?>

</table>