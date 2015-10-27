<?php
include ""
if (isset($_GET['cn'])) {
	//Gegevens ophalen van het cmdb item
	$configuratienummer = mysqli_real_escape_string(link, $_GET['cn']);
	$query = "SELECT * FROM cmdb WHERE configuratienummer = $configuratienummer";
	$result = mysqli_query($dbconnect, $query);
	
	//Geen actie, alleen bekijken
	if (!isset($_GET['actie'])) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			  echo "<td>".$row['configuratienummer']."</td>";
			  echo "<td>".$row['type_apparaat']."</td>";
			  echo "<td>".$row['merk']."</td>";
			  echo "<td>".$row['besturingssysteem']."</td>";
			  echo "<td>".$row['software']."</td>";
			  echo "<td>".$row['harde_schijf']."</td>";
			  echo "<td>".$row['processor']."</td>";
			  echo "<td>".$row['grafische_kaart']."</td>";
			  echo "<td>".$row['overig']."</td>";
			  echo "<td>".$row['laatst_gewijzigd']."</td>";
			  
			echo "</tr>";
		}
	}
	}

	?>