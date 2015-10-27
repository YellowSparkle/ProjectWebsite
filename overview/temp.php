<?php
include '../include.php';
?>

<h3>Check info uit database</h3>
<p>
<table id="t01" width="100%">
  <tr>
    <th>Productnumner</th>
	<th>Productname</th>
    <th>Description</th>		
	<th>Price</th>
	<th>In stock</th>
	<th>Catagory</th>
  </tr>

<?php 
if (isset($_GET['in'])) {
	//Gegevens ophalen van de item

	$Product_number = mysql_real_escape_string($link, $_GET['in']);
	$query = 
	"
	SELECT * 
	FROM Product 
	;
	";
	$result = mysql_query($link, $query);
	
	//Geen actie, alleen bekijken
	if (!isset($_GET['actie'])) {
		while($row = mysql_fetch_assoc($result)) {
			echo "<tr>";
			  echo "<td>".$row['Product_number']."</td>";
			  echo "<td>".$row['Product_name']."</td>";
			  echo "<td>".$row['Description']."</td>";
			  echo "<td>".$row['Price']."</td>";
			  echo "<td>".$row['In_stock']."</td>";
			  echo "<td>".$row['Catagory']."</td>";
			echo "</tr>";
		}
	}
	else {echo "Dit werkt niet";}
s
}
?>
</table>
<br><a href=''>Terug naar vorige pagina</a>
</body>
</html>