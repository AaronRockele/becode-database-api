<?php
if ($clean_title === false) {
    echo 'a title is required';
    } else {
    echo 'title is valid '.'<br>';
    }
    if ($clean_note === false) {
    echo 'a note is required';
    } else {
    echo 'note is valid'.'<br>';
    }

$clean_note = filter_var($note, FILTER_SANITIZE_STRING);
$clean_title = filter_var($title, FILTER_SANITIZE_STRING);
?>