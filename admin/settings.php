<?php 

$stat = "settings";
$page = "settings";
include './auth.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Settings</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/settings.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-screen">
    <?php if(isset($_GET['return'])) : ?>
    <div
      class="flash-data"
      data-flashdata="<?php echo $_GET['return']; ?>"
    ></div>
    <?php endif; ?>
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
          <div class="uk-width-expand p-10 bg-white ml-5">
            <!-- CONTENT HERE -->
            <div class="text-lg mb-4">
              CHANGE PASSWORD <i class="ml-2 fa fa-lock"></i>
            </div>
            <hr />

            <div class="mt-16">
              <form
                action="../server/change-pass.php"
                class="flex items-center justify-between"
                method="POST"
                id="change-pass"
              >
                <div class="mb-7">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >New password</label
                  >
                  <input
                    type="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="new-pass"
                    required
                  />
                </div>
                <div class="mb-7">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Confirm password</label
                  >
                  <input
                    type="password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="confirm-pass"
                    required
                  />
                </div>
                

                <button
                  type="button"
                  uk-toggle="target: #modal-example"
                  class="bg-green-600 text-white px-10 py-2 rounded-lg hover:bg-green-700 hover:cursor-pointer"
                >
                  Change
                </button>

                <!-- This is the modal -->
                <div id="modal-example" uk-modal>
                  <div class="uk-modal-dialog uk-modal-body">
                    <h5 class="uk-modal-title float-left">Authorize account</h5>

                    <div class="float-right mt-2">
                      <button class="uk-modal-close text-lg" type="button">
                        <i class="fa fa-close"></i>
                      </button>
                    </div>

                    <hr class="mt-14" />

                    <div class="bg-sky-100 rounded-lg mt-6">
                      <div class="py-3 px-3 italic text-xs mb-5">
                        Kindly input admin password to proceed.
                      </div>
                    </div>

                    <div class="flex items-center mt-5">
                      <input
                        form="change-pass"
                        type="password"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded w-full py-2 px-3 mr-7"
                        name="current-pass"
                        placeholder="Input password"
                        required
                      />

                      <button
                        form="change-pass"
                        type="submit"
                        class="bg-green-600 text-white px-16 py-2 rounded hover:bg-green-700 hover:cursor-pointer"
                      >
                        Authorize
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>

            <div class="float-right italic mt-16 px-5 py-2 bg-sky-100">
              <?php
              date_default_timezone_set('Asia/Manila');
                echo "The time is: " . date("h:i a");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    <script>

      <?php
        if($_GET['return'] == 'warning'){
          $text = "Password not matched. Try again!";
        }else if($_GET['return'] == 'success'){
          $text = "Password has been changed!";
        } else {
          $text = "Password incorrect. Please try again!";
        }
      ?>
        const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               '<?php echo $_GET['return']; ?>',
               '<?php echo $text; ?>',
               '<?php echo $_GET['return']; ?>'
            ).then(function () {
               window.location = './settings.php';
            });
         }
    </script>
  </body>
</html>
