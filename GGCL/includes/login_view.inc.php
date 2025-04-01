<?php

declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION['errors_login'])) {
        $errors = $_SESSION['errors_login'];

        foreach ($errors as $error) {
            echo "<p class='login-errors'>" . $error . "</p>";
        }
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo "<p class='login-success'>" . "Signup success!" . "</p>";
    }
}
