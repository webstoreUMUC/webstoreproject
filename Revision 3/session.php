<?php

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = new mysqli("localhost", "sparrow1_grouplo", "Passw0rd123", "sparrow1_gen3market");

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['user'];

// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from customer where email = '$user_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>