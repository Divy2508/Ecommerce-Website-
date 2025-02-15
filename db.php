<?php

$servername = "localhost:3306";
$username = "root";
$password = "password";
$db = "rkown";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>