<div class="md:p-4 flex justify-end h-full">
    <!-- main content -->
    <div class="container-fluid xl:w-4/5 h-full flex">
        <a href="default.php?user=<?php echo $name ?>&acts=manageContent&content=banner" class="card mx-3 bg-red-600 w-1/5 h-1/3 flex justify-evenly items-center rounded-3xl flex-col">
            <div class="h-1/2 flex items-end">
                <i class="fa-solid fa-images text-7xl text-red-300"></i>
            </div>
            <div class="h-1/3 flex items-end">
                <h1 class="text-2xl text-white font-semibold">Banner</h1>
            </div>
        </a>

        <a href="default.php?user=<?php echo $name ?>&acts=manageContent&content=top_list" class="card mx-3 bg-green-600 w-1/5 h-1/3 flex justify-evenly items-center rounded-3xl flex-col">
            <div class="h-1/2 flex items-end">
                <i class="fa-solid fa-trophy text-7xl text-gray-300"></i>
            </div>
            <div class="h-1/3 flex items-end">
                <h1 class="text-2xl text-white font-semibold">Top list</h1>
            </div>
        </a>

        <a href="default.php?user=<?php echo $name ?>&acts=manageContent&content=card_recom" class="card mx-3 bg-yellow-300 w-1/5 h-1/3 flex justify-evenly items-center rounded-3xl flex-col">
            <div class="h-1/2 flex items-end">
                <i class="fa-solid fa-star text-7xl text-yellow-100"></i>
            </div>
            <div class="h-1/3 flex items-end">
                <h1 class="text-2xl px-3 text-center text-white font-semibold">Card rekomendasi</h1>
            </div>
        </a>

        <a href="default.php?user=<?php echo $name ?>&acts=manageContent&content=card_action" class="card mx-3 bg-gray-600 w-1/5 h-1/3 flex justify-evenly items-center rounded-3xl flex-col">
            <div class="h-1/2 flex items-end">
                <i class="fa-solid fa-gun text-7xl text-gray-300"></i>
            </div>
            <div class="h-1/3 flex items-end">
                <h1 class="text-2xl px-3 text-center text-white font-semibold">Card action</h1>
            </div>
        </a>

        <a href="default.php?user=<?php echo $name ?>&acts=manageContent&content=card_romance" class="card mx-3 bg-pink-500 w-1/5 h-1/3 flex justify-evenly items-center rounded-3xl flex-col">
            <div class="h-1/2 flex items-end">
                <i class="fa-solid fa-heart text-7xl text-pink-200"></i>
            </div>
            <div class="h-1/3 flex items-end">
                <h1 class="text-2xl px-3 text-center text-white font-semibold">Card romance</h1>
            </div>
        </a>
    </div>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
