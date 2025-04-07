<?php
$name = $_GET['user'];
$sql = "SELECT * FROM user WHERE name='$name'";
$hasil = $proses->list($sql);

foreach ($hasil as $x) {
    $id_user = $x['id'];
}

$get_favorite = "SELECT user.*, favorite.*, manga.* FROM user JOIN favorite ON user.id = favorite.id_user JOIN manga ON favorite.id_manga = manga.id WHERE favorite.id_user = $id_user";
$favorite = $proses->list($get_favorite);
?>

<div class="md:p-4 sm:ml-64">
    <?php foreach ($hasil as $x) { ?>
        <div class="flex py-3 rounded-3xl md:mt-5 mx-3 md:mx-0">
            <div>
                <div class="md:w-40 md:h-40 w-20 h-20 rounded-full">
                    <img src="../img/<?php echo $x['foto']; ?>" alt="" class=" w-full h-full overflow-hidden rounded-full">
                </div>
            </div>
            <div class="md:py-6 py-2 px-5 w-full">
                <p class="md:text-2xl text-xl"><?php echo $x['name'] ?></p>
                <p class="md:text-lg text-base">Level <?php echo $x['level'] ?></p>
                <div class="bg-yellow-100 h-2 w-full rounded-xl">
                    <div class="bg-yellow-300 h-2 rounded-xl" style="width: <?php echo $x['proggres'] ?>%;"></div>
                </div>
            </div>
            <a href="direct.php?user=<?php echo $name ?>&page=editProfile" class="h-10 absolute">
                <button class="bg-red-400 md:ml-5 text-sm w-8 h-8 text-white rounded-full hover:bg-red-500"><i class="fa-solid fa-pen-to-square"></i></button>
            </a>

        </div>
        <p class="ml-5 mt-3 text-lg">Bio :</p>
        <div class="bio mx-5 bg-slate-100 h-auto border-slate-400 border-2 rounded-2xl">
            <p class="md:p-5 p-2"><?php echo $x['bio'] ?></p>
        </div>
        <div class="w-full mt-10 px-5 overflow-x-scroll">
            <p class="text-2xl mb-5 font-semibold">Favorite</p>
            <div class="flex gap-5 my-2">
                <?php foreach ($favorite as $x) {
                ?>
                    <a href="direct.php?manga=<?php echo $x['nama'] ?>&user=<?php echo $name ?>&page=detailManga">
                        <div class="lg:w-48 lg:h-72 w-32 h-48 bg-black rounded-2xl">
                            <form action="default.php?manga=<?php echo $x['id'] ?>&user=<?php echo $name ?>&source=favorite&acts=delete" method="post" class="absolute">
                              <button type="submit" name="submit" class="flex items-center bg-third text-secondary p-3 rounded-3xl hover:bg-secondary hover:text-red-600 transition-all md:my-2 md:mx-2 ease-in-out">
                                 <i class="fa-solid fa-star"></i>
                              </button>
                           </form>
                            <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                        </div>
                    </a>
                <?php
                } ?>
            </div>
        </div>
    <?php } ?>
</div>
