<?php 
$page = "students"; 
include './auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Students</title>
      
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />

      <link rel="stylesheet" href="../css/all-styles.css" />

      <link rel="stylesheet" href="../css/navbar.css" />

      <script src="../tailwind/tailwind-cdn.js"></script>
</head>
 <body class="bg-gray-100 h-full">
      <?php include './components/navbar.php'; ?>
      <div class="content mt-10">
            <div class="text-3xl">THIS IS THE STUDENTS PAGE</div>
      </div>
   </body>
</html>