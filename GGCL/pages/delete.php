<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGCL | Delete</title>
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
        <h3>Delete Account</h3>
        <form action="../includes/userdelete.inc.php" method="post">
            <input type="text" name="username" id="username" required placeholder="username">
            <input type="password" name="pwd" id="pwd" required placeholder="****">
            <button>Delete account</button>
        </form>
    </div>

</body>

</html>