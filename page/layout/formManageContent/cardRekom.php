<p class="text-2xl text-center mb-5 font-semibold">You may like</p>
<div class="flex justify-center">
    <div class="relative w-full glide-01">
        <!-- Slides -->
        <div class="overflow-hidden" data-glide-el="track">
            <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                <li class="flex flex-wrap justify-center">
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/law.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/Kiga.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/enen.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="w-48 h-72 bg-black ml-5 rounded-2xl hidden lg:block">
                        <img src="../img/jjk cover.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>

                </li>
                <li class="flex flex-wrap justify-center">
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/law.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/Kiga.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/enen.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="w-48 h-72 bg-black ml-5 rounded-2xl hidden lg:block">
                        <img src="../img/jjk cover.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>

                </li>
                <li class="flex flex-wrap justify-center">
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/law.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/Kiga.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/enen.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="w-48 h-72 bg-black ml-5 rounded-2xl hidden lg:block">
                        <img src="../img/jjk cover.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>

                </li>
                <li class="flex flex-wrap justify-center">
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/law.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/Kiga.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                        <img src="../img/enen.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>
                    <div class="w-48 h-72 bg-black ml-5 rounded-2xl hidden lg:block">
                        <img src="../img/jjk cover.jpeg" alt="" class="w-full rounded-2xl h-full" />
                    </div>

                </li>
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
<form action="menu/ManageContent.php?user=<?php echo $name ?>&content=card_recom" method="post" enctype="multipart/form-data" class="my-5">
    <div class="flex flex-col">
        <label for="manga">Manga:</label>
        <select id="manga" name="manga">
            <?php foreach ($hasil2 as $x) { ?>
                <option value="<?php echo $x['nama'] ?>"><?php echo $x['nama'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
    </div>
</form>