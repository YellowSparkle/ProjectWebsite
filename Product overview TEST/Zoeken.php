<?php


//Zie deze prachtige database connectie
//Deze is nodig omdat er anders te veel mysql en mysqli verschillen zijn.
//NIET VERWIJDEREN :)
	include "../include.php";
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Search");
	generateHeader();
?>

<html>
	
<head>
<link rel="stylesheet" href="../utility/assets/css/main.css" />	
</head>

<body>


<p>
<div class="row 200%">
<div class="6u 12u$(medium)">
<form name="search" method="get" action=""> <!--Hier voer je de zoekopdracht in. In de browser-->
Zoek op: <input type="text" size="30" name="search" autocomplete="off" id="" value=""> 
<input type="submit" name="submit" value="Zoeken"> 
</div>
</form>
</p>

<?php
if (isset($_GET['submit'])) {
	if ($_GET['search'] == "") { //Eerst kijken of er wat is ingevoerd
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
		<div class="6u$ 12u$(medium)">
			<div class="table-wrapper">
				<p>
				Gevonden resultaten:
				</p>
				<table class="alt">
					<thead>
					<tr>
						<th>Productnr.</th>
						<th>Name</th>
						<th>Description</th>
						<th>Price</th>
						<th>In stock</th>
						<th>Catagory</th>
				  	</tr>
					</thead>
					<tbody>
				<?php while ($row = mysql_fetch_assoc($result)) { ?>
					<tr>
						<td><?php echo $row['Product_number']; ?>		</td>
						<td><?php echo $row['Product_name']; ?>			</td>
						<td><?php echo $row['Description']; ?>			</td>
						<td><?php echo $row['Price']; ?>				</td>
						<td><?php echo $row['In_stock']; ?>				</td>
						<td><?php echo $row['Catagory']; ?>				</td>	
			   		</tr>

				 </tbody>
				<?php
				}
			} else {
				echo "Geen resultaten voor \"<b>$search</b>\" in <b>$field</b>."; 
			}	
		 ?>
		 </div> 
 	</div>
	</div>
		 <?php
	}
}
?>

			</table>
</body>
</html>