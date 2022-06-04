<?php



include '../includes/db_connection.php';

$program = $_POST['program'];

        if($program == "All"){
            $sql = mysqli_query($con,"select * from user_details INNER JOIN application ON user_details.user_id = application.user_id where status = 'approved' OR status = 'admission'");
            
        } else {
            $sql = mysqli_query($con,"select * from user_details INNER JOIN application ON user_details.user_id = application.user_id  WHERE user_details.program = '$program' AND  status = 'admission';");
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Generate Report</title>
     
    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="icon" type="image/png" href="../favicon.ico" />
     <script src="../tailwind/tailwind-cdn.js"></script>

     <link
   rel="stylesheet"
   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
/>


</head>
<body class="container mx-auto mt-10">



          <div class="flex">
            <a
            
              href="./reports.php"
              class="mt-6 mb-10  px-8 py-2 rounded  hover:cursor-pointer"
            >
              <i class="mr-3 fa fa-chevron-left"></i>Back 
            </a>


           <form action="../server/pdf.php" method="POST" class="float-right">
              <input type="hidden" name="program" value="<?php echo $program; ?>">
               <input
                    type="submit"
                        class="ml-3 mt-6 mb-10 bg-green-600 text-white px-8 py-3 rounded hover:bg-sky-700 hover:cursor-pointer"
                    value="Save as PDF"
                  >
                 
         
           </form>
          </div>
          
          
          <?php if($program != 'All'){
            echo '
                <div class="mb-8 px-5 py-4 text-sm bg-green-100 rounded hover:text-gray-900 font-medium">
                    NOTE: The following list are applicants that are <b class="text-sky-700"> ready for admission </b>. You can download the list by pressing the button <b>Save as PDF</b>.
                </div>';
          }else {
              
              echo '
                <div class="mb-8 px-5 py-4 text-sm bg-green-100 rounded hover:text-gray-900 font-medium">
                    NOTE: The following list are applicants that were either <span class="text-green-500">approved </span> / <span class="text-blue-500">for admission </span>. You can download the list by pressing the button <b>Save as PDF</b>. 
                </div>';

          }
          
          ?>
           
          
           
     <table class="table-auto min-w-full  border divide-y divide-gray-200">
            <thead class="bg-blue py-0">
             
              <tr>
                <th
                  scope="col"
                  class="px-6 py-5 text-left text-sm font-medium text-white uppercase tracking-wider"
                >
                  Student name
                </th>

                <th
                  scope="col"
                  class="px-6 py-5 text-left text-sm font-medium text-white uppercase tracking-wider"
                >
                  Email
                </th>

                <th
                  scope="col"
                  class="px-6 py-5 text-left text-sm font-medium text-white uppercase tracking-wider"
                >
                  Contact
                </th>

                <th
                  scope="col"
                  class="px-6 py-5 text-left text-sm font-medium text-white uppercase tracking-wider"
                >
                  Program
                </th>

                <th
                  scope="col"
                  class="px-6 py-5 text-left text-sm font-medium text-white uppercase tracking-wider"
                >
                  Status
                </th>
                <th class="px-4"></th>
              </tr>

            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            <?php 
            if (mysqli_num_rows($sql) == 0) {
              echo "<tr><td class='p-5 bg-white'> No data available.</td></tr>";
            }
              else {
                while($row = mysqli_fetch_assoc($sql)) {
            ?>
              
              <tr>
                <td class="px-5 py-3 whitespace-nowrap">
                  <div class="text-sm text-gray-900">
                    <?php echo $row['first_name'] . ' ' . $row['last_name'] ; ?>
                  </div>

                  <!-- <div class="text-md text-white">
                                    Optimization
                                 </div> -->
                </td>

                <!-- <td class="px-5 py-3 whitespace-nowrap">
                                 <span
                                    class="px-2 inline-flex text-md leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                                 >
                                    Active
                                 </span>
                              </td> -->
                <td class="px-5 py-5 whitespace-nowrap text-md text-gray-900">
                  <div class="text-sm text-gray-900">  <?php echo $row['email']; ?></div>
                </td>

                <td class="px-5 py-5 whitespace-nowrap text-md text-gray-900">
                  <div class="text-sm text-gray-900"><?php echo $row['mobile']; ?></div>
                </td>

                <td class="px-5 py-3 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Masters in <?php echo $row['program']; ?></div>
                </td>

                <td class="px-5 py-3 ">
                  <span
                    class="text-white text-xs font-bold mr-2 px-2.5 py-0.5 rounded <?php 
                    if($row['status'] == 'pending'){
                      echo "bg-gray-400" ;
                    }else if($row['status'] == 'approved'){
                       echo "bg-green-400" ;
                    }else {
                       echo "bg-red-400" ;
                    }
                    ?>"><?php echo $row['status']; ?></span
                  >
                </td>

              </tr>
              
              <?php 
                }
              }
            
              ?>
            </tbody>
          </table>

         
</body>
</html>


