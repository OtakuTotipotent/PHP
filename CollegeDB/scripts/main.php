<?php

use Dom\Mysql;

$msg = "";

if (isset($_POST['submit-btn']) || isset($_POST['update-btn'])) {
    // insert data into the database
    $rno = trim($_POST["rno-text"]);
    $name = trim($_POST["name-text"]);
    $degree = trim($_POST["degree-text"]);
    $marks = trim($_POST["marks-text"]);

    if (empty($rno) || empty($name) || empty($degree) || empty($marks)) {
        //? learning how to select an html element using php to manipulate it
        $msg = "Please fill the fields carefully!";
    } else {
        // checks if the record exists
        $data = mysqli_query($connection, "select rno from students where rno='$rno'");
        $data = mysqli_num_rows($data);

        if (isset($_POST['update-btn'])) { // if user wants update
            if ($data) {
                mysqli_query($connection, "update students set sname='$name', degree='$degree', marks='$marks' where rno='$rno'");
                $msg = "Record updated successfully!";
            } else {
                $msg = "Record not found!";
            }
        }

        if (isset($_POST['submit-btn'])) { // if user want insertion
            if ($data) {
                $msg = "Record already exists!";
            } else {
                mysqli_query($connection, "insert into students(rno,sname,degree,marks) values('$rno', '$name', '$degree', '$marks')");
                //? learning how to select an html element using php to manipulate it
                $msg = "Record inserted successfully!";
            }
        }
    }
}
