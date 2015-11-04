
<?php
	require "../utility/HTMLGenerator.php";
	require "../utility/Header.php";
	generateTitle("Product sent");
	generateHeader();
?>



<head>
	
	<link rel="stylesheet" href="../utility/assets/css/main.css" />
</head>

<body>
	<center>
	
		<meta http-equiv="refresh" content="10;url=../index/optionpage.php" /> <!-- Auto refreshes page -->
		<h3>
		Your product has succesfully been registerd, you will recieve a mail<br /> 
		if we are interested in the product.
		</h3>
	
	
		<p>If the browser does not redirect you automaticly after 10 seconds,<br /> 
		then click <A HREF="../index/optionpage.php">here</A> to return to the home page.</p>
		
						 <!-- ^^link op scherm^^ -->
	</center>
</body>
<?php generateFoot(); ?>

</html>