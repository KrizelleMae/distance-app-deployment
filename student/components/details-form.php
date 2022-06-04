<div class="container mx-auto">
   <div class="w-11/12 lg:w-2/4 mx-auto py-10">
      <div class="bg-gray-200 h-1 flex items-center justify-between">
         <div class="w-1/3 bg-green-600 h-1 flex items-center">
            <div
               class="bg-green-600 h-6 w-6 rounded-full shadow flex items-center justify-center"
            >
               <img
                  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/thin_with_steps-svg1.svg"
                  alt="check"
                  required
               />
            </div>
         </div>

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
                     Step 2: Personal Info
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

         <div class="w-1/6 flex justify-between">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>

         <div class="w-1/5 flex justify-end">
            <div class="bg-white h-6 w-6 rounded-full shadow"></div>
         </div>
      </div>
   </div>

   <div class="mx-auto mt-10 shadow-lg p-16 bg-white rounded w-3/4" id="box">
      <div
         class="uppercase mb-16 text-2xl font-semibold text-gray-700 text-center "
      >
         Personal Details
      </div>

      <?php

  $sql = mysqli_query($con, "Select * from user_details where user_id = $user_id limit 1;");

  while($row = mysqli_fetch_assoc($sql)){  
  
?>

      <form class="details" action="../server/insert-details.php" method="POST">
         <div
            class="grid xl:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1" id="field1"
         >
            <div class="mb-10 grid-col xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >First name</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="first_name"
                  value="<?php echo $row['first_name']; ?>"
                  disabled
               />
            </div>
            <div class="mb-10 grid-col">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Last Name</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="last_name"
                  value="<?php echo $row['last_name']; ?>"
                  disabled
               />
            </div>
         </div>

         <div class="grid xl:grid-cols-2">
            <div class="col-span-1 xl:mr-10 md:mr-0 mb-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Date of birth</label
               >
               <input
                  type="date"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="birthdate"
                  max="<?php echo date('Y-m-d'); ?>"
                  required
               />
            </div>

            <div class="cols-span-2">
               <div class="grid grid-cols-2" id="drop1">
                  <div class="col-span-1">
                     <div class="xl:mr-5 md:mr-6 lg:mr-6">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Gender</label
                        >
                        <select
                           class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           required
                           name="gender"
                           required
                        >
                           <option value="">Please select</option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
                        </select>
                     </div>
                  </div>

                  <div class="col-span-1">
                     <div class="col-span-1" id="civil">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Civil Status</label
                        >
                        <select
                           class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           required
                           name="civil"
                           required
                        >
                           <option value="">Please select</option>
                           <option value="Single">Single</option>
                           <option value="Married">Married</option>
                           <option value="Widowed">Widowed</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Contact -->

         <div class="grid xl:grid-cols-2">
            <div class="col-span-1 xl:mr-10 md:mr-0 mb-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Alternative Email (or main email)</label
               >
               <input
                  type="email"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="email"
                  placeholder="<?php echo $_SESSION['email'];?>"
                  value="<?php echo $_SESSION['email'];?>"
                  required
               />
            </div>

            <div class="cols-span-2">
               <div class="grid grid-cols-2" id="drop2">
                  <div class="col-span-1">
                     <div class="xl:mr-5 md:mr-6 lg:mr-6">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Mobile number</label
                        >
                        <input
                           type="tel"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           pattern="[7-9]{1}[0-9]{9}"
                           title="Enter your 10-digit mobile number"
                           placeholder=""
                           name="mobile"
                           required
                        />
                     </div>
                  </div>

                  <div class="col-span-1">
                     <div class="col-span-1" id="tel">
                        <label
                           class="block mb-2 text-sm font-medium text-gray-700"
                           >Telephone (Optional)</label
                        >
                        <input
                           type="text"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                           placeholder=""
                           name="tel"
                        />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Address -->

         <div class="font-semibold uppercase text-gray-700 text-sm mb-10">
            Address
         </div>

         <div
            class="grid xl:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 sm:grid-cols-1"
         >
            <div class="mb-7 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-600"
                  >House #
               </label>
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="house"
                  required
               />
            </div>
            <div class="mb-7 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-600"
                  >Street</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="street"
                  required
               />
            </div>

            <div class="mb-7">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >City</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  name="city"
                  required
               />
            </div>

            <div class="mb-10 cols-span-1 mr-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >State / Province</label
               >
               <input
                  type="text"
                  name="state"
                  class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  required
               />
            </div>
            <div class="mb-10 cols-span-1 mr-10">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Country</label
               >
               <input
                  type="text"
                  name="country"
                  list="country"
                  placeholder="Select country"
                  class="bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  required
               />
               <datalist name="country" id="country">
                  <?php include './components/country-list.php'; ;?>
               </datalist>
            </div>

            <div class="mb-10 cols-span-1">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Postal / ZIP Code</label
               >
               <input
                  type="tel"
                  name="zip"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  pattern="[0-9]{4}"
                  title="Enter 4-digit ZIP code"
                  required
               />
            </div>
         </div>

         <!-- School -->
         <div class="font-semibold uppercase text-gray-700 text-sm mb-10">
            School attended
         </div>

         <div
            class="grid xl:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 sm:grid-cols-1"
         >
            <div class="mb-10 cols-span-1 xl:mr-10 md:mr-6">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >College / University</label
               >
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Western Mindanao State University"
                  name="university"
                  required
               />
            </div>

            <div class="mb-10 cols-span-1">
               <label class="block mb-2 text-sm font-medium text-gray-700"
                  >Degree
               </label>
               <input
                  type="text"
                  class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
                  placeholder="Bachelor of Science "
                  name="degree"
                  required
               />
               <datalist name="country">
                  <?php include './components/country-list.php'; ?>
               </datalist>
            </div>
         </div>

         <div class="note">
            <div class="bg-red-100 p-4 rounded text-gray-600 text-xs" id="note2">
               NOTE: Kindly create a <b>Google Drive Folder</b> and
               attach/upload your documents for Proof of Identity and
               Credentials then paste the link below. Make sure to set the
               audience to 'Anyone with the Link'. <br /><br /><i>
                  Example link:
                  https://drive.google.com/drive/folders/1U7-iyRYpsu2DD?usp=sharing</i
               >
            </div>
         </div>
         <div class="mb-10 mt-5 cols-span-1">
            <label class="block mb-2 text-sm font-medium text-gray-700"
               >Google Drive Link
            </label>
            <input
               type="text"
               class="shadow-sm bg-gray-50 border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3"
               placeholder="Paste the link here"
               name="drive"
               pattern="^https(:\/\/)drive\.google\.com\/drive\/folders\/([a-zA-z0-9\-_?=]+)"
               title="Enter the valid Google drive link. Follow the example link given above."
               required
            />
         </div>

         <div class="mt-8 mb-10" id="proceed">
            <input
               type="submit"
               value="PROCEED TO APPLICATION"
               class="float-right bg-blue-600 px-10 py-3 text-white rounded-full hover:cursor-pointer hover:px-16 hover:bg-blue-800 mb-16"
               name="details"
               required
            />
         </div>
      </form>
   </div>

   <?php
  }

  ?>
</div>
