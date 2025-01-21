<div class="md:p-4 sm:ml-64 md:mt-10">
    <form action="menu/manageContent.php?user=<?php echo $name ?>" method="post" enctype="multipart/form-data">
        <div class="flex flex-col">
            <label for="manga">Manga:</label>
            <select id="manga" name="manga">
                <?php foreach($hasil2 as $x){ ?>
                <option value="<?php $x['nama'] ?>"><?php echo $x['nama'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="flex flex-col my-5">
            <label for="content">Content:</label>
            <select id="content" name="content">
                <option value="banner">Banner</option>
                <option value="card_recom">Card rekomendasi</option>
                <option value="card_action">Card action</option>
            </select>
        </div>
        <div>
            <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
        </div>
    </form>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>