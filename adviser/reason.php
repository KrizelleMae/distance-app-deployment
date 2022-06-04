<?php 


include './auth.php';
include '../includes/db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $_SESSION['role']; ?> | Application</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="">
    <div class="mt-10">
      <div class="container mx-auto">
        <div class="flex justify-center">
          <div class="mt-16 shadow-lg p-14">
            <a
              class="text-lg text-gray-700 hover:decoration-none"
              href="./view-answers.php?id=<?php echo $_GET['id']; ?>"
            >
              <i class="fa fa-chevron-left"></i> &nbsp; Back to Application
            </a>

            <div class="text-md text-gray-400 mt-12 mb-3">
              Reason for not accepting the application:
            </div>

            <form
              id="btn-decline"
              action="../server/decline-ad.php?id=<?php echo $_GET['id'];?>&app_id=<?php echo $_GET['app_id'];?>"
              class="mb-10"
              method="POST"
            >
              <textarea
                name="reason"
                cols="80"
                rows="8"
                class="border border-gray-300 rounded bg-gray-100 p-3"
                required
              ></textarea>

              <br />
              <small class="text-red-600 float-right font-medium"
                >NOTE: This will notify the student via email.</small
              >

              <div class="mt-5 mb-10"></div>

              <a
                class="bg-blue-500 px-6 rounded py-2 text-white hover:text-white hover:bg-blue-600 hover:cursor-pointer mr-2"
                href="./view-answers.php?id=<?php echo $_GET['id']; ?>"
              >
                Cancel
              </a>

              <input
                type="submit"
                class="bg-red-500 px-6 rounded py-2 text-white hover:text-white hover:bg-red-600 hover:cursor-pointer float-end"
                value="Decline"
              />
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>

    <script>
      $("#btn-decline").on("click", function (e) {
        e.preventDefault();

        var form = document.getElementById("btn-decline");
        var action = form.getAttribute("action");

        Swal.fire({
          title: "Are you sure you decline?",
          text: "You won't be able to revert this!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, contiue!",
        }).then((result) => {
          if (result.isConfirmed) {
            document.location.href = action;
          }
        });
      });
    </script> -->
  </body>
</html>
