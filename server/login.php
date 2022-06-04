<?php
   include ("../includes/db_connection.php");
   session_start();
   
   if(isset($_POST['email'])){
       $email = $_POST['email'];
       $password = $_POST['password'];


        $sanitized_email = 
        mysqli_real_escape_string($con, $email);
        
        $sanitized_password = 
        mysqli_real_escape_string($con, $password);
     
        
       $sql = mysqli_query($con, "SELECT * FROM users WHERE email = '" 
    . $sanitized_email . "' limit 1");
      

        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
            
                if(password_verify($sanitized_password, $row['password'])) {
                    $email = $row["email"];

                    if($row["role"] == "admin"){
                    
                        $_SESSION['role'] = $row["role"];
                        $_SESSION['password'] = $row["password"];
                        header("location: ../admin/");
                    } else if ($row["role"] == "student"){
                        
                        if($row['verified'] == 1){

                            $user = mysqli_query($con, "select * from user_details where user_id = $row[id];");

                            while($item = mysqli_fetch_assoc($user)){

                            $_SESSION['email'] = $item["email"];
                            $_SESSION['id'] = $row["id"];
                            $_SESSION['first_name'] = $item["first_name"];
                            $_SESSION['last_name'] = $item["last_name"];
                            $_SESSION['email'] = $item["email"];
                            $_SESSION['role'] = $row["role"];

                            }

                            mysqli_query($con, "delete from otp where expired = 1;");
                            header("location: ../student/");

                        }else {

                            $_SESSION['temp_id'] = $row["id"];
                            header("location: ../otp.php");

                        }
                        
                        
                    }else{
                    $_SESSION['role'] = $row["role"];
                        header("location: ../adviser/");
                    }
                } else {
                    header("location: ../index.php?message=error");
                }

            }
        } else {
              header("location: ../index.php?message=error");
        }
        

    


       
    }   

?>

