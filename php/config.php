<?php
$host = "localhost";
$user = "admin04";
$pass = "admin004";
$dbname = "ECTI";

// Create connection
$con = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";