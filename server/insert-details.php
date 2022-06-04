<?php 
session_start();
include '../includes/db_connection.php';

    $user_id = $_SESSION['id'];

    $birthdate = date($_POST['birthdate']);
    $gender = $_POST['gender'];
    $civil = $_POST['civil'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $tel = $_POST['tel'];
    $house = $_POST['house'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $university = $_POST['university'];
    $degree = $_POST['degree'];
    $drive = $_POST['drive'];



    $sql = mysqli_query($con, 
    "update user_details set 
    birthdate = '$birthdate', 
    gender = '$gender', 
    civil_stat = '$civil', 
    email = '$email', 
    mobile = '$mobile', 
    tel = '$tel', 
    house = '$house', 
    street = '$street', 
    city = '$city', 
    state = '$state', 
    country = '$country', 
    zip = '$zip', 
    university = '$university', 
    degree = '$degree', 
    drive = '$drive' 
    where user_id = $user_id;");


    if($sql){
        $query = mysqli_query($con, "update users set status = 'application' where id = $user_id;");
        if($query){
             echo '<script>alert("Success")</script>';
            header("location:../student/index.php");
        }
       
    }else{
        echo "Failed: " . mysqli_connect_error();
    }


    

    
?>