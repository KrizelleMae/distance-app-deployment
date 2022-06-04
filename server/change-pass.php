<?php 
session_start();
include '../includes/db_connection.php';

     $current_pass = $_POST['current-pass'];
     $new_pass = $_POST['new-pass'];
     $confirm_pass = $_POST['confirm-pass'];
     
     
    
     $check_pass = mysqli_query($con, "select * from users where password = '$current_pass' and role = 'admin' limit 1;");

    if(mysqli_num_rows($check_pass) > 0){
        if($new_pass == $confirm_pass){
            $update = mysqli_query($con, "update users set password = '$new_pass' where role = 'admin'");
            if($update) {
                header("location:../admin/settings.php?return=success");  
            }
        } else {
            header("location:../admin/settings.php?return=warning");  
        }
   
    }else {
        header("location:../admin/settings.php?return=error");   
    }


    
    

?>