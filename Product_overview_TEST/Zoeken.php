<?php
include "../include.php";
//Hier staat de connectie e.d. in
require_once "../utility/HTMLGenerator.php";
//Geen idee
require_once "../utility/Header.php";
//De header erbij betrekken
generateTitle("Search");
//Titel bovenaan de pagina
generateHeader();
?>

<html>
	<head></head>
	<body>

		<p>
			<div class="row 200%">
				<div class="helemaallinksaapje"></div>
				<div class="linksaapje">
					<form name="search" method="get" action="">
						<input type="hidden" name="category" value="<?= $_GET["category"] ?>" id="category"/>
						<!--Hier voer je de zoekopdracht in. In de browser-->
						Zoek op:
						<input class="zoekbox" type="text" name="search" autocomplete="off" id="" value="">
						<br>
						<input type="submit" name="submit" value="Zoeken">
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
	                        WHERE Catagory = '$category'";
	                        
				}else{
					 $search = mysql_real_escape_string($_GET['search'],$link );
        		$category = mysql_real_escape_string($_GET['category'],$link );
				 $query = "  SELECT * 
	                        FROM Product 
	                        WHERE Catagory = '$category'
	                        AND ( Product_name LIKE '%$search%' 
	                        OR Description LIKE '%$search%' 
	                        OR Price LIKE '%$search%' 
	                        OR In_stock LIKE '%$search%' 
	                        OR Catagory LIKE '%$search%' )
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
					Gevonden resultaten:
				</p>
				<table class="alt" style="margin-right: 2cm;">
					<thead>
						<tr>
							<th>Productnr.</th>
							<th>Name</th>
							<th>Description</th>
							<th>Price</th>
							<th>In stock</th>
							<th>Catagory</th>
							<th>Amount</th>
							<th>Add to cart</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($row = mysql_fetch_assoc($result)) {
// Hier word de resultaat van hierboven ergens query in een assoc array afgedrukt.
						?>
						<tr>
							<td><?= $row['Product_number'] ?></td>
							<td><?= $row['Product_name'] ?></td>
							<td><?= $row['Description'] ?></td>
							<td><?= $row['Price'] ?></td>
							<td><?= $row['In_stock'] ?></td>
							<td><?= $row['Catagory'] ?></td>
							<td class="fuckxavier">
							<input type="text" size="2" value="1" name="quantity">
							</td>
							<td>
							<input class="button special" type="submit" value="Add to cart">
							</td>
						</tr>
					</tbody>
			</div>
		</div>
		</div>
		<?php
			}
		} // einde if/else van complete zoekfunctie
		}
		}
		?>

		</table>
	</body>
</html>
