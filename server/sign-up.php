<?php
  
     include '../includes/db_connection.php';

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

     $user_id = rand(1000000,9999999);
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_pass = $_POST['confirm-pass'];

     $generate_otp = rand(10000,99999);
    
    if($password == $confirm_pass) {
         $check = mysqli_query($con, "select * from users where id = $user_id or email = '$email'");

            if(mysqli_num_rows($check) > 0){
                header("location: ../signup.php?message=warning");   
            }else {
              $insert_user = mysqli_query($con, 
              "insert into users(id, email, password, role)
              values($user_id, '$email', '$password', 'student');");
              
         
              $insert_details = mysqli_query($con, 
              "insert into user_details(user_id, first_name, last_name, email) 
              values($user_id, '$first_name', '$last_name', '$email');");
         
              if($insert_user && $insert_details) {
                   include './send_otp.php';
              } else {
                   echo 'failed';
              }
            }
    } else {
          header("location: ../signup.php?message=error");
    }

   


    

    
?>