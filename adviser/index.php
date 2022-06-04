<?php 

$page = "dashboard"; 

require '../includes/db_connection.php';
include './auth.php';
$program = $_SESSION['role'];

//Count Male//
$get_gender_male = mysqli_query($con, "select COUNT(*) FROM user_details where gender = 'Male' AND program = '$program';");
$no_of_male = $get_gender_male->fetch_row(); 
//Count Female// 
$get_gender_female = mysqli_query($con, "select COUNT(*) FROM user_details where gender = 'Female'
AND program = '$program';"); 

$no_of_female = $get_gender_female->fetch_row();
//Count Declined
$get_declined = mysqli_query($con, "select COUNT(*) FROM application where status = 'declined' AND program = '$program';");
$no_of_declined = $get_declined->fetch_row(); 
//Count Approved// 

$get_approved =
mysqli_query($con, "select COUNT(*) FROM application where status = 'approved'
AND program = '$program';"); 

$no_of_approved = $get_approved->fetch_row();


$get_admission =
mysqli_query($con, "select COUNT(*) FROM application where status = 'admission'
AND program = '$program';"); 

$no_of_admission = $get_admission->fetch_row();

$sql="SELECT * FROM application where program = '$program' AND status != 'pending';"; 
if($result=mysqli_query($con,$sql)){ 
   $rowcount=mysqli_num_rows($result); 
   } 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php echo $_SESSION['role']; ?> | Dashboard</title>
    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />

    <!-- Charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-full">
    <div class="sticky"><?php include './components/navbar.php'; ?></div>

    <div class="content mt-10">
      <div class="flex items-center">
        <div class="text-2xl text-gray-800 font-semibold">
          ADVISER DASHBOARD <small>(<?php echo $_SESSION['role']; ?>)</small>
        </div>

        <div class="ml-auto">
          <a href="./applicants.php">
            <button
              class="bg-gray-800 px-5 py-2 text-md text-white rounded hover:bg-sky-800"
            >
              View applicants &nbsp;
              <i class="fa fa-chevron-right"></i></button
          ></a>
        </div>
      </div>

      <div class="mt-8">
        <div class="uk-child-width-expand@l" uk-grid>
          <!-- One -->
          <div>
            <div class="uk-card shadow-sm bg-white uk-card-body rounded">
              <div class="text-md float-left pb-0 mt-1">
                Applicants
                <div class="text-5xl font-medium text-black pt-2">
                  <?php echo ($rowcount); ?>
                </div>
              </div>

              <div class="float-right bg-pink-600 text-white p-5 rounded">
                <i class="fa fa-clock-o text-4xl"></i>
              </div>
            </div>
          </div>
          <!-- Two -->
          <div>
            <div class="uk-card shadow-sm bg-white uk-card-body rounded">
              <div class="text-md float-left pb-0 mt-1">
                Declined
                <div class="text-5xl font-medium text-black pt-2"><?php echo $no_of_declined[0]; ?></div>
              </div>

              <div class="float-right bg-sky-500 text-white p-5 rounded">
                <i class="fa fa-users text-4xl"></i>
              </div>
            </div>
          </div>
          <!-- Three -->
          <div>
            <div class="uk-card shadow-sm bg-white uk-card-body rounded">
              <div class="text-md float-left pb-0 mt-1">
                Approved
                <div class="text-5xl font-medium text-black pt-2">
                  <?php echo $no_of_approved[0]; ?>
                </div>
              </div>

              <div class="float-right bg-orange-400 text-white p-5 rounded">
                <i class="fa fa-check text-4xl"></i>
              </div>
            </div>
          </div>

          <!-- Four -->
          <div>
            <div class="uk-card shadow-sm bg-white uk-card-body rounded">
              <div class="text-md float-left pb-0 mt-1">
              Admission
                <div class="text-5xl font-medium text-black pt-2">
                  <?php echo $no_of_admission[0]; ?>
                </div>
              </div>

              <div class="float-right bg-green-600 text-white p-5 rounded">
                <i class="fa fa-graduation-cap text-4xl"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- GRAPHS -->
      <div>
        <div class="mt-6 flex pb-10">
          <div class="uk-card rounded uk-card-default uk-width-1-2@m">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                  <p class="uk-card-title uk-margin-remove-bottom">
                    Application
                  </p>
                </div>
              </div>
            </div>
            <div class="uk-card-body rounded">
              <canvas id="barStudent" style="width: 100%; height: 400px;"></canvas>
            </div>
            <div class="uk-card-footer">
              <a href="#" class="uk-button uk-button-text">View Students ></a>
            </div>
          </div>

          <!-- right -->
          <div class="uk-card rounded uk-card-default uk-width-1-2@m ml-10">
            <div class="uk-card-header">
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                  <p class="uk-card-title uk-margin-remove-bottom">
                    Male and Female Students
                  </p>
                </div>
              </div>
            </div>
            <div class="uk-card-body rounded flex justify-center">
              <canvas
                id="pieStatus"
                style="width: 100%; height: 400px;"
              ></canvas>
            </div>
            <div class="uk-card-footer">
              <a href="#" class="uk-button uk-button-text">View Students ></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Chart -->
    <script>
      //Bar Graph//
      const ctx_2 = document.getElementById('barStudent').getContext('2d');
      const myChart_2 = new Chart(ctx_2, {
          type: 'bar',
          data: {
              labels: ['Application'],
              datasets: [{
                  label: 'Approved',
                  data: <?php echo json_encode($no_of_approved)?>,
                  backgroundColor: ['darkorange'],
              },{
                  label: 'Declined',
                  data: <?php echo json_encode($no_of_declined)?>,
                  backgroundColor: ['#FF0000'],
              },{
                  label: 'Admission',
                  data: <?php echo json_encode($no_of_admission                                                                                                                                                     )?>,
                  backgroundColor: ['#32CD32'],
              }
            ],
          },
          options: {
              scales: {
                  y: {
                      beginAtZero: true
                  }
              }
          }
      });

       // PIE STATUS

            var xValues = ["Female", "Male"];
            var yValues = [<?php echo $no_of_female[0];?>, <?php echo $no_of_male[0];?>];
            var barColors = ["pink", "skyblue"];
            new Chart("pieStatus", {
              type: "pie",
              data: {
                labels: xValues,
                datasets: [
                  {
                    backgroundColor: barColors,
                    data: yValues,
                  },
                ],
              },
              options: {
                legend: { display: true },
              },
            });
    </script>
  </body>
</html>
