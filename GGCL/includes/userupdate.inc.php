<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = trim($_POST['username']);
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);
    $userid = trim($_POST['uid']);

    if (!empty($userid)) {
        try {
            require_once "dbh.inc.php";

            $query = "UPDATE users SET username = :username, email = :email, pwd = :pwd WHERE id = :userid";

            $stmt = $pdo->prepare($query);

            $stmt->bindParam(":username", $name);
            $stmt->bindParam(":pwd", $pwd);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":userid", $userid);
            $stmt->execute();

            $stmt = null;
            $pdo = null;
            header("Location: ../index.php");
            die();
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
} else {
    header("Location: ../index.php");
}
