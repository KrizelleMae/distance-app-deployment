<?php 

$stat = "users";
$page = "settings";
include './auth.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Application</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/settings.css" />
    <link rel="stylesheet" href="../includes/links.php" />

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
            <div class="text-lg mb-4">
              ADD NEW ACCOUNT <i class="ml-2 fa fa-user-plus"></i>
            </div>
            <hr />

            <form
              action="../server/add-account.php"
              method="POST"
              class="mt-16"
              id="add-user"
            >
              <div class="flex justify-between">
                <div class="mb-7 mr-12">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Email</label
                  >
                  <input
                    type="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="email"
                    placeholder="johndoe@gmail.com"
                    required
                  />
                </div>

                <div class="mb-7 mr-12">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Password</label
                  >
                  <input
                    type="text"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    name="password"
                    required
                  />
                </div>

                <div class="">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >User type</label
                  >
                  <select
                    class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-2 px-3 mr-20"
                    required
                    name="role"
                  >
                    <option value="">Please select</option>
                    <option value="Nursing">Nursing Adviser</option>
                    <option value="Education">Education Adviser</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
              </div>

              <button
                type="button"
                uk-toggle="target: #modal-example"
                class="bg-green-600 text-white px-8 py-2 mt-5 rounded-lg hover:bg-green-700 hover:px-16 hover:cursor-pointer float-right"
              >
                CREATE ACCOUNT
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
                      form="add-user"
                      type="password"
                      class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded w-full py-2 px-3 mr-7"
                      name="admin_password"
                      placeholder="Input password"
                      required
                    />

                    <button
                      form="add-user"
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
        </div>
      </div>
    </div>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    <script>

      <?php
        if($_GET['return'] == 'warning'){
          $text = "Email existing. Try again!";
        }else if($_GET['return'] == 'success'){
          $text = "Account has been created";
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
               window.location = './users.php';
            });
         }
    </script>
  </body>
</html>
