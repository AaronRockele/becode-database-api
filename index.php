<?php
$servername = "localhost";
$username = "admin";
$password = "e2h0pecBJ5Bo";
$dbname = "Database";

include('insert.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

include('list.php');
include('delete.php');
include('validate.php');
include('update.php');

$conn->close();
?>