<?php

include_once "includes/config_session.inc.php";
include_once "includes/signup_view.inc.php";
include_once "includes/login_view.inc.php";

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
        <form action="includes/login.inc.php" method="POST">
            <input type="text" name="username" id="username" placeholder="username">
            <input type="password" name="pwd" id="pwd" placeholder="****">
            <button>Sign in</button>
        </form>
    </div>
    <?php
    check_login_errors();
    ?>
    <p style="color:#4444449f;font-family:'Poppins';font-size:1.2rem;font-weight:800; padding:16px 0px 0px;margin:0px;text-align:center;">OR</p>
    <div class="container">
        <h3>Sign up</h3>
        <form action="includes/signup.inc.php" method="POST">
            <?php
            signup_inputs();
            ?>
            <button>Create account</button>
        </form>
    </div>
    <?php
    check_signup_errors();
    ?>

</body>

</html>