<?php
// Get the product data
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$product_category = filter_input(INPUT_POST, 'product_category');
$product_name = filter_input(INPUT_POST, 'product_name');
$product_quantity = filter_input(INPUT_POST, 'product_quantity', FILTER_VALIDATE_INT);


// Validate inputs
if ($product_id == null || $product_id == false || $product_category == null ||
    $product_name == null || $product_quantity == null || $product_quantity == false
) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('../database.php');

    // Update product based on product id and values passed in
    $query = "UPDATE products
          SET productCategory = :product_category, productName = :product_name, productQty = :product_quantity
          WHERE productID = :product_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->bindValue(':product_category', $product_category);
    $statement->bindValue(':product_name', $product_name);
    $statement->bindValue(':product_quantity', $product_quantity);
    $results = $statement->execute();
    $statement->closeCursor();


    // Display the Product List page
    include('index.php');
}
?>