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
                <form action="menu/search.php?user=<?php echo $name ?>" method="post" class="flex">
                    <input type="text" name="manga" class="rounded-lg border border-gray-600 w-10 flex-grow" placeholder="Cari...">
                    <button class="bg-secondary w-1/5 mx-1 rounded-lg" type="submit" name="submit">
                        <i class="fa-solid fa-search"></i>
                    </button>
                </form>
            </li>
            <li>
                <a href="direct.php?user=<?php echo $name ?>&page=profile" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-user"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Profile</span>
                </a>
            </li>
            <li>
                <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-book"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Genre</span>
                </a>
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
            <li class="hidden" id="content">
                <a href="default.php?user=<?php echo $name ?>&acts=menuManageContent" class="flex items-center p-2 text-xl text-secondary rounded-lg dark:text-white hover:bg-gray-100 hover:text-primary dark:hover:bg-gray-700 group">
                    <i class="fa-solid fa-bars-progress"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">Manage content</span>
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
<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
    if (isAdmin == true) {
        document.getElementById('list').classList.remove('hidden')
        document.getElementById('add').classList.remove('hidden')
        document.getElementById('content').classList.remove('hidden')
    }
</script>
