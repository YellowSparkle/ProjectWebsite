<!DOCTYPE html>
<html lang="en">
	<head>		
		<title>Login</title>
		<meta charset="utf-8">
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

<div class="relative">
	<form action="processing_payment.php" method="post">
	<!--
		Username:	 <input type="text" name="username" value=""/>  <br />
		Password:	 <input type="password" name="password" value=""/> <br />
	-->
		 <label for="username">Username</label> <!-- Username text box  -->
  	 	<input type="text" id="username" />
  	 	<br />
  	 	<label for="password">Password</label> <!-- Password text box  -->
  	 	<input type="text" id="password" />
		<br/> 
		<br/> 
		<input type="submit" name="submit" value="Submit"/>
	</form>
</div>
	<div>
	<style>
label {
    width: 80px;
    clear:left;
    text-align:right;
    padding-right:10px;
}
input, label 
{
    float:left;
}
	</style>
	</div>
	</body>
<!-- -->
</html>
