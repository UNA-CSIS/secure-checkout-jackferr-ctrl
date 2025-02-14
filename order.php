<?php
session_start();

// save form data into session (saving and interest)
$_SESSION['num_saber'] = $_POST['num_saber'];
$_SESSION['num_teleporter'] = $_POST['num_teleporter'];
$_SESSION['num_dj'] = $_POST['num_dj'];

$prices = [
    'saber' => 2500,
    'teleporter' => 2500000,
    'dj' => 25
];
$total = ($_SESSION['num_saber'] * $prices['saber']) +
        ($_SESSION['num_teleporter'] * $prices['teleporter']) +
        ($_SESSION['num_dj'] * $prices['dj']);
$_SESSION['total'] = $total;
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Summary </title>
    </head>
    <body>
        <p>The details submitted were as follows: </p>
        <ul>
            <li>Lightsaber: <?= $_SESSION['num_saber'] ?> x $2,500 </li>
            <li>Teleporter: <?= $_SESSION['num_teleporter'] ?> x $2,500,000 </li>
            <li>DJ Equipment: <?= $_SESSION['num_dj'] ?> x $25 </li>
        </ul>
        <p><strong>Subtotal: $<?= $total ?></strong></p>
        <form method="post" action="tax.php">
            <input type="submit" value="Confirm Purchase">
        </form>
    </body>
</html>