<?php

$host="localhost";
$port=3306;
$socket="";
$user="sparrow1_grouplo";
$password="Passw0rd123";
$dbname="sparrow1_gen3market";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();
