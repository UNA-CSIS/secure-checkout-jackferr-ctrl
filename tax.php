<?php
session_start();
$sub_total = $_SESSION["total"];
$tax_rate = 0.095;
$tax = $sub_total * $tax_rate;
$total = $sub_total + $tax;

$_SESSION['total'] = $total
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tax Calculation</title>
    </head>
    <body>
        <h1>Order Total</h1>
        <p>Subtotal: $<?= number_format($sub_total, 2) ?></p>
        <p>Tax (9.5% - Florence): $<?= number_format($tax, 2) ?></p>
        <p><strong>Total: $<?= number_format($total, 2) ?></strong></p>

        <form method="post" action="checkout.php">
            <input type="submit" value="Proceed to Checkout">
        </form>
        <form method="get" action="index.php">
            <input type="submit" value="Continue Shopping">
        </form>
    </body>
</html>