<?php
	session_start();
	require_once('database.php');
	
	if ($_SESSION['user'] == NULL){
		?><script>window.alert("You are not logged in.");</script> <?php
		include('index.php');
	}
	else {
		// Get the product data
		$product_id = filter_input(INPUT_POST, 'ID', FILTER_VALIDATE_INT);
		$productQtyWithdraw = filter_input(INPUT_POST, 'withdrawQty', FILTER_VALIDATE_INT);
		$productQty = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
		$name = filter_input(INPUT_POST, 'name');
		$table = filter_input(INPUT_POST, 'table');
		$category = filter_input(INPUT_POST, 'category');
		$price = filter_input(INPUT_POST, 'price');

		// get customer ID
		$email = $_SESSION['user'];

		$queryProduct = 'SELECT * FROM $table
					  WHERE productID = $product_id';
		$statement1 = $db->prepare($queryProduct);
		$statement1->execute();
		$product = $statement1->fetch();
		$statement1->closeCursor();
		
		$productQty_final = $productQty - $productQtyWithdraw;
		
		//formats the productQty_final to have 2 decimal points
		$totalPrice = sprintf("%.2f", $price * $productQtyWithdraw);
		
		$queryOrder = 'INSERT INTO cart 
						(email, productTable, category, name, productID, productQty, price)
					VALUES
						(:email, :table, :category, :name ,:product_id, :productQtyWithdraw, :totalPrice)';
		
		$statement2 = $db->prepare($queryOrder);
		$statement2->bindValue(':email', $email);
		$statement2->bindValue(':table', $table);
		$statement2->bindValue(':category', $category);
		$statement2->bindValue(':name', $name);
		$statement2->bindValue(':product_id', $product_id);
		$statement2->bindValue(':productQtyWithdraw', $productQtyWithdraw);
		$statement2->bindValue(':totalPrice', $totalPrice);
		$statement2->execute();
		$statement2->closeCursor();
		
		$queryQuantity = "UPDATE $table
			  SET productQty = $productQty_final 
			  WHERE productID = $product_id";

		$statement3 = $db->prepare($queryQuantity);
		$statement3->execute();
		$statement3->closeCursor();
		
		
		
		header("location: index.php");
	}
?>