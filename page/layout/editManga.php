<?php
    $idManga = $_GET['manga'];
    $select2 = "SELECT * FROM manga WHERE id = '$idManga'";
    $result2 = $proses->list($select2);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="md:p-4 sm:ml-64 md:mt-10">
        <form action="menu/editManga.php?user=<?php echo $name ?>&manga=<?php echo $idManga ?>" method="post" enctype="multipart/form-data">
            <div class="mx-5 p-6">
                <?php foreach ($result2 as $x) { ?>
                    <div class="relative">
                        <input type="text" value="<?php echo $x['nama'];  ?>" id="nama" name="nama" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="nama" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Nama</label>
                    </div>
                    <div class="relative">
                        <input type="text" value="<?php echo $x['Umur']; ?>" id="umur" name="umur" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="umur" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Umur</label>
                    </div>
                    <div class="relative">
                        <input type="text" value="<?php echo $x['komikus']; ?>" id="komikus" name="komikus" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="komikus" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Komikus</label>
                    </div>
                    <div class="relative">
                        <textarea id="sipnosis" name="sipnosis" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border h-32 border-gray-600 appearance-none focus:ring-1 peer"><?php echo $x['sipnosis']; ?></textarea><br>
                        <label for="sipnosis" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Sipnosis</label>
                    </div>

                    <div class="flex flex-col">
                        <label for="status">Status:</label>
                        <select id="status" name="status">
                            <option value="on going">On going</option>
                            <option value="completed">Completed</option>
                        </select>

                        <label for="genre" class="md:ml-3 mt-5">Genre:</label>
                        <select id="genre" name="genre">
                            <option value="<?php echo $x['Genre'] ?>"><?php echo $x['Genre'] ?></option>
                            <option value="Action">Action</option>
                            <option value="Romance">Romance</option>
                            <option value="Comedy">Comedy</option>
                            <option value="SOL">SOL</option>
                        </select>

                        <label for="type" class="md:ml-3 mt-5">Type:</label>
                        <select id="type" name="type">
                            <option value="<?php echo $x['type'] ?>"><?php echo $x['type'] ?></option>
                            <option value="Action">Manga</option>
                            <option value="Romance">Manhwa</option>
                        </select>

                        <label for="genre" class="md:ml-3 mt-5">Rating:</label>
                        <select id="rating" name="rating">
                            <option value="<?php echo $x['rating'] ?>"><?php echo $x['rating'] ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>

                    <div class="form-group mt-5">
                        <input type="file" id="uploadfile" name="uploadfile">
                        <input type="hidden" name="existing_file" value="<?php echo $x['cover']; ?>">
                    </div>
                    <input type="submit" name="edit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
                <?php } ?>
        </form>
    </div>


</body>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
    <?php foreach ($result2 as $x) { ?>
        const fileInput = document.querySelector('input[type="file"]');

        const myFile = new File(['cover'], '<?php echo $x['cover'] ?>', {
            type: 'text/plain',
        });

        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;
    <?php } ?>
</script>