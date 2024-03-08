


<?php
//conection datail
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "CRUD";

//create connection
$conn =  new mysqli ($servername, $username, $password);

//check connection
if ($conn->connect_error){
    die("conection failed:". $conn->connect_error);
}
// Create the database if it doesn't exist
$sqlCreateDB = "CREATE DATABASE IF NOT EXISTS $dbname";
$conn->query($sqlCreateDB);

// Select the database
$conn->select_db($dbname);

// Create the table if it doesn't exist
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS crud_data (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    mobile VARCHAR(20),
    password VARCHAR(255)
)";

$conn->query($sqlCreateTable);
?>