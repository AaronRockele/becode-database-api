<?php
$title = $_GET['title'];
$note = $_POST['note'];
$authonamer = $_POST['name'];
$sql = "INSERT INTO notes_table (name, title, note)
VALUES ('aaron', 'title name', 'a message')
/*('$authonamer', '$title', '$note')*/";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully".'<br>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>