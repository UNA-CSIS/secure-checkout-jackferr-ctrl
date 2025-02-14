<?php
session_start();
$_SESSION['loggedin'] = false;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Movie Item Shop </title>
    </head>

    <body>
        <h1> Order your items </h1>
        <form method="post" action="order.php">
            <p>
                <label for="lightsaber">Lightsaber ($2500)</label>
                <input type="number" name="num_saber" id="lightsaber" min="0" value="0" >
            </p>
            <p>
                <label for="teleporter">Teleporter($2,500,000)</label>
                <input type="number" name="num_teleporter" id="teleporter" min="0" value="0" >
            </p>
            <p>
                <label for="dj">DJ Equipment(used)($25)</label>
                <input type="number" name="num_dj" id="dj" min="0" value="0" >
            </p>
            <p>
                <input type="submit" name="next" value="Place Order">
            </p>
        </form>
    </body>
</html>