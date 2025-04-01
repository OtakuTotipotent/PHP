<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $pwd = $_POST['pwd'];

    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $name);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();

        $stmt = null;
        $pdo = null;
        header("Location: ../index.php");
        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
}
