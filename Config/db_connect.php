<?php
$host = "your_host";
$db_name = "your_database_name";
$username = "your_database_username";
$password = "your_database_password";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
//to handle connection error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>