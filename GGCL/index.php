<?php
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GGCL | Home</title>
    <link rel="stylesheet" href="/ggcl/css/main.css">
</head>

<body>
    <header>
        <ul class="nav">
            <a href="/ggcl/index.php">Home</a>
            <a href="/ggcl/pages/search.php">Search</a>
            <a href="/ggcl/pages/update.php">Update</a>
            <a href="/ggcl/pages/delete.php">Delete</a>
        </ul>
    </header>
    <div class="container">
        <h3>Login</h3>
        <form action="includes/formhandler.inc.php" method="post">
            <input type="text" name="username" id="username" required placeholder="username">
            <input type="email" name="email" id="email" required placeholder="email">
            <input type="password" name="pwd" id="pwd" required placeholder="****">
            <button>Sign in</button>
        </form>
    </div>

</body>

</html>