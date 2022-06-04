<?php

require '../includes/db_connection.php';


if(isset($_SESSION['role']))
{
    if($_SESSION['role'] != 'student')
    {
        header('location: ../student/');
    }
}
else{
    header('location: ../');
} 


?>