<?php 
include './auth.php';
include '../includes/db_connection.php';
$user_id = $_GET['id'];

$sql = "select * FROM user_details JOIN application ON user_details.user_id = application.user_id JOIN answers ON application.user_id = answers.user_id where application.user_id = $user_id; ";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {

?>
  <div class="bg-white shadow-lg overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">Applicant Information</h3>
      <div class="text-gray-500">
        <small class=""> Application status: </small>
        <span
          class="<?php if($row['status'] == "declined") {echo "bg-red-500"; }?> text-white text-xs font-bold mr-2 px-2.5 py-0.5 rounded"
          >  <?php echo $row['status']; ?></span
        >
      </div>
    </div>
    <div class="border-t border-gray-200">
      <dl>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-user text-gray-500 font-bold"></i> Full name</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['first_name'] . ' ' . $row['last_name'] ; ?></dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-graduation-cap text-gray-500 font-bold"></i> Program Enrolled</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">Masters in <?php echo $row['program']; ?></dd>
        </div>
        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-envelope text-gray-500 font-bold"></i> Email address</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['email']; ?></dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-phone text-gray-500 font-bold"></i> Contact Number</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['mobile']; ?></dd>
        </div>
        <div class="bg-gray-50 bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-venus-mars text-gray-500 font-bold"></i> Gender</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['gender']; ?>
            <?php
              if($row['gender']=='Male'){
                echo '<i class="fa fa-mars text-blue-500 font-bold"></i>';
              }
              else{
                echo '<i class="fa fa-venus text-pink-500 font-bold"></i>';
              }
              ?>
        </dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-map-marker text-gray-500 font-bold"></i> Address</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['house'] . ", ". $row['street'] .",". $row['city'] .", ". $row['state'].", ". $row['country'] ." ". $row['zip'];?></dd>
        </div>
        <div class="bg-gray-50 bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-building text-gray-500 font-bold"></i> School Attended</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['university']; ?></dd>
        </div>
        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-graduation-cap text-gray-500 font-bold"></i> Degree</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['degree']; ?></dd>
        </div>

        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500"><i class="fa fa-globe text-gray-500 font-bold"></i> Google Drive Link</dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2"><?php echo $row['drive']; ?></dd>
        </div>

        
      </dl>
    </div>
  </div>
<?php
}
?>