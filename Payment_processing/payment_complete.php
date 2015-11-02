
<?php
	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Order complete");
	generateHeader();
?>



<head>
	<title>Order Complete</title>
	<link rel="stylesheet" href="../utility/assets/css/main.css" />
</head>

<body>
	<center>
	
		<meta http-equiv="refresh" content="5;url=../index/optionpage.php" /> <!-- Auto refreshes page -->
		<h3>
		The order was succesfully placed.
		</h3>
	
	
		<p>If the browser does not redirect you automaticly after 5 seconds,<br /> 
		then click <A HREF="../index/optionpage.php">here</A> to return to the home page.</p>
		
						 <!-- ^^link op scherm^^ -->
	</center>
</body>
<?php generateFoot(); ?>

</html>