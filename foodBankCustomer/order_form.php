<?php

require_once('../database.php');

$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);

$query = 'SELECT productID, productCategory, productName, productQty
          FROM products
          WHERE productID = :product_id';
$statement = $db->prepare($query);
$statement->bindValue(':product_id', $product_id);
$statement->execute();
$product = $statement->fetch();
$statement->closeCursor();

$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();


// add customer ID
$c = filter_input(INPUT_POST, 'customerID');

?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Food Bank</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css"/>
</head>

<!-- the body section -->
<body>
<header><h1>FoodBank</h1></header>

<main>
    <h1>Order Form</h1>
    <table>
        <tr>
            <th>Category</th>
            <th>Name</th>
            <th class="right">Quantity</th>
        </tr>


        <tr>
            <!--Will display the product category-->
            <td>
                <?php
                if ($product[1] == 'BV') {
                    echo 'Beverage';
                } else if ($product[1] == 'CF') {
                    echo 'Canned Food';
                } else if ($product[1] == 'DF') {
                    echo 'Dry Food';
                } else {
                    echo '';
                }
                ?>
            </td>
            <!--End of display product category-->


            <td><?php echo $product[2]; ?></td>


            <!-- Order Button -->
            <td>
                <form action="order.php" method="post">
                    <input type="hidden" name="product_id" value="<?php echo $product['productID']; ?>">
                    <input type="hidden" name="product_name" value="<?php echo $product['productName']; ?>">
                    <input type="hidden" name="product_category" value="<?php echo $product['productCategory']; ?>">

                    <input type="hidden" name="customerID" value="<?php echo $c; ?>">
                    <!--Drop Down-->
                    <select name="productQty">
                        <?php
                        for ($i = 1; $i <= $product[3]; $i++) {
                            echo "<option value=" . $i . ">" . $i . "</option>";
                        }
                        ?>
                    </select>

                    <input type="submit" value="Submit Order">
                </form>
            </td>
            <!--End of order button-->

        </tr>
    </table>


    <p><a href="index.php">View Product List</a></p>
</main>
<footer>
    <p>&copy; <?php echo date("Y"); ?> FoodBank</p>
</footer>
</body>
</html>