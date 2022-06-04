<?php
session_start();
include '../includes/db_connection.php';

$user_id = $_GET["id"];


$sql = "update application SET status = 'approved' WHERE user_id = $user_id;";
$result = mysqli_query($con, $sql);

    if ($result) {

      mysqli_query($con, "update users SET status = 'approved' WHERE id = $user_id;");
      
      header("location: ../admin/view-answers.php?id=$user_id&message=success");
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }

?>