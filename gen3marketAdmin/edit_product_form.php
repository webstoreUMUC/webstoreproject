<?php
require_once('../database.php');

// Get IDs
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);

if ($product_id != false) {
    $query = 'SELECT *
          FROM products
          WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
} else {
    include('index.php');
    exit();
}

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
<div id="logo">
    <img id="fb" src="../images/foodbank.png">
</div>

<header><h1>FoodBank Product Manager</h1></header>

<main>
    <h1>Edit Product</h1>

    <form action="edit_product.php" method="post"
          id="edit_product_form">

        <!--Need ID to know which product to update-->
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

        <label>Category:</label>
        <!--Display category ID in text box-->
        <input type="text" name="product_category"
               value="<?php if (isset($product['productCategory'])) echo htmlspecialchars($product['productCategory']); ?>"><br>

        <label>Name:</label>
        <input type="text" name="product_name"
               value="<?php if (isset($product['productName'])) echo htmlspecialchars($product['productName']); ?>"><br>

        <label>Quantity:</label>
        <!--Display category ID in text box-->
        <input type="text" name="product_quantity"
               value="<?php if (isset($product['productQty'])) echo htmlspecialchars($product['productQty']); ?>"><br>

        <label>&nbsp;</label>
        <input type="submit" value="Save Changes"><br>
    </form>
    <p>
        <a href=".?category_id=<?php if (isset($product['categoryID'])) echo htmlspecialchars($product['categoryID']); ?>">
            View Product List
        </a>
</main>

<footer>
    <br><p>&copy; <?php echo date("Y"); ?> FoodBank </p>
</footer>
</body>
</html>

