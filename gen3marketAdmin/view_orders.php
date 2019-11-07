<?php
/**
 * Created by PhpStorm.
 * User: vanessa
 * Date: 5/9/17
 * Time: 6:19 AM
 */
require_once('../database.php');

//join all the things
$orders = $db->prepare("SELECT
                          i.orderID,
                          i.productID,
                          i.orderAmount,
                          
                          p.productName,
                          p.productCategory,
                          
                          o.orderDate,
                          
                          c.firstName,
                          c.lastName
                        FROM invoices AS i
                        INNER JOIN products AS p ON i.productID=p.productID
                        INNER JOIN orders AS o ON i.orderID=o.orderID
                        INNER JOIN customers AS c ON o.customerID=c.customerID");

$orders->execute();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../styles/main.css" />

    <title>Admin - View Orders</title>
</head>
<body>
<main>
    <header><h1>FoodBank</h1></header>
    <div id="logo">
        <img id="fb" src="../images/foodbank.png">
    </div>
    <h1>Order View</h1>
    <?php foreach ($orders as $order):?>
<!--        var_dump($order);-->
        <p><?php echo 'Customer Name: ' . $order['firstName'] . ' ' .   $order['lastName'];?><br>
        <?php echo 'Products ordered: ' . $order['productName'];?><br>
            <?php echo 'Quantity ordered: ' . $order['orderAmount'];?><br>
            <?php echo 'Order Date: ' . $order['orderDate'];?></p>

    <?php endforeach; ?>

</main>
<section><p><a href="index.php">Back</a></p>
</section>
    <footer>
        <br><p>&copy; <?php echo date("Y"); ?> FoodBank</p>
    </footer>
</body>
</html>

