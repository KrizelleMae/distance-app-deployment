<?php 
session_start();
include '../includes/db_connection.php';

    $user_id = $_SESSION['id'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $answer3 = $_POST['answer3'];
    $answer4 = $_POST['answer4'];
    $answer5 = $_POST['answer5'];
    $program = $_SESSION['program'];
    $date = date('Y-m-d');

    $sql = mysqli_query($con, "insert into answers(answer1, answer2, answer3, answer4, answer5, user_id) values('$answer1', '$answer2', '$answer3', '$answer4', '$answer5', $user_id);");


    if($sql){
        $query = mysqli_query($con, "insert into application(program, date_applied, date_approved, user_id) values('$program', '$date', '------', $user_id);");
        if($query){
            mysqli_query($con, "update users set status = 'pending' where id = $user_id;");
            
            header("location:../student/index.php?message=success");
        }
       
    }else{
        echo "Failed: " . mysqli_connect_error();
    }

?>