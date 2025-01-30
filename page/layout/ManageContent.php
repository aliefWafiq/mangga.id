<div class="md:p-4 flex justify-end">
    <!-- main content -->
    <div class="container-fluid xl:w-4/5">

        <!-- banner -->
        <div class="flex justify-center">
            <div class="relative w-full glide-01">
                <div class="overflow-hidden" data-glide-el="track">
                    <ul class="relative lg:w-screen w-full overflow-hidden whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                        <?php foreach ($content as $x) { ?>
                            <li class="flex h-auto w-full">
                                <div class="content flex justify-center py-5 z-10 bg-gray-100 glassmorphism bg-opacity-10 w-full">
                                    <div class="flex lg:h-72 w-1/2 h-44 justify-center">
                                        <div class="lg:w-1/4 -rotate-6 absolute">
                                            <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="rounded-xl w-full h-full">
                                        </div>
                                    </div>
                                    <div class="judul md:mx-3 mx-2 py-5 w-1/2 text-secondary">
                                        <p class="text-4xl font-semibold"><?php echo $x['nama'] ?></p>
                                        <div class="md:w-[30rem] w-52 absolute">
                                            <p class="py-2 md:py-5 hidden md:block text-sm"><?php if (strlen($x['sipnosis']) >= 19) {
                                                                                                echo $judul = substr($x['sipnosis'], 0, 300) . '...';
                                                                                            } else {
                                                                                                echo $x['sipnosis'];
                                                                                            } ?></p>
                                            <div class="flex">
                                                <?php
                                                $id = $x['id'];
                                                $genre = "SELECT manga.*, genremanga.*, genre.* FROM manga JOIN genremanga ON manga.id = genremanga.id_manga JOIN genre ON genremanga.genre = genre.id WHERE genremanga.id_manga = $id";
                                                $get_genre = $proses->list($genre);
                                                foreach ($get_genre as $s) { ?>
                                                    <p class="bg-third mx-2 px-4 py-1 text-secondary rounded-full text-lg font-semibold"><?php echo $s['genre'];
                                                                                                                                        } ?></p>
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
        <form action="menu/ManageContent.php?user=<?php echo $name ?>" method="post" enctype="multipart/form-data" class="my-5">
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

        <div class="lg:mx-5">
            <h1 class="font-bold text-xl text-center lg:mb-5 mb-2">
                Our Manga Collection
            </h1>
            <div class="relative w-full glide-01 flex justify-center">
                <!-- Slides -->
                <div class="overflow-hidden" data-glide-el="track">
                    <ul
                        class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
                        <li class="flex flex-wrap justify-center">
                            <?php foreach ($hasil2 as $x) { ?>
                                <div class="lg:w-48 lg:h-72 w-28 h-40 bg-slate-300 rounded-2xl mx-1  overflow-hidden group">
                                    <div class="transisi-card">
                                        <div class="lg:my-5 my-2 lg:mx-5 mx-2">
                                            <p class="font-bold text-lg lg:text-xl"><?php if (strlen($x['nama']) >= 19) {
                                                                                        echo $judul = substr($x['nama'], 0, 25) . '...';
                                                                                    } else {
                                                                                        echo $x['nama'];
                                                                                    } ?></p>
                                            <p class="font-semibold text-lg"><?php  ?></p>
                                            <p><?php if (strlen($x['sipnosis']) >= 19) {
                                                    echo $judul = substr($x['sipnosis'], 0, 100) . '...';
                                                } else {
                                                    echo $x['sipnosis'];
                                                } ?></p>
                                        </div>
                                    </div>
                                    <div class="h-full w-full">
                                        <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="h-full w-full" />
                                    </div>
                                </div>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
                <!-- Controls -->
                <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2"
                    data-glide-el="controls">
                    <button
                        class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                        data-glide-dir="<" aria-label="prev slide">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <title>prev slide</title>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>
                    </button>
                    <button
                        class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20"
                        data-glide-dir=">" aria-label="next slide">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-5 h-5">
                            <title>next slide</title>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>


    </div>
</div>

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

    glide01.mount();
    glide02.mount();
    glide03.mount();
</script>