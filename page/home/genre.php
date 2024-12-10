<?php
$genre = $_GET['genre'];

$listGenre = "SELECT * FROM manga WHERE Genre = '$genre'";
$hasilListGenre = $proses->list($listGenre);

echo $genre;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
</head>

<body>
    <div class="md:p-4 sm:ml-64 2xl:ml-96">
        <!-- main content -->
        <div class="container-fluid">
            <div class="wrapper">
                <div class="md:flex md:flex-row flex-wrap md:mx-10 xs:mx-5">
                    <?php
                    foreach ($hasilListGenre as $x) { ?>
                        <div class="mx-2 mt-4 lg:w-screen">
                            <a href="../home/manga.php?manga=<?php echo $x['nama'] ?>&user=<?php echo $name ?>">
                                <div class="bg-slate-100 border-solid border-2 border-gray-200 overflow-hidden lg:w-full lg:h-60 rounded-xl">
                                    <div class="w-full h-full rounded-t-xl flex">
                                        <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="lg:w-44 h-full w-28" />
                                        <div class="mx-3 md:mx-5 w-full h-full">
                                            <div class="w-full lg:h-2/3">
                                                <p class="font-semibold text-2xl mt-5 hidden md:block"><?php echo $x['nama'] ?></p>
                                                <p class="font-semibold text-base md:hidden"><?php if (strlen($x['nama']) >= 19) {
                                                                                                                    echo $judul = substr($x['nama'], 0, 16) . '...';
                                                                                                                } else {
                                                                                                                    echo $x['nama'];
                                                                                                                } ?></p>
                                                <p class="text-base md:mt-3 hidden md:block"> <?php if (strlen($x['sipnosis']) >= 19) {
                                                                                                    echo $judul = substr($x['sipnosis'], 0, 500) . '...';
                                                                                                } else {
                                                                                                    echo $x['sipnosis'];
                                                                                                } ?>
                                                </p>
                                                <p class="text-base md:mt-3 md:hidden"> <?php if (strlen($x['sipnosis']) >= 19) {
                                                                                            echo $judul = substr($x['sipnosis'], 0, 100) . '...';
                                                                                        } else {
                                                                                            echo $x['sipnosis'];
                                                                                        } ?>
                                                </p>
                                            </div>
                                            <div class="lg:h-1/5 flex items-end">
                                                <div class="flex">
                                                    <div class="bg-red-200 w-auto rounded-full h-auto">
                                                        <p class="text-base p-1 md:p-2 mx-2 text-center"><?php echo $x['rating'] ?>/10</p>
                                                    </div>
                                                    <div class="bg-red-200 w-auto rounded-full h-auto ml-5 hidden md:block">
                                                        <p class="text-base p-1 md:p-2 mx-2 text-center"><?php echo $x['komikus'] ?></p>
                                                    </div>
                                                    <div class="bg-red-200 w-auto rounded-full h-auto md:ml-5 ml-2">
                                                        <p class="text-base p-1 md:p-2 mx-2 text-center">Chapter <?php echo $x['chapter'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>