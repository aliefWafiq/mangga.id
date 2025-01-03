<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
   <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
      <span class="sr-only">Open sidebar</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
         <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
      </svg>
   </button>

   <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-primary dark:bg-gray-800">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="#" class="flex items-center p-2 mb-5 text-third rounded-lg dark:text-white dark:hover:bg-gray-700 group">
                  <span class="text-3xl">Mangga.id</span>
               </a>
            </li>
            <li>
               <a href="direct.php?user=<?php echo $name ?>&page=profile" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-user"></i>
                  <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
               </a>
            </li>
            <li>
               <button type="button" class="flex items-center w-full p-2 text-xl text-secondary transition duration-75 rounded-lg group hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                  <i class="fa-solid fa-book"></i>
                  <span class="text-left ms-3">Genre</span>
               </button>
               <ul id="dropdown-example" class="hidden py-2 space-y-2">
                  <li>
                     <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=Action" class="flex items-center w-full p-2 text-secondary transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700">Action</a>
                  </li>
                  <li>
                     <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=SOL" class="flex items-center w-full p-2 text-secondary transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700">SOL</a>
                  </li>
                  <li>
                     <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=Romance" class="flex items-center w-full p-2 text-secondary transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700">Romance</a>
                  </li>
                  <li>
                     <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=Comedy" class="flex items-center w-full p-2 text-secondary transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 hover:text-primary dark:text-white dark:hover:bg-gray-700">Comedy</a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="direct.php?user=<?php echo $name ?>&page=home" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-house"></i>   
                  <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
               </a>
            </li>
            <li>
               <a href="direct.php?user=<?php echo $name ?>&page=top" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-list"></i>
                  <span class="flex-1 ms-3 whitespace-nowrap">Top List</span>
               </a>
            </li>
            <li class="hidden" id="list">
               <a href="default.php?user=<?php echo $name ?>&acts" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-list"></i>
                  <span class="flex-1 ms-3 whitespace-nowrap">List manga</span>
               </a>
            </li>
            <li class="hidden" id="add">
               <a href="default.php?user=<?php echo $name ?>&acts=add" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-plus"></i>
                  <span class="flex-1 ms-3 whitespace-nowrap">Add manga</span>
               </a>
            </li>
            <li>
               <a href="index.php" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>
</body>
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
   if(isAdmin == true){
      document.getElementById('list').classList.remove('hidden')
      document.getElementById('add').classList.remove('hidden')
   }
</script>