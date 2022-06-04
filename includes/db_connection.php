<?php

// $servername = "localhost";
// $username = "u938195940_un_dlearning";
// $password = "Dlearning2022";
// $database = "u938195940_dlearning";

$servername = "localhost";
$username = "root";
$password = "";
$database = "distance_learning";


$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


?>