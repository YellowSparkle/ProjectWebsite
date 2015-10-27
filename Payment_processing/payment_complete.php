<!DOCTYPE html>

<?php 
	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Order complete");
	generateHeader();
?>
<head>
	<title>Order Complete</title>
</head>

<body>
	<center>
	
		<meta http-equiv="refresh" content="5;url=../index/homepage.php" /> <!-- Auto refreshes page -->
	
		The order was succesfully placed.
	
	
		If the browser does not redirect you automaticly after 5 seconds,<br /> 
		then click <A HREF="../index/homepage.php">here</A> to return to the home page.
						 <!-- ^^link op scherm^^ -->
	</center>
</body>
<?php generateFoot(); ?>

</html>