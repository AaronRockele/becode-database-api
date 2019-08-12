<?php
$servername = "localhost";
$username = "admin";
$password = "e2h0pecBJ5Bo";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>