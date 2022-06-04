<?php 

   include ("../includes/db_connection.php");

   $password = "Distance2022";
   $hashed = password_hash($password, PASSWORD_DEFAULT);

   $sql = mysqli_query($con, "update users set password = '$hashed' where email = 'admin@gmail.com'");

   

?>