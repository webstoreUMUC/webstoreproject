<?php
require_once('../database.php');

// get product category
$product_category = filter_input(INPUT_POST, 'product_category');

// Delete the product from the database
if ($product_category != null) {
    $query = 'DELETE FROM products
              WHERE productCategory = :product_category';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_category', $product_category);
    $success = $statement->execute();
    $statement->closeCursor();
}

// Display the Product List page
include('index.php');