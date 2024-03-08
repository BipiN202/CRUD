<?php
include "connection.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "CRUD";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]; 
    $password = $_POST["password"]; 

    
    $sql = "SELECT * FROM crud_data WHERE name = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    
    if ($result->num_rows > 0) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password.";
    }
}
?>
