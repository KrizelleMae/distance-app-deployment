<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <link rel="stylesheet" href="./css/all-styles.css" />
      <link rel="stylesheet" href="./includes/links.php" />
      <link rel="icon" type="image/png" href="./favicon.ico" />
      <link rel="stylesheet" href="./css/all-styles.css" />

      <script src="./tailwind/tailwind-cdn.js"></script>
      <?php include './includes/links.php'; ?>

      <title>Registration</title>
   </head>
   <body class="m-0 p-0 flex justify-center mt-3">
      <div class="">
         <!-- <div class="img-side">
      <!--  <img src="./images/admin.jpg" class="side-image h-full" alt="" />-->
         <!--</div> -->

         <!-- RIGTH SIDE -->
         <div
            class="lg:flex justify-center items-center rounded shadow-lg p-16 bg-gray-100 pl-20 my-16"
         >
            <div class="">
               <p
                  class="font-semibold text-blue text-2xl mb-14 text-center uppercase"
               >
                  Account Registration
               </p>
               <div class="lg:flex justify-center md:col-span-1 md:grid">
                  <form action="./server/sign-up.php" method="POST">
                     <div
                        class="grid xl:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1"
                     >
                        <div
                           class="grid col-span-1 xl:pr-6 lg:pr-6 sm:pr-0 md:pr-0"
                        >
                           <div class="mb-6">
                              <label
                                 for="first_name"
                                 class="block mb-2 font-semibold text-gray-600 text-sm"
                                 >First name</label
                              >
                              <input
                                 type="text"
                                 name="first_name"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2 mr-10"
                                 placeholder=""
                                 required
                              />
                           </div>
                        </div>

                        <div
                           class="grid col-span-1 xl:pr-6 lg:pr-6 sm:pr-0 md:pr-0"
                        >
                           <div class="mb-6">
                              <label
                                 for="last_name"
                                 class="block mb-2 font-semibold text-gray-600 text-sm"
                                 >Last name</label
                              >
                              <input
                                 type="text"
                                 name="last_name"
                                 class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2"
                                 placeholder=""
                                 required
                              />
                           </div>
                        </div>
                     </div>

                     <div class="mb-6 xl:pr-6 lg:pr-6 sm:pr-0 md:pr-0">
                        <label
                           for="email"
                           class="block mb-2 font-semibold text-gray-600 text-sm"
                           >Email</label
                        >
                        <input
                           type="email"
                           name="email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2"
                           placeholder="sample@gmail.com"
                        />
                     </div>

                     <div class="mb-6 xl:pr-6 lg:pr-6 sm:pr-0 md:pr-0">
                        <label
                           for="last_name"
                           class="block mb-2 font-semibold text-gray-600 text-sm"
                           >Password</label
                        >

                        <input
                           type="password"
                           name="password"
                           class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2"
                           placeholder=""
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                           required
                        />
                     </div>

                     <div class="mb-6 xl:pr-6 lg:pr-6 sm:pr-0 md:pr-0">
                        <label
                           for=""
                           class="block mb-2 font-semibold text-gray-600 text-sm"
                           >Confirm password</label
                        >
                        <input
                           type="password"
                           name="confirm-pass"
                           class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full p-2"
                           placeholder=""
                           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters"
                           required
                        />
                     </div>

                     <div class="mb-6">
                        <div class="flex items-start mb-6">
                           <div class="flex items-center h-5">
                              <input
                                 id="terms"
                                 aria-describedby="terms"
                                 type="checkbox"
                                 class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                 required
                              />
                           </div>
                           <div class="ml-3 text-sm">
                              <label
                                 for="terms"
                                 class="font-medium text-gray-900 dark:text-gray-400"
                                 >I agree with the
                                 <a
                                    href="#terms-modal"
                                    uk-toggle
                                    class="text-blue-600 hover:underline dark:text-blue-500"
                                    >terms and conditions</a
                                 ></label
                              >
                           </div>
                        </div>
                     </div>

                     <div class="flex items-center justify-center mt-8">
                        <button
                           type="submit"
                           class="px-16 py-3 bg-red-700 text-white mr-10 rounded-full hover:bg-red-900"
                        >
                           Register
                        </button>

                        <a href="./" class="text-blue"> Login </a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- This is the modal -->
      <div id="terms-modal" uk-modal>
         <div class="uk-modal-dialog uk-modal-body">
            <h2 class="uk-modal-title float-left">Terms and Conditions</h2>
            <button
               class="uk-modal-close text-gray-800 float-right mt-3"
               type="button"
            >
               <i class="fa fa-close"></i>
            </button>

            <p class="mt-16 pt-8">
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
               eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
               enim ad minim veniam, quis nostrud exercitation ullamco laboris
               nisi ut aliquip ex ea commodo consequat. <br />
               <br />Duis aute irure dolor in reprehenderit in voluptate velit
               esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
               occaecat cupidatat non proident, sunt in culpa qui officia
               deserunt mollit anim id est laborum. <br />
               <br />Lorem ipsum dolor sit amet, consectetur adipiscing elit,
               sed do eiusmod tempor incididunt ut labore et dolore magna
               aliqua. Ut enim ad minim veniam, quis nostrud exercitation
               ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
         </div>
      </div>
      <!-- <script src="./js/signup.js"></script> -->

      <script src="./sweetalert2/jquery-3.6.0.min.js"></script>
      <script src="./sweetalert2/sweetalert2.all.min.js"></script>

      <?php if(isset($_GET['message'])) : ?>
      <div
         class="flash-data"
         data-flashdata="<?php echo $_GET['message']; ?>"
      ></div>
      <?php endif; ?>

     

        <script>
        
        <?php
        if($_GET['message'] == 'warning'){
          $text = "Email existing. Kindly use a new email!";
        } else {
          $text = "Password not matched. Please try again!";
        }
      ?>
        const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               '<?php echo $_GET['message']; ?>',
               '<?php echo $text; ?>',
               '<?php echo $_GET['message']; ?>'
            ).then(function () {
               window.location = './signup.php';
            });
         }
    </script>
   </body>
</html>
