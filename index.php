<?php
$servername = "localhost";
$username = "admin";
$password = "e2h0pecBJ5Bo";
$dbname = "Database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$title = $_GET['title'];
$note = $_POST['note'];
$authonamer = $_POST['authonamer'];
$sql = "INSERT INTO notes_table (authonamer, title, note)
VALUES ('$authonamer', '$title', '$note')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>