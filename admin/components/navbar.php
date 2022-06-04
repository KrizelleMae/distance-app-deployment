<div class="topnav shadow" id="myTopnav">
   <div class="">
      <div class="flex items-center float-right">
         <a
            href="../server/logout.php"
            onclick="confirm('Are you sure you want to logout?');"
            class="logout text-blue hover:text-decoration-none font-bold hover:bg-red-700 hover:px-4 py-2 rounded"
            >Logout <i class="fa fa-sign-out ml-3" aria-hidden="true"></i
         ></a>
      </div>
      <!-- <div class="flex items-center mb-7">
         <img src="../images/logo.png" class="h-14 mr-3" alt="" />
         <p class="text-2xl text-blue font-bold ">
            Distance Learning Online Application
         </p>
      </div> -->

      <!-- <div class="float-right mr-0">
         <form>
            <input type="text" name="search" id="search" placeholder="Search" />
         </form>
      </div> -->
   </div>
   <a href="./" class="<?php if($page == "dashboard") echo "active cursor-not-allowed"; ?> list">
      <i class="fa fa-dashboard mr-2.5"></i> Dashboard</a
   >
   <a href="./application.php" class="<?php if($page == "application") echo "active"; ?> list">
      <i class="fa fa-check-square-o mr-2.5"></i>Applications</a
   >
   <a href="./reports.php" class="<?php if($page == "reports") echo "active"; ?> list"> <i class="fa fa-users mr-2"></i>Reports</a>

   <a href="./settings.php" class="<?php if($page == "settings") echo "active"; ?> list">
      <i class="fa fa-cog mr-2.5"></i>Settings</a
   >
   <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
   </a>
</div>

<script>
   function myFunction() {
      var x = document.getElementById('myTopnav');
      if (x.className === 'topnav') {
         x.className += ' responsive';
      } else {
         x.className = 'topnav';
      }
   }
</script>


