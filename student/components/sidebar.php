<span
  class="relative text-white text-4xl top-5 left-4 cursor-pointer"
  onclick="Openbar()"
>
  <i class="bi bi-filter-left px-2 bg-crimson rounded-md"></i>
</span>
<div
  class="sidebar fixed top-0 bottom-0 lg:left-0 left-[-300px] p-2 w-[300px] overflow-y-auto text-center bg-crimson shadow-lg shadow-gray-200 h-screen"
>
  <div class="text-white text-xl">
    <div class="p-2.5 mt-1 rounded-md">
      <i
        class="bi bi-x relative float-right cursor-pointer lg:hidden text-2xl"
        onclick="Openbar()"
      ></i>
      <div class="text-[18px] text-xl text-white uppercase my-6">
        <img src="../images/dl-logo.png" alt="" class="logoside"/><br>
        Distance Learning
      </div>
    </div>
    <!-- <hr class="my-2 text-gray-600" /> -->

    <div class="mt-8 mx-5">
      <div
        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300 hover:text-gray-700 <?php if($page == "Home") echo "bg-gray-200 text-gray-700";?>"
      >
        <i class="bi bi-house-fill mb-2"></i>
        <a href="./" class="text-[15px] ml-4 hover:text-gray-700">Home</a>
      </div>

      <div
        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300 hover:text-gray-700  <?php if($page == "profile") echo "bg-gray-200 text-gray-700";?>"
      >
        <i class="bi bi-person-badge-fill mb-2"></i>
        <a href="./profile.php" class="text-[15px] ml-4 hover:text-gray-700"
          >Profile</a
        >
      </div>

      <div
        class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-gray-300 hover:text-gray-700"
      >
        <i class="bi bi-box-arrow-in-right mb-2"></i>
        <a href="../server/logout.php" onclick="return confirm('Are you sure you want to logout?');"
          ><span class="text-[15px] ml-4 hover:text-gray-700">Logout</span></a
        >
      </div>
    </div>
  </div>
</div>
