<?php 

$page = "applicants";
$stat = "pending";

include './auth.php';
include '../includes/db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adviser | Applicants</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
    
    
  </head>
  <body class="bg-gray-100 h-screen">
    <?php include './components/navbar.php'; ?>
    <div class="content mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          APPLICATIONS
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">Masters in Nursing</span></li>
          </ul>
        </div>
      </div>
      <div class="mt-10 px-5 py-4 text-sm bg-green-200 rounded-lg hover:text-gray-900 font-medium">
       NOTE: The following list are approved by the Distance Learning Education. <a href="./declined.php" class="underline text-red-500 ml-1">Click here</a> to view declined applications.
      </div>

      

      <div class="mt-2">
        <?php include './components/tbl-applicants.php'; ?>
      </div>
    </div>
  </body>
</html>
