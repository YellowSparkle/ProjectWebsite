<?php
$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysqli_select_db($link,"projectdb")
		or die("Database not available");
//Zie deze prachtige database connectie
//Deze is nodig omdat er anders te veel mysql en mysqli verschillen zijn.
//NIET VERWIJDEREN :)

	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Sell your device");
	generateHeader();
?>

<html>
	
<head>
<link rel="stylesheet" type="text/css" href="../utility/stylesheet.css">	
</head>

<body>
<h3>Zoeken</h3>

<p>
<form name="search" method="get" action=""> 
Zoek op: <input type="text" size="30" name="search" autocomplete="off" id="" value=""> 
in   
 
<input type="submit" name="submit" value="Zoeken"> 
</form>
</p>

<?php
if (isset($_GET['submit'])) {
	if ($_GET['search'] == "") { //Eerst kijken of er wat is ingevoerd
		echo "<font style='color:red'>Voer een zoekopdracht in</font>";  
	} else {
		$search = mysqli_real_escape_string($link, $_GET['search']);
		//$field = mysqli_real_escape_string($link, $_GET['field']);
		
		 //In producten zoeken
			$query = "	SELECT * 
						FROM Product 
						WHERE Product_number LIKE '%$search%' 
						OR Product_name LIKE '%$search%' 
						OR Description LIKE '%$search%' 
						OR Price LIKE '%$search%' 
						OR In_stock LIKE '%$search%' 
						OR Catagory LIKE '%$search%' 
						";
			$result = mysqli_query($link, $query);
			$numrows = mysqli_num_rows($result);

			if ($numrows >= 1) { ?>
				<div class="anuspenetratie">
					
				
				<p>
				Gevonden resultaten:
				</p>
				<table id="d" style="width:100%">
				  <tr>
			    <th>Productnumber</th>
				<th>Productname</th>
			    <th>Description</th>		
				<th>Price</th>
				<th>In stock</th>
				<th>Catagory</th>
			    </tr>
				  
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				 <tr>
					<td id="d"><?php echo $row['Product_number']; ?>		</td>
					<td id="d"><?php echo $row['Product_name']; ?>			</td>
					<td id="d"><?php echo $row['Description']; ?>			</td>
					<td id="d"><?php echo $row['Price']; ?>				</td>
					<td id="d"><?php echo $row['In_stock']; ?>				</td>
					<td id="d"><?php echo $row['Catagory']; ?>				</td>
				 </tr>
				 
				 </div>
				 
				<?php
				}
				} else {
				echo "Geen resultaten voor \"<b>$search</b>\"."; 
				}	
			}
			}
			?>

			</table>
</body>
</html>