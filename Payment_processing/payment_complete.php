
<?php
	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Order complete");
	generateHeader();
	unset($_SESSION["cart_item"]);
?>



<head>
	<title>Order Complete</title>
</head>

<body>
	<center>
	
		<meta http-equiv="refresh" content="5;url=../index/optionpage.php" /> <!-- Auto refreshes page -->
		<h3>
		The order was succesfully placed.
		</h3>
	
	
		<p>
		If the browser does not redirect you automaticly after 5 seconds,<br /> 
		then click <a HREF="../index/optionpage.php">here</a> to return to the home page.
		</p>
		
	</center>
</body>

<?php generateFoot(); ?>

</html>