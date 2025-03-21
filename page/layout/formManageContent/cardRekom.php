<form action="menu/ManageContent.php?user=<?php echo $name ?>&content=card_recom" method="post" enctype="multipart/form-data" class="my-5">
    <?php foreach ($list_content as $x) { ?>
        <div class="flex items-center">
            <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black ml-5 rounded-2xl">
                <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
            </div>
            <div class="mx-10 w-1/2">
                <div class="flex flex-col ">
                    <label for="manga">Manga:</label>
                    <input type="text" class="manga w-full rounded-lg" name="manga" autocomplete="off" value="<?php echo $x['nama'] ?>">
                </div>
                <div>
                    <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
                </div>
            </div>
        </div>
    <?php } ?>
</form>