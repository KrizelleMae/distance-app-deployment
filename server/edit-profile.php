<?php

include '../includes/db_connection.php';

$id = $_POST['id'];
$new_mobile = $_POST['new_mobile'];
$new_email = $_POST['new_email'];

$update = mysqli_query($con, "update user_details set email = '$new_email', mobile = '$new_mobile' where user_id = $id;");

if($update){
    header("location: ../student/profile.php?return=success");
} else {
    header("location: ../student/profile.php?return=error");
}


?>