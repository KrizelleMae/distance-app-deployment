<?php
session_start();
include '../includes/db_connection.php';

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$user_id = $_GET["id"];


$sql = "update application SET status = 'admission' WHERE user_id = $user_id;";
$result = mysqli_query($con, $sql);

    if ($result) {

          $get_email = mysqli_query($con, "select email from users where id = $user_id;");
          $email = $get_email->fetch_row();
          

         
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
            
          $mail->Subject = "Congratulations! Your application has been approved.";
                        
          //Email bsody
          $mail->Body = "<p>You may now proceed to ADMISSION: 
                         <br>
                         <p>Kindly contact the Distance Learning Education for the next process. Thank you!
                         <br>
                         You can contact us @: <br> dlearning.wmsu@gmail.com  <br> wmsu@wmsu.edu.ph
                         <br><br>
                         For more info, visit <a href='http://wmsu-distance-learning.online/index.php'>wmsu-distance-learning.online</a>
                         </p>";
    
          //Add recipient
          $mail->addAddress("$email[0]");

          //Address to which recipient will reply
          $mail->addReplyTo("distance.learning.wmsu@gmail.com", "Reply");

          //Provide file path and name of the attachments
          // $mail->addAttachment("file.txt", "File.txt");        
          // $mail->addAttachment("images/profile.png"); //Filename is optional
            
                       
          if($mail->send()){
            mysqli_query($con, "update users SET status = 'admission' WHERE id = $user_id;");
              header("location: ../admin/view-answers.php?id=$user_id&message=success");
          }
  
         $update_user = mysqli_query($con, "update users SET status = 'admission' WHERE id = $user_id;");
          
         if($update_user) {
           header("location: ../adviser/view-answers.php?id=$user_id&message=success");
         } else {
            header("location: ../adviser/view-answers.php?id=$user_id&message=error");
         }
          
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }

?>