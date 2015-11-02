<?php
	require_once "../utility/HTMLGenerator.php";
	require_once "../utility/Header.php";
	generateTitle("Sell your device");
	generateHeader(FALSE);
?>

	<head>
		<title>Aanmelden</title>
		
		<link rel="stylesheet" type="text/css" href="../utility/assets/css/main.css">
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
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Stay logged in.
          </label>
          <label><a href="../Registreren_pagina/Register_page.php"><font size="2">Don't have an account yet ? Register here!</font></a></label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
     </div> <!-- end login div -->
    </div> <!-- end centerbox div -->
<!--einde van login script --> 
</body>