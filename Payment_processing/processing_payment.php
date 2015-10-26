<!DOCTYPE html>
<html lang="en">
	<head>
		<title>processing</title>
	</head>
	<body>
<?php
if(isset($_POST["submit"]))
	{
		$username = isset($_POST["username"]) ? $_POST["username"] : "Default";
		$password = isset($_POST["password"]) ? $_POST["password"] : "Default";
		echo "Welcome {$username}";
		echo"";?> <meta http-equiv="refresh" content="0;url=http://www.Google.com" /><?php 
	}
else 
	{
	echo "Form was not succesfully submitted";
	}
 ?>
	</body>
	
</html>

