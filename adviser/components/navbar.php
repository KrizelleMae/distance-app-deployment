<div class="topnav shadow-md" id="myTopnav">
   <div class="">
      <div class="flex items-center float-right">
         <a
            href="../server/logout.php"
            class="logout text-sky-900 decoration-none font-bold hover:bg-red-700 hover:px-4 py-2 rounded"
            >Logout <i class="fa fa-sign-out ml-3" aria-hidden="true"></i
         ></a>
      </div>
      <!-- <div class="flex items-center mb-7">
         <img src="../images/logo.png" class="h-14 mr-3" alt="" />
         <p class="text-2xl text-blue font-bold ">
            Distance Learning Online Application
         </p>
      </div> -->
    <!-- 
      <div class="float-right mr-0">
         <form>
            <input type="text" name="search" id="search" placeholder="Search" />
         </form>
      </div> -->
   </div>
   <a href="./index.php" class="<?php if($page == "dashboard") echo "active cursor-not-allowed"; ?> list">
      <i class="fa fa-dashboard mr-2.5"></i> Dashboard</a
   >
   <a href="./applicants.php" class="<?php if($page == "applicants") echo "active"; ?> list">
      <i class="fa fa-check-square-o mr-2.5"></i>Applications</a
   >
   <a href="./students.php" class="<?php if($page == "admission") echo "active"; ?> list"> <i class="fa fa-users mr-2"></i>Admission</a>

   <a href="./reports.php" class="<?php if($page == "reports") echo "active"; ?> list">
      <i class="fa fa-cog mr-2.5"></i>Reports
   
   <a href="../includes/USER-MANUAL-AD.pdf" class="list">
      <i class="fa fa-file-pdf-o mr-2.5"></i>USER MANUAL</a
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


