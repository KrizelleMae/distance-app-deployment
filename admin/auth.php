<?php

require '../includes/db_connection.php';

session_start();

if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'admin')
    {
        header('location: ../admin/');
    }
}
else{
    header('location: ../index.php');
} 


?>