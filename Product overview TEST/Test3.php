<?php
$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysqli_select_db($link,"projectdb")
		or die("Database not available");
//Zie deze prachtige database connectie
//Deze is nodig omdat er anders te veel mysql en mysqli verschillen zijn.
//NIET VERWIJDEREN :)
?>

<html>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
<body>
<h3>Zoeken</h3>

<p>
<form name="search" method="get" action=""> 
Zoek op: <input type="text" size="30" name="search" autocomplete="off" id="" value=""> 
in <Select NAME="field"> 
   <Option VALUE="Product">Product</option>  
   </Select> 
<input type="submit" name="submit" value="Zoeken"> 
</form>
</p>

<?php
if (isset($_GET['submit'])) {
	if ($_GET['search'] == "") { //Eerst kijken of er wat is ingevoerd
		echo "<font style='color:red'>Voer een zoekopdracht in</font>";  
	} else {
		$search = mysqli_real_escape_string($link, $_GET['search']);
		$field = mysqli_real_escape_string($link, $_GET['field']);
		
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
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				<p>
				Gevonden resultaten:
				</p>
				<table id="t01" style="width:100%">
					<tr>
				  	<tr>
			    <th>Productnumber</th>
			    <td><?php echo $row['Product_number']; ?>		</td>
			   		</tr>
			   		<tr>
				<th>Productname</th>
				<td><?php echo $row['Product_name']; ?>			</td>
					</tr>
					<tr>		
			    <th>Description</th>
			    <td><?php echo $row['Description']; ?>			</td>
			    	</tr>
					<tr>		
				<th>Price in euros</th>
				<td><?php echo $row['Price']; ?>				</td>
					</tr>
					<tr>
				<th>In stock</th>
				<td><?php echo $row['In_stock']; ?>				</td>
					</tr>
					<tr>
				<th>Catagory</th>
				<td><?php echo $row['Catagory']; ?>				</td>
			    	</tr>
				 	</tr>
				<?php
				}
			} else {
				echo "Geen resultaten voor \"<b>$search</b>\" in <b>$field</b>."; 
			}	
		 
	}
}
?>

</table>
</body>
</html>