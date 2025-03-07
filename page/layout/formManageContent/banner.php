<!-- banner -->
<div class="flex flex-col justify-center">
    <form action="menu/ManageContent.php?user=<?php echo $name ?>&content=banner" method="post" enctype="multipart/form-data" class="relative w-full overflow-hidden whitespace-no-wrap flex flex-col flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
        <?php foreach ($list_content as $x) { ?>
            <div class="flex relative h-full overflow-hidden w-full mt-5">
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
            </div>
            <div class="flex flex-col mt-3 mb-4 w-full">
                <label for="manga">Manga:</label>
                <div class="flex w-full">
                    <div class="w-1/2">
                        <input type="hidden" name="id_manageContent[]" value="<?php echo $x['id_manga'] ?>" >
                        <input type="text" class="manga w-full" name="manga[]" autocomplete="off" value="<?php echo $x['nama'] ?>">
                    </div>
                    <div>
                        <button type="button" onclick="confirmDelete(<?php echo $x['id'] ?>)" class="px-5 mx-2 py-2 text-white font-semibold rounded-lg bg-red-600">Delete</button>
                    </div>
                </div>
            </div>
            <script>
                function confirmDelete(id) {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Redirect ke halaman delete dengan ID yang sesuai
                            window.location.href = `default.php?user=<?php echo $name ?>&acts=delete&source=manageContent&manga=${id}&content=banner`;
                        }
                    });
                }
            </script>
        <?php } ?>
        <div id="newBanner"></div>
        <button type="button" onclick="addBanner()" class="my-5 border border-black rounded-lg py-3">Tambahkan Banner +</button>
        <div>
            <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
        </div>
    </form>
</div>