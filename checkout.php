<?php
/*
 * sources used http://www.w3schools.com/Php/func_string_strlen.asp
 *              http://www.w3schools.com/pHp/func_array_in_array.asp
 *              http://www.w3schools.com/Php/func_string_substr.asp
 *              https://www.w3schools.com/php/php_superglobals_server.asp
 *              https://www.geeksforgeeks.org/php-functions/
 *              https://www.w3schools.com/php/func_string_number_format.asp
 *              https://www.php.net/manual/en/language.references.pass.php
 *              https://www.w3schools.com/php/php_form_validation.asp
 * 
 */
session_start();
require 'helperFunctions.php';
$total= $_SESSION['total'];
if ($_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$message='';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['card_number'])) {
        $cardNumber = $_POST['card_number'];
        $cardType = '';

        if (validateCard($cardNumber, $cardType)) {
            $last4 = substr($cardNumber, -4);
            $message = "Your card $cardType, ending with $last4 has been charged $" . number_format($total, 2);
        } else {
            $message = "Invalid card.";
        }
    } else {
        $message = "Card number is required.";
    }
}

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Checkout</title>
    </head>
    <body>
        <h1>Checkout</h1>
        <p>Total Amount: $<?= number_format($total, 2) ?></p>

        <form method="post">
            <p>
                <label for="card_number">Credit Card Number:</label>
                <input type="text" name="card_number" id="card_number" required>
            </p>
            <p>
                <input type="submit" value="Submit Payment">
            </p>
            <p><input type="button" value="Return to Home" onclick="window.location.href='index.php'"></p>
        </form>

            <p><strong><?= $message ?></strong></p>
    </body>
</html>
