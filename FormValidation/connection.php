<?php

$host = "localhost"; // XAMPP apache server address
$user = "root"; // database user name (for MySQL80 workbench)
$password = "90000"; // database password (for MySQL80 workbench)
$database = "college"; // a database created during PHP learning in GGCL
$port = 3307; // MySQL80 workbench port number

$connection = mysqli_connect($host, $user, $password, $database, $port) or die("ERROR: Connection not established."); // connection to the database server
