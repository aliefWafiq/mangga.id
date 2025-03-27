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
        <form action="menu/add.php?user=<?php echo $name ?>" method="post" enctype="multipart/form-data">
            <div class="mx-5 p-6">
                <div class="relative">
                    <input type="text" id="nama" name="nama" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="nama" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">name</label>
                </div>
                <div class="relative">
                    <input type="text" id="umur" name="umur" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="umur" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Umur</label>
                </div>
                <div class="relative">
                    <input type="text" id="komikus" name="komikus" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="komikus" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Komikus</label>
                </div>
                <div class="relative">
                    <textarea id="sipnosis" name="sipnosis" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border h-32 border-gray-600 appearance-none focus:ring-1 peer"></textarea><br>
                    <label for="sipnosis" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Sipnosis</label>
                </div>

                <div class="flex flex-col">
                    <label for="status">Status:</label>
                    <select id="status" name="status">
                        <option value="on going">On going</option>
                        <option value="completed">Completed</option>
                    </select>

                    <div class="flex flex-wrap my-3">
                        <div class="w-full">
                            <label for="genre" class="mt-5">Pilih Genre:</label>
                        </div>
                        <?php foreach ($listGenre as $x) { ?>
                            <div id="genre" class="mx-3 mt-2">
                                <input type="checkbox" name="genre[]" value="<?php echo $x['id'] ?>"> <?php echo $x['genre'] ?>
                            </div>
                        <?php } ?>
                    </div>

                    <label for="type" class="md:ml-3 mt-5">Type:</label>
                    <select id="ype" name="type">
                        <option value="manga">Manga</option>
                        <option value="Manhwa">Manhwa</option>
                    </select>
                </div>

                <div class="form-group mt-5">
                    <input class="form-control" type="file" name="uploadfile" value="" />
                </div>
                <div>
                    <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
                </div>
        </form>
    </div>
</body>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>