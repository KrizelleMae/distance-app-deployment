<?php 
session_start();
include '../includes/db_connection.php';

    $user_id = $_SESSION['id'];
    $program = $_POST['program'];
    $major = $_POST['major'];


    if($program == "Arts in Nursing"){

        $program = 'Nursing';
         
        $sql = mysqli_query($con, "update user_details set major = '$major', program = '$program' where user_id  = $user_id;");

        if($sql){
        
                mysqli_query($con, "update users set status = 'info' where id = $user_id;");
                $_SESSION['program'] = $program; 
                header("location:../student/index.php?return=success");
        
        
        }else{
            echo "Failed: " . mysqli_connect_error();
        }
    }else {
        
        $sql = mysqli_query($con, "update user_details set major = '$major', program = '$program' where user_id  = $user_id;");

        if($sql){
        
                mysqli_query($con, "update users set status = 'info' where id = $user_id;");
                $_SESSION['program'] = $program; 
                header("location:../student/index.php?return=success");
        
        
        }else{
            echo "Failed: " . mysqli_connect_error();
        }
    }
   

?>