<?php
	include "../include.php";						//Hier staat de connectie e.d. in
	require_once "../utility/HTMLGenerator.php";	//Geen idee
	require_once "../utility/Header.php"; 			//De header erbij betrekken
	generateTitle("Search"); 						//Titel bovenaan de pagina
	generateHeader();								
	
?>

<html>
<head>
</head>
<body>
	
	<p>
<div class="row 200%">

	<div class="linksaapje">
		<form name="search"  method="get" action=""> <!--Hier voer je de zoekopdracht in. In de browser-->
		Zoek op: <input type="text" name="search" autocomplete="off" id="" value=""> 
		<input type="submit" name="submit" value="Zoeken"> 
	</div>
		</form>

	</p>

<?php
if (isset($_GET['submit'])) {
	if ($_GET['search'] == "") { //Eerst kijken of er wat is ingevoerd. Anders krijg je melding dat er niets is ingevoerd
		echo "<font style='color:red'>Voer een zoekopdracht in</font>";  
	} else {
		$search = mysql_real_escape_string($_GET['search'],$link );
		//Zoekopdracht
		
		 //Met query in producten zoeken
			$query = "	SELECT * 
						FROM Product 
						WHERE Product_number LIKE '%$search%' 
						OR Product_name LIKE '%$search%' 
						OR Description LIKE '%$search%' 
						OR Price LIKE '%$search%' 
						OR In_stock LIKE '%$search%' 
						OR Catagory LIKE '%$search%' 
						";
			$result = mysql_query($query, $link); //De query samen met database linken en in variable drukken
			$numrows = mysql_num_rows($result); 
			//Hier heb je een werkende query met (meerdere) waarde(s) in variable gedrukt.
		
			if ($numrows >= 1) { ?>
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
						<th>Aantal</th>
						<th>XAVIER IS GESTOORD</th>
				  	</tr>
					</thead>
					<tbody>
				<?php while ($row = mysql_fetch_assoc($result)) { 
					// Hier word de resultaat van hierboven ergens query in een assoc array afgedrukt. 	?> 
					<tr>
						<td><?php echo $row['Product_number']; ?>								</td>
						<td><?php echo $row['Product_name']; ?>									</td>
						<td><?php echo $row['Description']; ?>									</td>
						<td><?php echo $row['Price']; ?>										</td>
						<td><?php echo $row['In_stock']; ?>										</td>
						<td><?php echo $row['Catagory']; ?>										</td>
						<td class="fuckxavier"><input type="text" size="2" value="1" name="quantity">	</td>
						<td><input class="button special" type="submit" value="Add to cart">	</td>	
			   		</tr>

				 </tbody>
				<?php
				} // einde while om resultaten af te drukken
			} else {
				echo "Geen resultaten voor \"<b>$search</b>\" in <b>$field</b>."; // Als er niets wordt gevonden krijg je deze melding
			} // einde else als er GEEN resultaten zijn gevonden	
		 ?>
		 </div> 
 	</div>
	</div>
		 <?php
	} // einde else zoekfunctie. Dit is in een else omdat in de eerste if word gecontroleerd of er wel iets is ingevoerd.
} // einde if/else van complete zoekfunctie
?>

			</table>
</body>
</html>