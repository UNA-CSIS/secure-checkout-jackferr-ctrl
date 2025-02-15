<?php
session_start();
require 'helperFunctions.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    if ($username === $password) {
        $_SESSION['loggedin'] = True;
        header("Location: checkout.php");
        exit();
    } else {
        $error = "Invalid credintials.";
    }
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>

        <form method="post">
            <p>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required>
            </p>
            <p>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </p>
            <p>
                <input type="submit" value="Login">
            </p>
        </form>

        <p style="color: red;"><strong><?= $error ?? '' ?></strong></p>
    </body>
</html>