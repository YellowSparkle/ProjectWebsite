<?php
require '../include.php';
?>

<h3></h3>
<p>


<?php

	$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysqli_select_db($link,"projectdb")
		or die("Database not available");

/*	 
 if (isset($_GET['in'])) {
	//Gegevens ophalen van de item
	$Product_number = mysql_real_escape_string($link, $_GET['in']);
*/

$query = 
	"
	SELECT * 
	FROM Product ;
	";
	

	$result = mysqli_query($link, $query) or die (mysqli_error());
	
	//Bekijk die shit
	
	<table id="t01" width="100%">
  <tr>
    <th>Productnumber</th>
	<th>Productname</th>
    <th>Description</th>		
	<th>Price</th>
	<th>In stock</th>
	<th>Catagory</th>
  </tr>
	
	
		while($row = mysqli_fetch_array($result)) {
			echo "<tr>";
			  echo "<th>Productnumber</th><td>".$row['Product_number']."</td>";
			  echo "<td>".$row['Product_name']."</td>";
			  echo "<td>".$row['Description']."</td>";
			  echo "<td>".$row['Price']."</td>";
			  echo "<td>".$row['In_stock']."</td>";
			  echo "<td>".$row['Catagory']."</td>";		 
			echo "</tr>";
	}	
		 
		 
	 ?>
	 

</table>
<br><a href=''>Terug naar vorige pagina</a>
</body>
</html>