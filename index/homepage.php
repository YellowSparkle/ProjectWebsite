<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Sell your device");
	generateHeader(FALSE, FALSE);
?>

<head>
	<title>Aanmelden</title>
</head>


<body>


	<div class=plaatje1><img src="../img/plaatje_2.jpeg" width="256px" height="177px" alt=""></div> <!--plaatje rechts-->
   	<div class=plaatje2><img src="../img/plaatje_1.jpeg" width="256px" height="177px" alt=""></div> <!--plaatje links-->


	<!--begin van login script -->  
	<section class="container">
	<div class=centerbox> <!-- begin centerbox div -->
		<div class="login"> <!-- begin login div -->
			<h1>Sign In</h1>
			<form method="post" action="../utility/Login.php">
				<p><input type="text" name="login" value="" placeholder="Email"></p>
				<p><input type="password" name="password" value="" placeholder="Password"></p>
				<label><a href="../Registreren_pagina/Register_page.php"><font size="2">Don't have an account yet ? Register here!</font></a></label>
				<input class="button special" type="submit" value="login">
			</form>
				<?php invalid() ?>

		</div> <!-- end login div -->
	</div> <!-- end centerbox div -->
	<!--einde van login script --> 
	
</body>

	<?php function invalid() {
		if (array_key_exists("loginerr", $_GET)){ echo "<font color='red'>* Invalid username or password *</font>"; }
	} ?>