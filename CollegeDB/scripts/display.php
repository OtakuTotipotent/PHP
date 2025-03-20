<?php

$msg_table = '';

if (isset($_POST['delete-row'])) {
    $connection = mysqli_connect('localhost', 'root', '90000');
    $db = mysqli_select_db($connection, 'collegeDB');
    if ($db) {
    } else {
        $msg_table = 'Record not found!';
    }
}
