<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $userid = 2; //? should be coded for dynamic engagement

    try {
        require_once "dbh.inc.php";

        $query = "UPDATE usersTable SET username = :username, email = :email, pwd = :pwd WHERE id = $userid;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $name);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt = null;
        $conn = null;

        header("Location: /ggcl/index.php");
        die();

        // to avoid sql injection
    } catch (ErrorException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: /ggcl/index.php");
}
