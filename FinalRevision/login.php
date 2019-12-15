<?php

session_start(); //Starting session

$error = ''; //Variable to store error

if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$error = "Email or Password is invalid";
	}
	else{
		// Define $email and $password
		$email = $_POST['email'];
		$password = $_POST['password'];
		// mysqli_connect() function opens a new connection to the MySQL server.
		$conn = new mysqli("localhost", "sparrow1_grouplo", "Passw0rd123", "sparrow1_gen3market");
		// SQL query to fetch information of registerd users and finds user match.
		$query = "SELECT email, password from customer where email=? AND password=? LIMIT 1";
		// To protect MySQL injection for Security purpose
		$stmt = $conn->prepare($query);
		$stmt->bind_param('ss', $email, $password);
		$stmt->execute();
		$stmt->bind_result($email, $password);
		$stmt->store_result();
		if($stmt->fetch()) { //fetching the contents of the row {
			$_SESSION['user'] = $email; // Initializing Session
			header("location: index.php");
			
		}
		else{
			echo 'Error: invalid email or password';
			include('log_reg.php');
		}
	}
	mysqli_close($conn);
}

?>