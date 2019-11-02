<?php
// Get the product data
//$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$product_category = filter_input(INPUT_POST, 'product_category');
$product_name = filter_input(INPUT_POST, 'product_name');
$product_quantity = filter_input(INPUT_POST, 'product_quantity', FILTER_VALIDATE_INT);

// Validate inputs
if ($product_category == null || $product_name == null || $product_quantity == null || $product_quantity == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('../database.php');

    // Add the product to the database
    $query = 'INSERT INTO products
                 (productCategory, productName, productQty)
              VALUES
                 (:product_category, :product_name, :product_quantity)';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_category', $product_category);
    $statement->bindValue(':product_name', $product_name);
    $statement->bindValue(':product_quantity', $product_quantity);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>