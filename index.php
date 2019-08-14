<?php
$servername = "localhost";
$username = "admin";
$password = "e2h0pecBJ5Bo";
$dbname = "Database";

$title = $_GET['title'];
$note = $_POST['note'];
$authonamer = $_POST['name'];
$sql = "INSERT INTO notes_table (name, title, note)
VALUES ('$authonamer', '$title', '$note')";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$mysql = "SELECT ID, name, title, note FROM notes_table";
$result = $conn->query($mysql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["name"]. " title: " . $row["title"]. " note: " . $row["note"]. "<br>";
    }
} else {
    echo "0 results";
}

$delete = "DELETE FROM notes_table WHERE ID=11";

if ($conn->query($delete) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if ($clean_title === false) {
    echo 'a title is required';
    } else {
    echo 'title is valid ';
    }
    if ($clean_note === false) {
    echo 'a note is required';
    } else {
    echo 'note is valid';
    }

$clean_note = filter_var($note, FILTER_SANITIZE_STRING);
$clean_title = filter_var($title, FILTER_SANITIZE_STRING);

$conn->close();
?>