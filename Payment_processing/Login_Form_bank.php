<!DOCTYPE html>
<html lang="en">
	<head>		
		<title>Login</title>
		<link rel="stylesheet" href="../utility/assets/css/main.css" />
	</head>
	<body>

<div  class="features">
	<form action="processing_payment.php" method="post">
	<!--
		Username:	 <input type="text" name="username" value=""/>  <br />
		Password:	 <input type="password" name="password" value=""/> <br />
	-->
	
	<br><br><br>
	<img src="../img/Yes-Bank-Logo.png" alt="Logo""> <br><br>
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
