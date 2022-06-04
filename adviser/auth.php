<?php

require '../includes/db_connection.php';

session_start();

if(isset($_SESSION['role']))
{
    if($_SESSION['role'] == 'role')
    {
        header('location: ../adviser/');
    }
}
else{
    header('location: ../');
} 


?>