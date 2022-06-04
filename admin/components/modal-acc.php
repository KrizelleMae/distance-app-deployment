<?php
include '../includes/db_connection.php';
$sql = "select * FROM user_details JOIN application ON user_details.user_id = application.user_id JOIN answers ON application.user_id = answers.user_id where application.user_id = $user_id; ";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {

?>
<ul uk-accordion="collapsible: false">
  <li class="mb-0 uk-open">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-gray-700 text-white hover:text-white"
      href="#"
    >
      <p> 1. Why do you want to apply for a master's program for Distance Learning at
      this university?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-7 px-8 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer1'];?>
        </p>
      </div>
    </div>
  </li>

  <!-- TWO -->
  <li class="mb-0 ">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-gray-700 text-white hover:text-white"
      href="#"
    >
      <p>2. Are you satisfied with the Technology and Software you are going to use
      for Remote Learning? and why?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-7 px-8 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer2'];?>
        </p>
      </div>
    </div>
  </li>

  <!-- THREE -->
  <li class="mb-0 ">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-gray-700 text-white hover:text-white"
      href="#"
    >
      <p>3. Is online education as effective as face-to-face instruction? and why?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-7 px-8 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer3'];?>
        </p>
      </div>
    </div>
  </li>

  <!-- FOUR -->
  <li class="mb-0 ">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-gray-700 text-white hover:text-white"
      href="#"
    >
      <p>4. How well could you manage your time while learning remotely?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-7 px-8 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer4'];?>
        </p>
      </div>
    </div>
  </li>

  <!-- FIVE -->
  <li class="mb-0 ">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-gray-700 text-white hover:text-white"
      href="#"
    >
      <p>5. How difficult or easy for you to connect to the internet to access your
      schoolwork?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-7 px-8 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer5'];?>
        </p>
      </div>
    </div>
  </li>
</ul>

      <?php 
      

      $get = mysqli_query($con, "select * from reasons where app_id = $row[id];");
      $reason = $get->fetch_row(); 
      
      if($row['status'] == "pending") {
         echo '
        <div class="mt-10 float-right">
          <a  href="../server/approve.php?id='.$row["user_id"].'" id="btn-approve" class="bg-green-500 px-6 rounded py-2 text-white hover:px-10 underline-none hover:text-white  hover:bg-green-600 mr-4"> <i class="fa fa-thumbs-up mr-2"></i> Approve</a>
          <a  href="./reason.php?id='.$row["user_id"].'&app_id='.$row["id"].'"  class="bg-red-500 px-6 rounded py-2 text-white hover:px-10 hover:text-white  hover:bg-red-600"> <i class="fa fa-ban mr-2"></i> Decline</a>
        </div>'; 
      }else if($row['status'] == "declined"){
        echo '
          <div class="p-5 bg-red-200 mt-10"> Reason: <br> <small class="italic">'.$reason[1].'</small> </div>
        
        ';
      } 
       
      ?>


<?php 
}
?>
