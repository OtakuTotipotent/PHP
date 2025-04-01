<?php

// This code that connects the database and servers to the target website

// ----------------------------------------------------------------------
$hostname = 'localhost';
$dbname = 'GGCL';
$db_username = 'root';
$db_password = '';

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $db_username, $db_password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // error handling
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