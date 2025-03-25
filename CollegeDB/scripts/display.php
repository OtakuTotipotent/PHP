<?php

$msg_table = '';

if (isset($_POST['delete-row'])) {
    $connection = mysqli_connect('localhost', 'root', '90000');
    $db = mysqli_select_db($connection, 'collegeDB');
    if ($db) {
        $rno = trim($_POST['delete-row']);
        if (!empty($rno)) {
            $data = mysqli_query($connection, "select rno from students where rno='$rno'");
            if (mysqli_num_rows($data) > 0) {
                mysqli_query($connection, "delete from students where rno='$rno'");
                $msg_table = 'Record deleted successfully!';
            } else {
                $msg_table = 'Record not found!';
            }
        } else {
            $msg_table = 'Please provide a roll number!';
        }
    } else {
        $msg_table = 'Database connection failed!';
    }
}
