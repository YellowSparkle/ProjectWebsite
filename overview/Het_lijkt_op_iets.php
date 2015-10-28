<?php
require '../include.php';
?>

<h3>Titel</h3> <!--De tabel waar data in komt-->
	<table id="t01" width="100%">
  <tr>
    <th>Productnumber</th>
	<th>Productname</th>
    <th>Description</th>		
	<th>Price in euros</th>
	<th>In stock</th>
	<th>Catagory</th>
  </tr>

<?php

$link = mysqli_connect("yellowsparkle.sentientturtle.me", "Joost", "Project")
		or die("Error connecting to server".   mysqli_connect_error()  );
	
	mysqli_select_db($link,"projectdb")
		or die("Database not available");
//Zie deze prachtige database connectie
//Deze is nodig omdat er anders te veel mysql en mysqli verschillen zijn.
//NIET VERWIJDEREN :)

$query ="	SELECT * 
			FROM Product;	";
	//De prachtige sql query die voor de overzicht zorgt

	$result = mysqli_query($link, $query) or die (mysqli_error());
	//De resultaat van de query drukt hij samen met de databaseconnectie in een variable
		
		while($row = mysqli_fetch_array($result)) {
			 echo "<tr>";
			  echo "<th>".$row['Product_number']."</th>";
			  echo "<th>".$row['Product_name']."</th>";
			  echo "<th>".$row['Description']."</th>";
			  echo "<th>".$row['Price']."</th>";
			  echo "<th>".$row['In_stock']."</th>";
			  echo "<th>".$row['Catagory']."</th>";		 
			echo "</tr>";
	}	//Bekijk die shit uit de database. En drukt ze af	
		//wie dit leest is gestoord	
?>
</table>
<br><a href=''>Terug naar vorige pagina</a>
</body>
</html>