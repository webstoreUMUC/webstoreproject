<?php
$host="50.87.144.48";
$port=3306;
$socket="";
$user="sparrow1_sparrow";
$password="h@k3d1776";
$dbname="sparrow1_gen3market";
$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());
//$con->close();
?>