<?php
require('../database.php');

$query = 'SELECT *
          FROM products
          ORDER BY productCategory';
$statement = $db->prepare($query);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();


//get product categories
$query = 'SELECT DISTINCT productCategory
          FROM products
          ORDER BY productCategory';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>FoodBank</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>

<!-- the body section -->
<body>
<header><h1>FoodBank Manager</h1></header>
<div id="logo">
    <img id="fb" src="../images/foodbank.png">
</div>
<main>
    <h1>Add Product</h1>
    <form action="add_product.php" method="post"
          id="add_product_form">

        <!--        display categories-->
        <label>Category:</label>
        <select name="product_category">
            <?php foreach ($categories as $category) :
                ?>

                <!--loop through categories-->
                <option value="<?php echo $category['productCategory']; ?>">

                    <!--display category's full name-->
                    <?php if ($category['productCategory'] === 'BV') {
                        echo 'Beverage';
                    } else if ($category['productCategory'] === 'CF') {
                        echo 'Canned Food';
                    } else {
                        echo 'Dry Food';
                    }; ?>
                </option>

            <?php endforeach; ?>
        </select><br>

        <label>Name:</label>
        <input type="text" name="product_name"><br>

        <label>Quantity:</label>
        <input type="text" name="product_quantity"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Product"><br>
    </form>
    <p><a href="index.php">View Product List</a></p>
</main>

<footer>
    <p>&copy; <?php echo date("Y"); ?> FoodBank</p>
</footer>
</body>
</html>