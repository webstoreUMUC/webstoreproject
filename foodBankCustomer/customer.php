<?php

require_once('../database.php');


/* Insert customer data into database and get customerID for order */
$f = filter_input(INPUT_POST, 'firstName');
$l = filter_input(INPUT_POST, 'lastName');
$p = filter_input(INPUT_POST, 'phoneNumber');

//phone number must be 10-digits
if ($f == NULL || $l == NULL || $p == NULL || strlen($p) != 10) {
    $error = "Invalid data. Check all fields and try again.";
    include('error.php');
    die();
}

$customerQuery = "insert into customers (firstName,lastName,phoneNumber) values ('$f', '$l', '$p')";

$db->exec($customerQuery);
$customer_id = $db->lastInsertId();


$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);

//get products
$queryProducts = 'SELECT * FROM products';
$statement1 = $db->prepare($queryProducts);
$statement1->execute();
$products = $statement1->fetchAll();
$statement1->closeCursor();


?>

<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>FoodBank</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css"/>
    <!--No Css Applied Yet -->
</head>

<!-- the body section -->
<body>
<main>
    <header><h1>FoodBank - Place An Order</h1></header>
    <div id="logo">
        <img id="fb" src="../images/foodbank.png">
    </div>
    <h1>Currently Available Products</h1>

    <section>
        <!-- display a table of products -->

        <table>
            <tr>
                <th>Category</th>
                <th>Name</th>
                <th class="right">Quantity</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($products as $product) : ?>
                <tr>
                    <!--Will display the product category-->
                    <td>
                        <?php
                        if ($product['productCategory'] == 'BV') {
                            echo 'Beverage';
                        } else if ($product['productCategory'] == 'CF') {
                            echo 'Canned Food';
                        } else if ($product['productCategory'] == 'DF') {
                            echo 'Dry Food';
                        } else {
                            echo '';
                        }
                        ?>
                    </td>
                    <!--End of display product category-->


                    <td><?php echo $product['productName']; ?></td>

                    <td class="right"><?php echo $product['productQty']; ?></td>

                    <!-- Order Button -->
                    <td>
                        <form action="order_form.php" method="post">
                            <input type="hidden" name="product_id"
                                   value="<?php echo $product['productID']; ?>">
                            <input type="hidden" name="customerID"
                                   value="<?php echo $customer_id; ?>">
                            <input type="submit" value="order">
                        </form>
                    </td>
                    <!--End of order button-->

                </tr>
            <?php endforeach; ?>
        </table>

    </section>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> FoodBank</p>
</footer>
</body>
</html>