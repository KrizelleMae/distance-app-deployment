<?php 

$page = "applicants";
$stat = "declined";
include './auth.php'

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Adviser | Enrollment</title>

      <?php include '../includes/links.php'; ?>

      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />

      <script src="../tailwind/tailwind-cdn.js"></script>
   </head>
   <body class="bg-gray-100 h-screen">
      <div class="p-20">
         <div class="float-left">
            <a
               class="text-lg text-gray-700 hover:bg-gray-200 hover:px-5 hover:rounded hover:p-2 hover:no-underline hover:text-black hover:decoration-none"
               href="./applicants.php"
            >
               <i class="fa fa-chevron-left"></i> &nbsp; Back to Application
            </a>
         </div>

         <div class="float-right">
            <div class="text-3xl text-gray-700 font-semibold flex items-center">
               DECLINED APPLICATIONS
               <ul class="uk-breadcrumb">
                  <li><a href=""></a></li>
                  <li><span class="font-light">Masters in Nursing</span></li>
               </ul>
            </div>
         </div>

         <div class="mt-20">
            <?php include './components/tbl-declined.php'; ?>
         </div>
      </div>
   </body>
</html>
