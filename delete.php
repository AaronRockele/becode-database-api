<?php 
$delete = "DELETE FROM notes_table WHERE ID=12";

if ($conn->query($delete) === TRUE) {
    echo "Record deleted successfully".'<br>';
} else {
    echo "Error deleting record: " . $conn->error;
}
?>