<?php

declare(strict_types=1);

function signup_inputs()
{
    if (isset($_SESSION['signup_data']['username']) && !isset($_SESSION['errors_signup']['username_taken'])) {
        echo '<input type="text" name="username" id="username" placeholder="username" value="' . $_SESSION['signup_data']['username'] . '">';
    } else {
        echo '<input type="text" name="username" id="username" placeholder="username">';
    }

    echo '<input type="password" name="pwd" id="pwd" placeholder="****">';

    if (isset($_SESSION['signup_data']['email']) && !isset($_SESSION['errors_signup']['email_used']) && !isset($_SESSION['errors_signup']['invalid_email'])) {
        echo '<input type="text" name="email" id="email" placeholder="email" value="' . $_SESSION['signup_data']['email'] . '">';
    } else {
        echo '<input type="email" name="email" id="email" placeholder="email">';
    }
}

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        foreach ($errors as $error) {
            echo "<p class='signup-errors'>" . $error . "</p>";
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET['signup']) && $_GET['signup'] === "success") {
        echo "<p class='signup-success'>" . "Signup success!" . "</p>";
    }
}
