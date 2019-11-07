<?php

require_once('../database.php');

// Get category ID
if (!isset($product_category)) {
    $product_category = filter_input(INPUT_GET, 'product_category');
    if ($product_category == NULL) {
        $product_category = 'BV';
    }
}
// Get name for selected category
$queryCategory = 'SELECT * FROM products
                  WHERE productCategory = :product_category';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':product_category', $product_category);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['productCategory'];
if ($category['productCategory'] === 'BV') {
    $category_name = 'Beverage';
} else if ($category['productCategory'] === 'CF') {
    $category_name = 'Canned Food';
} else {
    $category_name = 'Dry Food';
};
$statement1->closeCursor();


// Get all categories
$query = 'SELECT DISTINCT productCategory FROM products
                       ORDER BY productCategory';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();

// Get products for selected category
$queryProducts = 'SELECT * FROM products
                  WHERE productCategory = :product_category
                  ORDER BY productID';
$statement3 = $db->prepare($queryProducts);
$statement3->bindValue(':product_category', $product_category);
$statement3->execute();
$products = $statement3->fetchAll();
$statement3->closeCursor();
?>

<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Gen3market</title>
    <link rel="stylesheet" type="text/css" href="../styles/main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Gen3market Product Manager</h1></header>
<div id="logo">
    <img id="fb" src="../images/foodbank.png">
</div>

<main>
    <h1>Product List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
            <ul>
                <?php foreach ($categories as $category) : ?>
                    <li><a href=".?product_category=<?php echo $category['productCategory']; ?>">
                            <?php $category['productCategory']; ?>

                                <!--display category's full name-->
                                <?php if ($category['productCategory'] === 'BV') {
                                    echo 'Beverage';
                                } else if ($category['productCategory'] === 'CF') {
                                    echo 'Canned Food';
                                } else {
                                    echo 'Dry Food';
                                }; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th>Name</th>
<!--                <th>Quantity</th>-->
                <th class="right">Quantity</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>

            </tr>

            <?php foreach ($products as $product) : ?>
                <tr>
<!--                    <td>--><?php //echo $product['productCode']; ?><!--</td>-->
                    <td><?php echo $product['productName']; ?></td>
                    <td class="right"><?php echo $product['productQty']; ?></td>
                    <td><form action="delete_product.php" method="post">
                            <input type="hidden" name="product_id"
                                   value="<?php echo $product['productID']; ?>">
                            <input type="hidden" name="product_category"
                                   value="<?php echo $product['productCategory']; ?>">
                            <input type="submit" value="Delete">
                        </form></td>
                    <td><form action="edit_product_form.php" method="post">
                            <input type="hidden" name="product_id"
                                   value="<?php echo $product['productID']; ?>">
                            <input type="hidden" name="product_category"
                                   value="<?php echo $product['productCategory']; ?>">
                            <input type="submit" value="Edit">
                        </form></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_product_form.php">Add Product</a></p>
        <p><a href="view_orders.php">View Orders</a></p>

    </section>
</main>
<footer>
    <br><p>&copy; <?php echo date("Y"); ?> Gen3market</p>
</footer>
</body>
</html>