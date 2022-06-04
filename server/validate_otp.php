<?php
     session_start();
     include '../includes/db_connection.php';

     $otp_input = $_POST['otp'];
     $user_id = $_SESSION['temp_id'];

     $sql = "select * from otp where user_id = $user_id;";

     $result = mysqli_query($con, $sql);

     if(mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)){
               if($otp_input == $row['otp']){
                    $ver = mysqli_query($con, "update users set verified = 1 where id = $user_id;");
                    $exp = mysqli_query($con, "update otp set expired = 1 where user_id = $user_id;");


                    if($ver && $exp){
                         header("location: ../");
                         unset($_SESSION["temp_id"]);
                    } else {
                         echo 'error';
                    }
                    
                   
               } else {
                    header("location: ../otp.php?message=error");
               }
          }
     }else{
          echo 'An OTP was not sent to your email.';
     }


?>