<?php

// This code that connects the database and servers to the target website

// ----------------------------------------------------------------------
$dsn = "mysql:host=localhost;dbname=ggcl";
$dbUsername = 'root';
$dbPassword = '90000';
try {
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// ----------------------------------------------------------------------

// $host = 'localhost';
// $user = 'root';
// $pwd = '90000';
// $db = 'ggcl';
// $conn = new mysqli($host, $user, $pwd, $db);
// if ($conn->connect_error)
//     die('Connection error : ' . $conn->connect_error);


// In the ggcl database we have the following tables:
// . usersTable,
// . commentsTable,
// . 
// => usersTable has following fields:
// . id,
// . username,
// . pwd,
// . email,
// . created_at
// . 
// => commentsTable has following fields:
// . id,
// . username,
// . comment_text,
// . created_at,
// . usersTable_id
// . 
// . 