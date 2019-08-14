<?php
$update = "UPDATE notes_table SET name='Frank' WHERE ID=32";

if ($conn->query($update) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>