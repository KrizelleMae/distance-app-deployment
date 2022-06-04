<?php

include './auth.php';
include '../includes/db_connection.php';
$user_id = $_GET['id'];

$sql = "select * FROM user_details JOIN application ON user_details.user_id = application.user_id JOIN answers ON application.user_id = answers.user_id where application.user_id = $user_id; ";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body>
    <div class="container mx-auto my-16">
      <div class="pb-16">
        <div class="float-left">
          <a
            class="text-lg text-gray-700 hover:bg-red-200 hover:px-5 hover:rounded hover:p-2 hover:no-underline hover:text-red-400 hover:decoration-none"
            href="./application.php"
          >
            <i class="fa fa-chevron-left"></i> &nbsp; Back to Application
          </a>
        </div>

        <div class="float-right">
          <div class="text-md text-gray-400 uppercase">
            Application review (ADMIN)
          </div>
        </div>
      </div>
      <div class="float-right -mt-2">
        STATUS:
        <span
          class="ml-3 px-2 py-1 bg-yellow-600 rounded-lg text-xs text-white"
        >
          <?php echo $row['status']; ?>
        </span>
      </div>

      <!-- CONTENT HERE -->
      <div class="flex mt-10">
        <div class="flex-auto w-6/12 bg-gray-100 mr-10 rounded">
          <div class="shadow-lg">
            <!-- INFO HERE -->
            <div
              class="text-lg font-bold text-white uppercase bg-gray-700 pl-10 py-3"
            >
              Student Details
            </div>

            <div class="p-10">
              <div class="row mb-6">
                <div class="">
                  <span class="uppercase text-xs text-gray-400"
                    ><i class="fa fa-user"></i> Student name:</span
                  >
                  <br />
                  <span class="text-md font-medium text-gray-800"
                    ><?php echo $row['first_name'] . ' ' . $row['last_name'] ; ?></span
                  >
                </div>
              </div>

              <div class="mb-6">
                <span class="uppercase text-xs text-gray-400"
                  ><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  DEGREE:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  >Masters in
                  <?php echo $row['program'] ; ?></span
                >
              </div>

               <div class="mb-6">
                <span class="uppercase text-xs text-gray-400"
                  ><i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  COURSE:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  >Masters in
                  <?php echo $row['major'] ; ?></span
                >
              </div>

              <div class="row">
                <div class="float-left text-gray-700 mr-16">
                  <span class="uppercase text-xs text-gray-400 mb-6"
                    ><i class="fa fa-phone"></i> Contact No:</span
                  >
                  <br />
                  <span class="text-md font-medium text-gray-800"
                    ><?php echo $row['mobile'] ; ?></span
                  >
                </div>

                <div class="mb-6">
                  <span class="uppercase text-xs text-gray-400"
                    ><i
                      class="fa <?php if($row['gender'] == 'Female'){echo 'fa-female';} else{echo 'fa-male';} ?>"
                    ></i>
                    Gender:</span
                  >
                  <br />
                  <span class="text-md font-medium text-gray-800"
                    ><?php echo $row['gender'] ; ?></span
                  >
                </div>

                 <div class="mb-6">
                    <span class="uppercase text-xs text-gray-400"
                      ><i class="fa fa-calendar"></i> Birthdate:</span
                    >
                    <br />
                    <span class="text-md font-medium text-gray-800"
                      ><?php echo date_format(date_create($row['birthdate']),"F j, Y");?></span
                    >
                </div>
              </div>

             

              <div class="mb-6">
                <span class="uppercase text-xs text-gray-400"
                  ><i class="fa fa-envelope"></i> Email:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  ><?php echo $row['email'] ; ?></span
                >
              </div>

              <div class="mb-6">
                <span class="uppercase text-xs text-gray-400"
                  ><i class="fa fa-map-marker"></i> Address:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  ><?php echo $row['house'] . ", ". $row['street'] .",". $row['city'] .", ". $row['state'].", ". $row['country'] ." ". $row['zip'];?></span
                >
              </div>

              <div class="mb-6">
                <span class="uppercase text-xs text-gray-400"
                  ><i class="fa fa-building"></i> School Attended:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  ><?php echo $row['university'] ; ?></span
                >
              </div>

              <div class="mb-6">
                <span class="uppercase text-xs text-gray-400">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                  Degree:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  ><?php echo $row['degree'] ; ?></span
                >
              </div>

              <div class="">
                <span class="uppercase text-xs text-gray-400">
                  <i class="fa fa-globe" aria-hidden="true"></i>
                  Google Drive Link:</span
                >
                <br />
                <span class="text-md font-medium text-gray-800"
                  ><a class="text-blue-700" href="<?php echo $row['drive']; ?>">  <?php echo $row['drive'] ; ?></a></span
                >
              </div>
            </div>
          </div>
        </div>
        <div class="flex-auto w-full">
          <?php include './components/modal-acc.php';?>
        </div>
      </div>
      <!-- END HERE -->
    </div>

    <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
    <script src="../sweetalert2/sweetalert2.all.min.js"></script>

    <?php if(isset($_GET['message'])) : ?>
    <div
      class="flash-data"
      data-flashdata="<?php echo $_GET['message']; ?>"
    ></div>
    <?php endif; ?>

    <script>
      $("#btn-approve").on("click", function (e) {
        e.preventDefault();

        const href = $(this).attr("href");

        Swal.fire({
          title: "Are you sure you?",
          text: "NOTE: This student will be forwarded to the college secretary for reviewing.",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#3085d6",
          cancelButtonColor: "#d33",
          confirmButtonText: "Yes, contiue!",
        }).then((result) => {
          if (result.isConfirmed) {
            document.location.href = href;
          }
        });
      });

      const flashdata = $(".flash-data").data("flashdata");

      if (flashdata) {
        Swal.fire(
          "Record updated!",
          "Record has been updated.",
          "success"
        ).then(function () {
          window.location = "./view-answers.php?id=<?php echo $user_id;?>";
        });
      }
    </script>
  </body>
</html>

<?php
}
?>
