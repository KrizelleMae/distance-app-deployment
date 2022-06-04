<?php 
     session_start();
     include '../includes/db_connection.php';
     require '../phpmailer/PHPMailer.php';
     require '../phpmailer/SMTP.php';
     require '../phpmailer/Exception.php';
    

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

          //Create instance of PHPMailer
	     $mail = new PHPMailer();
         
          //Set mailer to use smtp
          $mail->isSMTP();
        
          //$mail->SMTPDebug = 3;

          //Define smtp host
          $mail->Host = "smtp.gmail.com";
    
          //Enable smtp authentication
          $mail->SMTPAuth = true;
     
          //Set smtp encryption type (ssl/tls)
          $mail->SMTPSecure = "tls";
    
          //Port to connect smtp
          $mail->Port = "587";


          //Set email     
          $mail->Username = "dlearning.wmsu@gmail.com";
          
          //Set gmail password
          $mail->Password = "dlearningwmsu1";
    
          $mail->setFrom('dlearning.wmsu@gmail.com');
          $mail->FromName = "Distance Learning WMSU";

          //Enable HTML              
          $mail->isHTML(true);
            
          $mail->Subject = "One-time Password for Distance Learning Online Application";
                        
          //Email bsody
          $mail->Body = "<h4>OTP Registration</h4>
                         <p>Your one-time password (OTP) is: <b>$generate_otp</b></p>";
    
          //Add recipient
          $mail->addAddress("$email");

          //Address to which recipient will reply
          $mail->addReplyTo("dlearning.wmsu@gmail.com", "Reply");

          //Provide file path and name of the attachments
          // $mail->addAttachment("file.txt", "File.txt");        
          // $mail->addAttachment("images/profile.png"); //Filename is optional
            
                       
          if(!$mail->send()){
              echo "Invalid email";
          } else {
               $sql = mysqli_query($con, "insert into otp (otp, user_id) values ($generate_otp,  $user_id)");
               if($sql){
                    $_SESSION['temp_id'] = $user_id;
                    header("location: ../otp.php");
               }
          }

?>