<?php

    
$page = "profile";

session_start();
include './auth.php';
include '../includes/db_connection.php';


$user_id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, i" />
    <title>User</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script src="./script/sidebar.js"></script>

    <?php include '../includes/links.php'; ?>
    <script src="./script/sidebar.js"></script>
    <script src="../tailwind/tailwind-cdn.js"></script>

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/responsive.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <?php include './components/sidebar.php'; ?>

    <!-- Box -->

    <div class="bg-white block p-10 md:mt-16 xl:mt-0" id="body">
      <div class="max-w-3xl mx-auto shadow-lg bg-gray-50 mb-10">
        <!--Profile Picture-->
        <div class="w-full">
          <div class="bg-crimson h-28 rounded-t-lg">
            <h3 class="text-xl font-bold text-right text-white mr-9 pt-10">
              Profile
            </h3>
          </div>
          <div class="-mt-24 ml-5">
            <img
              src="../images/profile.png"
              alt=""
              class="bg-white border md:h-40 w-40 xl:h-40 w-40 rounded-lg shadow-lg border-b"
            />
          </div>
        </div>

        <!--User Details-->

        <?php 
        
        $sql = "select * from user_details where user_id = $user_id";
        
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result)) {
       
        
        ?>
        <button
          class="w-auto mr-8 mt-6 px-2 py-1 rounded hover:bg-gray-200 border border-gray-500 bg-gray-100 float-right"
          type="button"
          uk-toggle="target: #edit-profile<?php echo $row['user_id'];?>"
        >
          <i class="fa fa-pencil text-gray-500 text-md"></i>
        </button>

        <div class="rounded-b-lg p-7 pt-4 flex flex-col">
          <div class="text-sm mt-2 text-gray-800 pt-2">
            <div
              class="flex flex-row ml-auto my-3 space-x-3 items-center text-md"
            >
              <span class="font-bold">Name:</span>
              <!-- <div class="w-20"></div> -->
              <span class="font-normal"
                ><?php echo $row['first_name'] ." ".  $row['last_name'];?></span
              >
            </div>
            <div
              class="flex flex-row ml-auto mb-3 space-x-3 items-center text-md mt-2"
            >
              <span class="font-bold">Gender:</span>
              <!-- <div class="w-14"></div> -->
              <span class=""><?php echo $row['gender'];?></span>
            </div>
            <div
              class="flex flex-row ml-auto mb-3 space-x-3 items-center text-md mt-2"
            >
              <span class="font-bold">Contact No:</span>
              <!-- <div class="w-8"></div> -->
              <span class=""><?php echo $row['mobile'];?></span>
            </div>
            <div
              class="flex flex-row ml-auto mb-3 space-x-3 items-center text-md mt-2"
            >
              <span class="font-bold">Email:</span>
              <!-- <div class="w-20"></div> -->
              <span class=""><?php echo $row['email'];?></span>
            </div>
            <div
              class="xl:flex flex-row ml-auto mb-3 space-x-3 items-center text-md mt-2"
            >
              <span class="font-bold">Address:</span>
              <!-- <div class="w-14"></div> -->
              <span class=""
                ><?php echo $row['house'] . ", ". $row['street'] .",". $row['city'] .", ". $row['state'].", ". $row['country'] ." ". $row['zip'];?></span
              >
            </div>

            <div
              class="flex flex-row ml-auto mb-3 space-x-3 items-center text-md mt-2"
            >
              <span class="font-bold">Birthdate:</span>
              <!-- <div class="w-14"></div> -->
              <span class=""><?php echo date_format(date_create($row['birthdate']),"F j, Y");?></span>
            </div>

            <!-- <div class="bg-gray-200 h-1 w-m-2xl mt-7 rounded-full"></div> -->
          </div>



          <div class="mt-5"></div>
          <hr>
          <div class="text-sm mt-10 text-gray-800">
            <div class="mb-3 space-x-1 items-center text-md">
              <span class="font-bold">College/ University Attended:</span>
              <br />
              <span class="font-normal"><?php echo $row['university'];?></span>
            </div>
            <div class="mb-3 space-x-1 items-center text-md mt-4">
              <span class="font-bold">Degree finished:</span>
              <br />
              <span class="font-normal"><?php echo $row['degree'];?></span>
            </div>

            <div class="mb-3 space-x-1 items-center text-md mt-4">
              <span class="font-bold">Google Drive Link:</span>
              <br />
              <span class="font-normal"><a href="<?php echo $row['drive'];?>"><?php echo $row['drive'];?></a></span>
            </div>
          </div>
        </div>

        <!-- MODAL -->
        <!-- This is the modal -->
        <div id="edit-profile<?php echo $row['user_id'];?>" uk-modal>
          <div class="uk-modal-dialog uk-modal-body">
            <form action="../server/edit-profile.php" method="POST">
              <button
                class="uk-modal-close-default"
                type="button"
                uk-close
              ></button>
              <h2 class="uk-modal-title">Edit profile</h2>
              <div class="mt-10">
                <div class="col-span-1 mb-5">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Full name</label
                  >
                  <input type="text" class="shadow-sm bg-gray-50 border
                  border-gray-300 text-gray-700 text-sm rounded-lg
                  focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  disabled value="<?php echo $row['first_name']. " " .$row['last_name'] ;?>"
                  />
                </div>
                <div class="col-span-1 mb-5">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Email</label
                  >
                  <input
                    type="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                    name="new_email"
                    value="<?php echo $row['email'];?>"
                    required
                  />
                </div>

                <div class="col-span-1 mb-10">
                  <label class="block mb-2 text-sm font-medium text-gray-700"
                    >Contact number</label
                  >
                  <input type="tel" class="shadow-sm bg-gray-50 border
                  border-gray-300 text-gray-700 text-sm rounded-lg
                  focus:ring-blue-500 focus:border-blue-500 block w-full p-3" title="Please input 10 characters. First number should start with either 7, 8, or 9."
                 pattern='[7-9]{1}[0-9]{9}' name="new_mobile" value="<?php echo $row['mobile'];?>"
                  required />
                </div>

                <input
                  type="hidden"
                  name="id"
                  value="<?php echo $row['user_id'];?>"
                />
              </div>
              <p class="uk-text-right">
                <button
                  class="uk-button uk-button-default uk-modal-close"
                  type="button"
                >
                  Cancel
                </button>
                <button
                  class="uk-button px-10 border bg-green-500 text-white hover:bg-green-700"
                  type="submit"
                >
                  Save
                </button>
              </p>
            </form>
          </div>
        </div>
        <?php 
        }
        ?>
      </div>
    </div>

    <?php if(isset($_GET['return'])) : ?>
    <div
      class="flash-data"
      data-flashdata="<?php echo $_GET['return']; ?>"
    ></div>
    <?php endif; ?>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>
    <script>

      <?php
        if($_GET['return'] == 'success'){
          $text = "Profile has been updated!";
        }else {
          $text = "Update failed. Please try again!";
        }
      ?>
        const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               'Success',
               '<?php echo $text; ?>',
               '<?php echo $_GET['return']; ?>'
            ).then(function () {
               window.location = './profile.php';
            });
         }
    </script>
  </body>
</html>
