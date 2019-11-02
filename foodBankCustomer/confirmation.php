<?php
/**
 * Created by PhpStorm.
 * User: vanessa
 * Date: 5/8/17
 * Time: 4:41 PM
*/

require_once('../database.php');


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/main.css">

    <title>Order Confirmation</title>
</head>
<body>
<main>
    <header>FoodBank</header>
    <div id="logo">
        <img id="fb" src="../images/foodbank.png">
    </div>
    <h1>Order Confirmation</h1>
<p>Your order has been added.</p>
<p>Order <a href="index.php">more</a></p>
<p><a href="success.php">Submit Order</a></p>
</main>
<footer>
    <br><p>&copy; <?php echo date("Y"); ?> FoodBank</p>
</footer>

</body>
</html>
