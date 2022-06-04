<div class="mt-10">
  <div class="uk-child-width-expand@l" uk-grid>
    <!-- One -->
    <div>
      <a href="./students.php" class="stat-box"
        ><div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'approved') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'approved') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'approved') {echo 'text-white ';} else {echo 'text-black';}; ?> font-semibold"
          >
            ENROLLED
          </div>

          <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
        </div></a
      >
    </div>
    <!-- Two -->
    <div>
      <a href="./graduates.php" class="stat-box">
        <div
          class="uk-card bg-white uk-card-body rounded p-5 <?php if($stat == 'graduates') {echo 'bg-gray-700';} else {echo 'bg-gray-200';}; ?> flex items-center px-6 <?php if($stat != 'graduates') echo 'stat-box';?>"
        >
          <div
            class="<?php if($stat == 'graduates') {echo 'text-white ';} else {echo 'text-black';};?> font-semibold"
          >
            GRADUATED
          </div>

          <div class="uk-card-badge uk-label my-1 rounded-full">5</div>
        </div></a
      >
    </div>
    <!-- Three -->

    <div>
    </div>
    <!-- Four -->
    <div>
    </div>
  </div>
</div>
