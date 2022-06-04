<?php

    include './auth.php';
    include '../includes/db_connection.php';
    $user_id = $_SESSION['id'];
    
    $sql = "select * from user_details where user_id = $user_id; ";
    $result = mysqli_query($con, $sql);

    while($row = mysqli_fetch_assoc($result)){

?>
<div class="container mx-auto" id="box">
   <div class="w-11/12 lg:w-2/4 mx-auto py-10">
      <div class="bg-gray-200 h-1 flex items-center justify-between">
         <div class="w-1/3 flex justify-start h-1 items-center relative">
            <div class="absolute left-0 -mr-2">
               <div class="inherit bg-white shadow-lg px-3 py-2 rounded mt-16">
                  <svg
                     class="absolute top-0 -mt-1 w-full right-0 left-0"
                     width="30px"
                     height="10px"
                     viewBox="0 0 16 8"
                     version="1.1"
                     xmlns="http://www.w3.org/2000/svg"
                  ></svg>
                  <p
                     tabindex="0"
                     class="focus:outline-none text-green-700 text-xs font-bold"
                  >
                     Step 1: Choose program
                  </p>
               </div>
            </div>
            <!-- THREE -->
            <div
               class="bg-white h-6 w-6 rounded-full shadow flex items-center justify-center -mr-3 relative"
            >
               <div class="h-3 w-3 bg-green-600 rounded-full"></div>
            </div>
         </div>

         <div class="w-1/3 flex justify-between">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>

         <div class="w-1/6 flex justify-between">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>

         <div class="w-1/5 flex justify-end">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>
      </div>
   </div>
</div>

<div class="flex items-center justify-center pt-10">
   <div
      class="bg-white text-center shadow shadow-gray-300 w-1/2.5 rounded-lg p-16"
   >
      <img src="../images/program.png" alt="" class="mx-auto logo" />
      <br />
      <div class="text-lg font-semibold text-gray-800 mb-2">
         Hi
         <?php echo $row['first_name']. " " . $row['last_name'];; ?>,
      </div>
      <div class="text-sm text-gray-600">
         Kindly choose the program you want to apply for <br />
      </div>

      <form action="../server/select-program.php" method="post" class="mt-10">
         <select
            name="program"
            id="ddl"
            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 w-80 focus:border-blue-500 p-2.5 mb-3"
            onchange="configureDropDownLists(this,document.getElementById('ddl2'))"
            required
         >
            <option value="">Select program</option>
            <option value="Nursing">Master of Nursing</option>
            <option value="Arts in Nursing">Master of Arts in Nursing</option>
            <option value="Education">Master of Arts in Education</option>
         </select>

         <br>
         <select
            class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 w-80 focus:border-blue-500 p-2.5"
            name="major"
            id="ddl2"
            required
         >
            <option value="">Please select</option>
            <!-- <optgroup label="Master of Arts in Nursing" class="font-normal">
               <option value="Nursing Management ">Nursing Management</option>
               <option value="Nursing Education ">Nursing Education</option>
            </optgroup>
            <optgroup label="Master of Arts in Nursing" class="font-normal">
               <option value="Mental Health and Psychiatric Nursing">
                  Mental Health and Psychiatric Nursing
               </option>
               <option value="Maternal and Child Health Nursing">
                  Maternal and Child Health Nursing
               </option>
               <option value="Medical-Surgical Nursing">
                  Medical-Surgical Nursing
               </option>
            </optgroup> -->
         </select>

         <script>
            function configureDropDownLists(ddl1, ddl2) {
               var arts_nursing = ['Nursing Management', 'Nursing Education'];
               var nursing = [
                  'Mental Health and Psychiatric Nursing',
                  'Maternal and Child Health Nursing ',
                  'Medical-Surgical Nursing ',
               ];
               var education = ['Major in Educational Administration'];
               switch (ddl1.value) {
                  case 'Arts in Nursing':
                     ddl2.options.length = 0;
                     for (i = 0; i < arts_nursing.length; i++) {
                        createOption(ddl2, arts_nursing[i], arts_nursing[i]);
                     }
                     break;
                  case 'Education':
                     ddl2.options.length = 0;
                     for (i = 0; i < education.length; i++) {
                        createOption(ddl2, education[i], education[i]);
                     }
                     break;
                  case 'Nursing':
                     ddl2.options.length = 0;
                     for (i = 0; i < nursing.length; i++) {
                        createOption(ddl2, nursing[i], nursing[i]);
                     }
                     break;

                  default:
                     ddl2.options.length = 0;
                     break;
               }
            }

            function createOption(ddl, text, value) {
               var opt = document.createElement('option');
               opt.value = value;
               opt.text = text;
               ddl.options.add(opt);
            }
         </script>

         <br>

         <input
            type="submit"
            value="SUBMIT"
            class="bg-green-600 text-white px-10 py-2 mt-10 mb-5 rounded-full hover:bg-green-700 hover:px-16 hover:cursor-pointer"
         />
      </form>

      <div class="text-xs text-gray-600">
         For more information, visit our
         <a
            href="http://wmsu-distance-learning.online/academics.php"
            class="text-sky-800 font-bold"
            >page</a
         >.

         <br />
         <a
            onclick='confirm("Are you sure you want to log out?");'
            href="../server/logout.php"
            class="font-bold pt-3 hover:text-red-400"
            >Logout <i class="fa fa-sign-out ml-1"></i
         ></a>
      </div>
   </div>
</div>

<?php 
 }
?>
