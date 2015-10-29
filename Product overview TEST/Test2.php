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
<body>
<h3>Zoeken</h3>

<p>
<form name="search" method="get" action=""> 
Zoek op: <input type="text" size="30" name="k" autocomplete="off" id="dd" value="<?php echo $_GET['k']; ?>"> 
in <Select NAME="field"> 
   <Option VALUE="cmdb" <?php if ($_GET['field'] == "cmdb") { echo "selected"; } ?> >CMDB</option> 
   <Option VALUE="incidenten" <?php if ($_GET['field'] == "incidenten") { echo "selected"; } ?> >Incidenten</option> 
   </Select> 
<input type="submit" name="submit" value="Zoeken"> 
</form>
</p>

<?php
if (isset($_GET['submit'])) {
	if ($_GET['k'] == "") { //Eerst kijken of er wat is ingevoerd
		echo "<font style='color:red'>Voer een zoekopdracht in</font>";  
	} else {
		$k = mysqli_real_escape_string($dbconnect, $_GET['k']);
		$field = mysqli_real_escape_string($dbconnect, $_GET['field']);
		
		if ($field == "cmdb") { //In cmdb zoeken
			$query = "SELECT * FROM cmdb WHERE type_apparaat LIKE '%$k%' OR merk LIKE '%$k%' OR besturingssysteem LIKE '%$k%' OR software LIKE '%$k%' OR harde_schijf LIKE '%$k%' OR processor LIKE '%$k%' OR grafische_kaart LIKE '%$k%' OR overig LIKE '%$k%' ";
			$result = mysqli_query($dbconnect, $query);
			$numrows = mysqli_num_rows($result);

			if ($numrows >= 1) { ?>
				<p>
				Gevonden resultaten:
				</p>
				<table id="t01" style="width:100%">
				  <tr>
			    <th>Productnumber</th>
				<th>Productname</th>
			    <th>Description</th>		
				<th>Price in euros</th>
				<th>In stock</th>
				<th>Catagory</th>
			    </tr>
				  
				<?php while ($row = mysqli_fetch_assoc($result)) { ?>
				 <tr>
					<td><a href="cmdb_details.php?cn=<?php echo $row['configuratienummer']; ?>" style="color:black;text-decoration: underline;"><?php echo $row['configuratienummer']; ?></a></td>
					<td><?php echo $row['Product_number']; ?>		</td>
					<td><?php echo $row['Product_name']; ?>			</td>
					<td><?php echo $row['Description']; ?>			</td>
					<td><?php echo $row['Price']; ?>				</td>
					<td><?php echo $row['In_stock']; ?>				</td>
					<td><?php echo $row['Catagory']; ?>				</td>
				 </tr>
				<?php
				}
			} else {
				echo "Geen resultaten voor \"<b>$k</b>\" in <b>$field</b>."; 
			}	
		} elseif ($field == "Product") { //In de producten zoeken
			$query = "	SELECT * 
						FROM Product 
						WHERE Product_number LIKE '%$k%' 
						OR Product_name LIKE '%$k%'
						OR Description LIKE '%$k%'
						OR Price LIKE '%$k%' 
						OR In_stock LIKE '%$k%'
						OR Catagory LIKE '%$k%'";
			$result = mysqli_query($dbconnect, $query);
			$numrows = mysqli_num_rows($result);

			if ($numrows >= 1) { ?>
				<p>
				Gevonden resultaten:
				</p>
				<table id="t01" style="width:100%">
				<tr>
			    <th>Productnumber</th>
				<th>Productname</th>
			    <th>Description</th>		
				<th>Price in euros</th>
				<th>In stock</th>
				<th>Catagory</th>
			    </tr>
					  
	<?php	while($row = mysqli_fetch_array($result)) {
			 echo "<tr>";
			  echo "<th>".$row['Product_number']."</th>";
			  echo "<th>".$row['Product_name']."</th>";
			  echo "<th>".$row['Description']."</th>";
			  echo "<th>".$row['Price']."</th>";
			  echo "<th>".$row['In_stock']."</th>";
			  echo "<th>".$row['Catagory']."</th>";		 
			echo "</tr>"; ?>
				<?php
				}
			} else {
				echo "Geen resultaten voor \"<b>$k</b>\" in <b>$field</b>."; 
			}
		}
	}
}
?>

</table>
<br>
</body>
</html>
