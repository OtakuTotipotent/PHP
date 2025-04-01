<?php

require_once "../includes/dbh.inc.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = trim($_POST['username']);
    try {
        $query = "SELECT * FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $name);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    try {
        $query = "SELECT * FROM users;";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGCL | Search</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>
    <header>
        <ul class="nav">
            <a href="../index.php">Home</a>
            <a href="./search.php">Search</a>
            <a href="./update.php">Update</a>
            <a href="./delete.php">Delete</a>
        </ul>
    </header>
    <div class="container">
        <h3>GGCL/DB</h3>
        <form action="" method="post">
            <fieldset>
                <legend>Enter username</legend>
                <input type="search" name="username" id="username" placeholder="Search by username">
            </fieldset>
        </form>
    </div>
    <div class="results">
        <?php

        if (empty($result)) {
            echo "<div class='search-data'> <p>Nothing found in database</p> </div>";
        } else {
            foreach ($result as $row) {
                echo "<div class='search-data'>";
                echo "<p>User Id : " . $row['id'] . "</p>";
                echo "<p>Name: " . $row["username"] . "</p>";
                echo "<p>Mail: " . $row["email"] . "</p>";
                echo "<p>Dated: " . $row["created_at"] . "</p> </div>";
            }
        }

        ?>
    </div>


</body>

</html>