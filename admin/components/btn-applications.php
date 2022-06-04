<!-- BUttons -->

<?php 

// APPROVED
$get_approved = mysqli_query($con, "select COUNT(*) FROM application where status = 'approved';");
 $no_of_approved = $get_approved->fetch_row();



// DECLINED
$get_declined = mysqli_query($con, "select COUNT(*) FROM application where status = 'declined';");
 $no_of_declined = $get_declined->fetch_row();



// PENDING
$get_pending = mysqli_query($con, "select COUNT(*) FROM application where status = 'pending';");
 $no_of_pending = $get_pending->fetch_row();


?>
<div class="mt-10">
  <div class="uk-child-width-expand@l" uk-grid>
    <!-- One -->
    <div>
      <a href="./application.php" class="stat-box"
        ><div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'pending') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'pending') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'pending') {echo 'text-white ';} else {echo 'text-black';}; ?> font-semibold"
          >
            PENDING
          </div>

          <?php if($no_of_pending != 0){echo "<div class='uk-card-badge uk-label my-1 rounded-full'> $no_of_pending[0]</div>";}else {  }; ?>
        </div></a
      >
    </div>
    <!-- Two -->
    <div>
      <a href="./approved.php" class="stat-box">
        <div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'approved') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'approved') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'approved') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
          >
            APPROVED
          </div>

              <?php if($no_of_approved != 0){echo "<div class='uk-card-badge uk-label my-1 rounded-full'> $no_of_approved[0]</div>";}else {  }; ?>
        </div></a
      >
    </div>
    <!-- Three -->

    <div>
      <a href="./declined.php" class="stat-box">
        <div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'declined') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'declined') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'declined') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
          >
            DECLINED
          </div>

               <?php if($no_of_declined != 0){echo "<div class='uk-card-badge uk-label my-1 rounded-full'> $no_of_declined[0]</div>";}else {  }; ?>
        </div></a
      >
    </div>
    <!-- Four -->
    <div>
      <a href="./graduates.php" class="stat-box"> </a>
    </div>
  </div>
</div>
