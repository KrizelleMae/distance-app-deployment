<?php include './components/sidebar.php'; ?>

<div class="main">
  <div class="md:mt-2 xl:mt-16 flex justify-center">
    <div
      class="shadow bg-white text-center shadow shadow-gray-300 md:w-full xl:w-1/2 w-1/2 rounded-lg p-10 sm:w-9/12" id="container"
    >
      <img src="../images/declined.png" alt="" class="h-64 mx-auto" />
      <br />
      <div class="text-2xl font-semibold text-gray-800 mb-2">
        Sorry, <?php echo  $_SESSION['first_name'] ?>!
      </div>
      <div class="text-md text-red-600"">
        Your application has been <b>declined</b> due to some reasons.<br />
      </div>

      <div class="mt-10 text-xs p-5 bg-green-100 mx-20 text-gray-600">

        <div class="text-xs mt-5 text-gray-900">
        For more information, visit our
        <a href="http://wmsu-distance-learning.online/admission.php" class="text-blue-800 font-bold">page</a>.
      </div>
      </div>
    </div>
  </div>
</div>
