<?php

$dsn = 'mysql:host=www.gen3market.com;dbname="gen3market"'; // data source name
$username = '';
$password = '';

// handling exceptions with try/catch
try {
    $db = new PDO($dsn, $username, $password);
    # echo '<p>You are connected to the user_inf database</p>';
} catch (PDOException $e) {
    $error_message = $e->getMessage(); // $object->method(arguments) syntax for executing a method
    include('db_error.php');
    exit();
}
