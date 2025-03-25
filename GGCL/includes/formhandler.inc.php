<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO usersTable(username, pwd, email) VALUES(:username, :pwd, :email);"; // named parameters in php :parameter_name

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $name);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        // to avoid sql injection
    } catch (ErrorException $e) {
        die("Query failed: " . $e->getMessage());
    }

    $stmt = null;
    $pdo = null;

    header("Location: ../index.php");
    die();
} else {
    header('Location: ../index.php');
}
