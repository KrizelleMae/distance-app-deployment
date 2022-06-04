<?php

include '../includes/db_connection.php';


$sql = mysqli_query($con, "select email from users where id = 1;");
$email = $sql->fetch_row();

echo $email[0];


?>