
<?php 


$program = $_SESSION['role']; 
$sql = "select * from user_details INNER JOIN application ON user_details.user_id = application.user_id where status = 'declined' AND user_details.program = '$program'; ";
$result = mysqli_query($con, $sql);

?>
<div class="">
  <div class="flex flex-col">
    <div class="my-2 overflow-x-auto sm:-mx-8 m-0">
      <div
        class="py-2 align-middle inline-block min-w-full sm:px-6 py-5 lg:px-8"
      >
        <div
          class="shadow-md overflow-hidden border-b border-gray-200 sm:rounded"
        >
          <table class="table-auto min-w-full divide-y divide-gray-200">
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
            if (mysqli_num_rows($result) == 0) {
              echo '<tr class=""><td class="p-5 bg-white"> No data available.</td><td></td> <td><td></td></td><td></td><td></td></tr>';
            }
              else {
                while($row = mysqli_fetch_assoc($result)) {
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

                <td class="px-5 py-3 whitespace-nowrap">
                  <span
                    class="bg-red-300 text-red-800 text-xs font-bold mr-2 px-2.5 py-0.5 rounded"
                    ><?php echo $row['status']; ?></span
                  >
                </td>

                <td>
                  <a href="./view-declined-details.php?id=<?php echo $row['user_id']; ?>" uk-toggle>
                      <i
                        class="fa fa-info-circle p-3 rounded bg-blue-700 text-white mr-3"
                      ></i
                    ></a>

                <a href="./view-answers.php?id=<?php echo $row['user_id']; ?>" uk-toggle>
                    <i
                      class="fa fa-eye p-3 rounded bg-green-700 text-white mr-3"
                    ></i
                  ></a>
                  
                  
                </td>
              </tr>
              
              <?php 
              }
            }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
