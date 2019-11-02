<?php

// Get the product data
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$productQtyWithdraw = filter_input(INPUT_POST, 'productQty', FILTER_VALIDATE_INT);

$product_name = filter_input(INPUT_POST, 'product_name');
$product_category = filter_input(INPUT_POST, 'product_category');

// get customer ID
$c = filter_input(INPUT_POST, 'customerID', FILTER_VALIDATE_INT);

// Validate inputs
if ($product_id == null || $product_id == false ||
    $productQtyWithdraw == null || $productQtyWithdraw == false
) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('../database.php');

// instantiate variable	
    $productQtyFoodBank = 0;

// Get products for selected category to subtract quantity - withdraw quantity
//$queryProduct = 'SELECT productQty FROM products
//              WHERE product_id = :product_id';
    $queryProduct = 'SELECT * FROM products
                  WHERE productID = :product_id';
    $statement1 = $db->prepare($queryProduct);
//$statement1->bindValue(':productQty', $productQtyFoodBank);
    $statement1->bindValue(':product_id', $product_id);
    $statement1->execute();
    $product = $statement1->fetch();
    $statement1->closeCursor();

//    calculate new product quantity
    $productQty_final = $product['productQty'] - $productQtyWithdraw;
//$orderDate = date("m/d/Y");

//    set default time zone to est
    date_default_timezone_set('America/New_York');

//    this format seems to work better in the database
    $orderDate = date("Y-m-d");

//    this format seems to work better in the database
    $orderTime = date("H:i:s");


    // Update the product to the database  
    $queryQuantity = "UPDATE products
          SET productQty = :productQty_final, productName = :product_name, productCategory = :product_category
          WHERE productID = :product_id";

    $statement2 = $db->prepare($queryQuantity);
    $statement2->bindValue(':productQty_final', $productQty_final);
    $statement2->bindValue(':product_id', $product_id);
    $statement2->bindValue(':product_name', $product_name);
    $statement2->bindValue(':product_category', $product_category);

    $statement2->execute();
    $statement2->closeCursor();

    $queryOrder = 'INSERT INTO orders
					(customerID, orderDate, orderTime)
				VALUES
					(:c, :orderDate, :orderTime)';

    $statement3 = $db->prepare($queryOrder);
    $statement3->bindValue(':c', $c);
    $statement3->bindValue(':orderDate', $orderDate);
    $statement3->bindValue(':orderTime', $orderTime);
    $cust = $statement3->execute();
    $statement3->closeCursor();

//    to get order id
    $orderId = $db->lastInsertId();


    $queryInvoice = 'INSERT INTO invoices
					(orderID, productID, orderAmount)
				VALUES
					(:order_id, :product_id, :order_amount)';

    $statement4 = $db->prepare($queryInvoice);
    $statement4->bindValue(':order_id', $orderId);
    $statement4->bindValue(':product_id', $product_id);
    $statement4->bindValue(':order_amount', $productQtyWithdraw);
    $statement4->execute();
    $statement4->closeCursor();


    // Display order confirmation page
    include('confirmation.php');
}
?>