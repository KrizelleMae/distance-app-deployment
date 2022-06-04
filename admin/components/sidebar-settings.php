<aside class="w-68" aria-label="Sidebar">
  <div class="overflow-y-auto py-6 px-6 bg-gray-700 rounded">
    <ul class="space-y-2">
      <li class="mb-7 text-blue "><small>Settings</small></li>
      <li>
        <a
          href="./settings.php"
          8
          class="flex items-center p-2 text-base font-normal text-gray-100 <?php if($stat == 'settings') {echo 'text-gray-500 bg-gray-200';} ;?> rounded-md hover:no-underline hover:text-white"
        >
          <i class="pl-2 w-9 auto text-2xl fa fa-lock"> </i>

          <span class="ml-3">Admin Account</span>
        </a>
      </li>
      <li>
        <a
          href="http://wmsu-distance-learning.online/"
          8
          class="flex items-center p-2 text-base font-normal text-gray-100 <?php if($stat == 'app-status') {echo 'text-gray-500 bg-gray-200';} ;?> rounded-md hover:no-underline hover:text-white"
        >
          <i class="pl-2 w-9 auto text-2xl fa fa-globe"> </i>

          <span class="ml-3">View Website</span>
        </a>
      </li>

      <li>
        <a
          href="./users.php"
          8
          class="flex items-center p-2 text-base font-normal text-gray-100 <?php if($stat == 'users') {echo 'text-gray-500 bg-gray-200';} ;?> rounded-md hover:no-underline hover:text-white"
        >
          <i class="pl-2 w-9 auto text-2xl fa fa-user"> </i>

          <span class="ml-3">User Accounts</span>
        </a>
      </li>
      
       <li>
        <a
          href="../includes/USER-MANUAL.pdf"
          8
          class="flex items-center p-2 text-base font-normal text-gray-100 <?php if($stat == 'users') {echo 'text-gray-500 bg-gray-200';} ;?> rounded-md hover:no-underline hover:text-white"
        >
          <i class="pl-2 w-9 auto text-2xl fa fa-file"> </i>

          <span class="ml-3">Download Manual</span>
        </a>
      </li>
      
      

      <li class="pt-16">
        <a
          href="../server/logout.php"
          8
          class="flex items-center p-2 text-base font-normal text-red-100 hover:bg-red-400 rounded hover:px-4 hover:no-underline hover:text-white"
        >
          <span class="">Logout</span>
          <i class="pl-2 w-9 auto text-2xl fa fa-sign-out ml-auto"> </i>
        </a>
      </li>
      
     
    </ul>
  </div>
</aside>
