<?php 

$stat = "app-status";
$page = "settings";
 
include './auth.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Enrollment</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/settings.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-screen">
    <?php include './components/navbar.php'; ?>
    <div class="content mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          SETTINGS
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">Manage account</span></li>
          </ul>
        </div>
      </div>

      <div class="my-10 grid">
        <div class="uk-child-width-expand@s" uk-grid>
          <div class="uk-width-1-4@m">
            <!-- SIDEBAR HERE -->
            <?php include './components/sidebar-settings.php';?>
          </div>
          <div class="uk-width-expand p-8 bg-white ml-5">
            <!-- CONTENT HERE -->
            <div class="p-6 py-5 bg-blue-100 rounded-lg hover:text-gray-700">
              <a class="hover:no-underline">
                <p class="mb-2 text-lg font-bold tracking-tight text-gray-700">
                  <i class="fa fa-exclamation-circle"></i> &nbsp; Application
                  Status
                </p>
              </a>
              <p class="text-gray-600 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labo.
              </p>
            </div>

            <!-- TOGGLE HERE -->
            <div class="mt-5">
              <label
                for="toggle-example-checked"
                class="flex relative items-center mb-4 cursor-pointer"
              >
                <input
                  type="checkbox"
                  id="toggle-example-checked"
                  class="sr-only"
                  checked
                />
                <div
                  class="w-11 h-6 bg-gray-200 rounded-full border border-gray-200 toggle-bg"
                ></div>
                <span class="ml-3 text-sm font-medium text-gray-900"
                  >Toggle me (checked)</span
                >
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
