<?php

$host = "localhost"; // XAMPP apache server address
$user = "root"; // database user name (for MySQL80 workbench)
$password = "90000"; // database password (for MySQL80 workbench)
$database = "college"; // a database created during PHP learning in GGCL
$port = 3306; // MySQL80 workbench default port number

$connection = mysqli_connect($host, $user, $password, $database, $port) or die("ERROR: Connection not established."); // connection to the database server

if (isset($_POST['submit-btn'])) { // if user clicks submit button on web page

    $roll_no = trim($_POST['rollNo-input']); // gets roll no. from input tag of the form>html
    $name = trim($_POST['name-input']);
    $marks = trim($_POST['marks-input']);

    if (!empty($roll_no) && !empty($name) && !empty($marks) && is_numeric($marks)) { // checks if the given data is valid

        $previous_data = mysqli_num_rows(mysqli_query($connection, "SELECT rno FROM result WHERE rno = $roll_no")); // search given record, if exists
        if ($previous_data) { // if the data already exists
            echo "<div class='message error''>Data already exists for Roll#'$roll_no'.</div>";
        } else {
            $query = mysqli_query($connection, "INSERT INTO result (rno, sname, marks) VALUES ('$roll_no', '$name', '$marks')");

            if ($query) {
                echo "<div class='message success'>Data inserted successfully.</div>";
            } else {
                echo "<div class='message error'>ERROR: Could not execute query.</div>";
            }
        }
    } else {
        echo "<div class='message error'>ERROR: Invalid Data.</div>";
    }
}
