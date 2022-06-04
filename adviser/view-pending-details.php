<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adviser | Application</title>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body class="bg-gray-200">
     <div class="pb-2 pt-4 pl-4">
        <div class="float-left">
           <a
            class="text-lg text-gray-700 hover:bg-gray-200 hover:px-5 hover:rounded hover:bg-red-200 hover:px-5  hover:py-2 hover:no-underline hover:text-black hover:decoration-none"
            href="./applicants.php"
          >
            <i class="fa fa-chevron-left"></i> &nbsp; Back to Application
          </a>
        </div>
     </div>
     <div class="container mx-auto w-3/5 justify-center">
          <div class="mt-6">
               <?php include './components/stud-details-pending.php'; ?>
          </div>
     </div>
  </body>
</html>