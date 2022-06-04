<?php 
session_start();
include '../includes/db_connection.php';

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

     $email = $_POST['email'];
     $password = $_POST['password'];
     $admin_password = $_POST['admin_password'];
     $role = $_POST['role'];
     $user_id = rand(1000000,9999999);
     $pass = $_SESSION['password'];
    
     $check_pass = mysqli_query($con, "select * from users where password = '$admin_password' and role = 'admin' limit 1;");

     if(mysqli_num_rows($check_pass) > 0){
            $check = mysqli_query($con, "select * from users where id = $user_id or email = '$email'");

            if(mysqli_num_rows($check) > 0){
                header("location:../admin/users.php?return=warning");   
            }else {
                $insert_user = mysqli_query($con, "insert into users(id, email, password, role, status) values($user_id, '$email', '$password', '$role', '--');");
                    
                if($insert_user){
                    
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
                    
                $mail->Subject = "New account";
                                
                //Email bsody
                $mail->Body = "<h4>New account has been created for $role.</h4>
                                <p>Account details: <br/> <br/>
                                Email: $email <br/>
                                Password: $password <br/>
                                </p>
                                
                                <i>You may now log in. here <a href='http://wmsu-distance-edu-app.online/'>http://wmsu-distance-edu-app.online</a></i>";
            
                //Add recipient
                $mail->addAddress("$email");

                //Address to which recipient will reply
                $mail->addReplyTo("distance.learning.wmsu@gmail.com", "Reply");

                //Provide file path and name of the attachments
                // $mail->addAttachment("file.txt", "File.txt");        
                // $mail->addAttachment("images/profile.png"); //Filename is optional
                    
                            
                if($mail->send()){
                    header("location:../admin/users.php?return=success");   
                }
                    
                }else{
                    header("location:../admin/users.php?return=error");   
                }
            }
     }else {
        
        header("location:../admin/users.php?return=error");   
     }


    
    

?>