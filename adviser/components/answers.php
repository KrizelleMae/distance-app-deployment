<?php
include '../includes/db_connection.php';
$sql = "select * FROM user_details JOIN application ON user_details.user_id = application.user_id JOIN answers ON application.user_id = answers.user_id where application.user_id = $user_id; ";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {

?>
<ul uk-accordion="collapsible: false">
  <li class="mb-0 uk-open">
    <a
      class="uk-accordion-title w-full p-4 text-sm text-left bg-blue text-white hover:text-white"
      href="#"
    >
      <p> 1. Why do you want to apply for a master's program for Distance Learning at this university?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-9 px-10 m-0">
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
      class="uk-accordion-title w-full p-4 text-sm text-left bg-blue text-white hover:text-white"
      href="#"
    >
      <p>2. Are you satisfied with the Technology and Software you are going to use for Remote Learning? and why?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-9 px-10 m-0">
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
      class="uk-accordion-title w-full p-4 text-sm text-left bg-blue text-white hover:text-white"
      href="#"
    >
      <p>3. Is online education as effective as face-to-face instruction? and why?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-9 px-10 m-0">
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
      class="uk-accordion-title w-full p-4 text-sm text-left bg-blue text-white hover:text-white"
      href="#"
    >
      <p>4. How well could you manage your time while learning remotely?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-9 px-10 m-0">
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
      class="uk-accordion-title w-full p-4 text-sm text-left bg-blue text-white hover:text-white"
      href="#"
    >
      <p>5. How difficult or easy for you to connect to the internet to access your schoolwork?</p>
    </a>
    <div class="uk-accordion-content m-0 bg-gray-100">
      <div class="py-9 px-10 m-0">
        <small class="text-gray-500 font-bold">Answer:</small>
        <p class="text-gray-700 text-md mt-3">
          <?php echo $row['answer5'];?>
        </p>
      </div>
    </div>
  </li>
</ul>
<?php 
}
?>
