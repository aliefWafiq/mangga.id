<div class="md:p-4 flex justify-end">
   <!-- main content -->
   <div class="xl:w-4/5 w-full">

      <!-- banner -->
      <div class="flex justify-center w-full">
         <div class="relative w-full glide-01">
            <div class="overflow-hidden" data-glide-el="track">
               <ul class="relative lg:w-screen w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                  <?php foreach ($banner as $x) { ?>
                     <li class="flex h-auto w-full">
                        <div class="content flex justify-center md:py-5 py-2 z-10 bg-gray-100 glassmorphism bg-opacity-10 w-full">
                           <div class="flex lg:h-72 md:w-1/3 w-44 h-44 justify-center">
                              <div class="lg:w-1/4 md:-rotate-6 absolute">
                                 <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="rounded-xl w-full h-full">
                              </div>
                           </div>
                           <div class="judul md:mx-3 mx-2 py-5 w-1/2 text-secondary">
                              <p class="md:text-4xl text-xl font-semibold"><?php echo $x['nama'] ?></p>
                              <div class="md:w-[30rem] w-52 absolute">
                                 <p class="py-2 md:py-5 hidden md:block text-sm"><?php if (strlen($x['sipnosis']) >= 19) {
                                                                                    echo $judul = substr($x['sipnosis'], 0, 300) . '...';
                                                                                 } else {
                                                                                    echo $x['sipnosis'];
                                                                                 } ?></p>
                                 <div class="flex gap-2 flex-wrap w-full">
                                    <?php
                                    $id = $x['id'];
                                    $genre = "SELECT manga.*, genremanga.*, genre.* FROM manga JOIN genremanga ON manga.id = genremanga.id_manga JOIN genre ON genremanga.genre = genre.id WHERE genremanga.id_manga = $id";
                                    $get_genre = $proses->list($genre);
                                    foreach ($get_genre as $s) { ?>
                                       <p class="bg-third md:px-4 py-1 px-2 text-secondary text-xs rounded-full md:text-lg font-semibold"><?php echo $s['genre'];} ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="bg w-full h-full absolute">
                           <div class="bg-black w-full h-full opacity-50 absolute"></div>
                           <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full h-full object-cover">
                        </div>
                     </li>
                  <?php } ?>
               </ul>
            </div>

            <!-- Controls -->
            <div class="absolute flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
               <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                     <title>prev slide</title>
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                  </svg>
               </button>
               <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                     <title>next slide</title>
                     <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                  </svg>
               </button>
            </div>
         </div>
      </div>
      <!-- banner end -->

      <!-- profile -->
      <div class="flex bg-slate-200 p-1 rounded-3xl mt-5 mx-3 md:mx-0">
         <?php foreach ($hasil as $x) { ?>
            <div class="md:mx-3">
               <div class="md:w-24 md:h-24 w-20 h-20 rounded-full bg-black md:mt-2">
                  <img src="../img/<?php echo $x['foto']; ?>" alt="" class=" w-full h-full overflow-hidden rounded-full">
               </div>
            </div>
            <div class="md:py-5 py-2 px-3 w-full">
               <p class="md:text-2xl text-xl"><?php echo $x['name'] ?></p>
               <p class="md:text-lg text-base">Level <?php echo $x['level'] ?></p>
               <div class="bg-yellow-100 h-2 w-full rounded-xl">
                  <div class="bg-yellow-300 h-2 rounded-xl" style="width: <?php echo $x['proggres'] ?>%;"></div>
               </div>
            </div>
         <?php } ?>
      </div>
      <!-- profile end -->

      <!-- daily update -->
      <div class="mt-10">
         <p class="text-2xl text-center mb-4 font-semibold">Latest Update</p>
         <div class="flex flex-row flex-wrap">
            <?php foreach ($sortManga as $s) { ?>
               <div class="md:mx-2 mt-4">
                  <a href="direct.php?manga=<?php echo $s['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                     <div class="bg-slate-100 border-solid border-2 border-gray-200 lg:w-48 lg:h-72 ml-2 w-28 h-48 rounded-xl">
                        <div class="lg:w-full lg:h-40 w-full h-20 bg-black rounded-t-xl">
                           <img src="../img/cover-manga/<?php echo $s['cover']; ?>" alt="" class="w-full rounded-t-xl object-cover h-full" />
                           <p class="font-semibold text-center md:text-xl text-base md:mt-2 mb-5 nama-manga"><?php if (strlen($s['nama']) >= 19) {
                                                                                                                  echo $judul = substr($s['nama'], 0, 16) . '...';
                                                                                                               } else {
                                                                                                                  echo $s['nama'];
                                                                                                               } ?>
                           </p>
                           <div class="bg-gray-200 text-center md:mx-3 md:mt-10">
                              <p class="text-base md:py-1">Chapter <?php echo $s['chapter'] ?></p>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            <?php } ?>
         </div>
      </div>
      <!-- daily end -->

      <!-- recomendation -->
      <div class="mt-14 md:mt-20">
         <p class="text-2xl text-center mb-5 font-semibold">You may like</p>
         <a href="direct.php?user=<?php echo $name ?>&page=seeMore" class="mx-2 text-base font-semibold text-blue-600">See more</a>
         <div class="flex justify-center ">
            <div class="relative w-full glide-02 md:block hidden">
               <!-- Slides -->
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class="relative w-full hidden md:flex overflow-hidden p-0 whitespace-no-wrap flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <?php
                     $chunks = array_chunk($cardRecom, 5);
                     foreach ($chunks as $chunk) { ?>
                        <li class="flex flex-wrap justify-center">
                           <?php
                           foreach ($chunk as $x) {
                              $sql_manga = "SELECT * FROM manga WHERE id = :id";
                              $param = [':id' => $x['id']];
                              $namaManga = $proses->show($sql_manga, $param); ?>
                              <a class="mx-3 w-44 h-72 ml-5 rounded-2xl" href="direct.php?manga=<?php echo $namaManga['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                                 <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                              </a>
                           <?php } ?>
                        </li>
                     <?php } ?>
                  </ul>
               </div>
               <!-- Controls -->
               <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>

            <!-- Slides mobile -->
            <div class="relative w-full glide-03 md:hidden">
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <?php
                     $chunks = array_chunk($cardRecom, 3);
                     foreach ($chunks as $chunk) { ?>
                        <li class="flex flex-wrap gap-2 justify-center">
                           <?php
                           foreach ($chunk as $x) {
                              $sql_manga = "SELECT * FROM manga WHERE id = :id";
                              $param = [':id' => $x['id']];
                              $namaManga = $proses->show($sql_manga, $param); ?>
                              <a class="w-24 h-36 rounded-2xl" href="direct.php?manga=<?php echo $namaManga['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                                 <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                              </a>
                           <?php } ?>
                        </li>
                     <?php } ?>
                  </ul>
               </div>
               <!-- Controls -->
               <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- recomendation end -->

      <!-- genre -->
      <div class="mt-14 md:mt-20">
         <p class="text-2xl text-center mb-5 font-semibold">Action</p>
         <a href="direct.php?user=<?php echo $name ?>&page=genre&genre=Action" class="mx-2 text-base font-semibold text-blue-600">See more</a>
         <div class="flex justify-center">
            <div class="relative w-full glide-04 md:block hidden">
               <!-- Slides -->
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class="relative w-full hidden md:flex overflow-hidden p-0 whitespace-no-wrap flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <?php
                     $chunks = array_chunk($cardAction, 5);
                     foreach ($chunks as $chunk) { ?>
                        <li class="flex flex-wrap justify-center">
                           <?php
                           foreach ($chunk as $x) {
                              $sql_manga = "SELECT * FROM manga WHERE id = :id";
                              $param = [':id' => $x['id']];
                              $namaManga = $proses->show($sql_manga, $param); ?>
                              <a class="mx-3 w-44 h-72 ml-5 rounded-2xl" href="direct.php?manga=<?php echo $namaManga['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                                 <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                              </a>
                           <?php } ?>
                        </li>
                     <?php } ?>
                  </ul>
               </div>
               <!-- Controls -->
               <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>

            <!-- Slides mobile -->
            <div class="relative w-full glide-05 md:hidden">
               <div class="overflow-hidden" data-glide-el="track">
                  <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                     <?php
                     $chunks = array_chunk($cardAction, 3);
                     foreach ($chunks as $chunk) { ?>
                        <li class="flex flex-wrap gap-2 justify-center">
                           <?php
                           foreach ($chunk as $x) {
                              $sql_manga = "SELECT * FROM manga WHERE id = :id";
                              $param = [':id' => $x['id']];
                              $namaManga = $proses->show($sql_manga, $param); ?>
                              <a class="w-24 h-36 rounded-2xl" href="direct.php?manga=<?php echo $namaManga['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                                 <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                              </a>
                           <?php } ?>
                        </li>
                     <?php } ?>
                  </ul>
               </div>
               <!-- Controls -->
               <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2" data-glide-el="controls">
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>prev slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                     </svg>
                  </button>
                  <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <title>next slide</title>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                     </svg>
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- genre end -->

      <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
      <script>
         var glide01 = new Glide(".glide-01", {
            type: "slider",
            focusAt: "center",
            perView: 1,
            autoplay: 4000,
            animationDuration: 3000,
            gap: 0,
            classes: {
               activeNav: "[&>*]:bg-slate-700",
            },
         });

         var glide02 = new Glide(".glide-02", {
            type: "slider",
            focusAt: "center",
            perView: 1,
            animationDuration: 3000,
            gap: 0,
            classes: {
               activeNav: "[&>*]:bg-slate-700",
            },
         });

         var glide03 = new Glide(".glide-03", {
            type: "slider",
            focusAt: "center",
            perView: 1,
            animationDuration: 3000,
            gap: 0,
            classes: {
               activeNav: "[&>*]:bg-slate-700",
            },
         });

         var glide04 = new Glide(".glide-04", {
            type: "slider",
            focusAt: "center",
            perView: 1,
            animationDuration: 3000,
            gap: 0,
            classes: {
               activeNav: "[&>*]:bg-slate-700",
            },
         });

         var glide05 = new Glide(".glide-05", {
            type: "slider",
            focusAt: "center",
            perView: 1,
            animationDuration: 3000,
            gap: 0,
            classes: {
               activeNav: "[&>*]:bg-slate-700",
            },
         });

         glide01.mount()
         glide02.mount()
         glide03.mount()
         glide04.mount()
         glide05.mount()
      </script>
   </div>
