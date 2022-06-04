<?php 
     session_start();
     include '../includes/db_connection.php';
     require '../phpmailer/PHPMailer.php';
     require '../phpmailer/SMTP.php';
     require '../phpmailer/Exception.php';
    

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


     //START HERE
     $generate_otp = rand(100000, 999999);


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
          $mail->Username = "distance.learning.wmsu@gmail.com";
          
          //Set gmail password
          $mail->Password = "dlearningwmsu";
    
          $mail->setFrom('distance.learning.wmsu@gmail.com');
          $mail->FromName = "Distance Learning WMSU";

          //Enable HTML              
          $mail->isHTML(true);
            
          $mail->Subject = "SAmple message verification from dl";
                        
          //Email bsody
          $mail->Body = "<h3>This is a sample message</h3>";
    
          //Add recipient
          $mail->addAddress("bg201803214@wmsu.edu.ph");

          //Address to which recipient will reply
          $mail->addReplyTo("distance.learning.wmsu@gmail.com", "Reply");

          //Provide file path and name of the attachments
          // $mail->addAttachment("file.txt", "File.txt");        
          // $mail->addAttachment("images/profile.png"); //Filename is optional
            
                       
          if(!$mail->send()){
              echo "Invalid email";
          } else {
               echo "Email sent!";
          }

?>