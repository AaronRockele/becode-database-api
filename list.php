<?php

$sql = "SELECT * FROM notes_table";
$result = mysqli_query($conn, $sql);
$json_array = array();
while($row = mysqli_fetch_assoc($result)) {
$json_array[] = $row;
}
echo json_encode($json_array).'<br>';
// echo'<pre>';
// print_r($json_array)

?>