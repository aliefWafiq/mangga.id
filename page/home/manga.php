<?php
$manga = $_GET['manga'];
$namaManga = "SELECT * FROM manga WHERE nama='$manga'";
$idManga = "SELECT * FROM manga WHERE nama = :manga";
$param = [':manga' => $manga];

$hasil2 = $proses->list($namaManga);
$resultId = $proses->show($idManga, $param);

$id = $resultId['id'];
$getPanel = "SELECT * FROM panel_manga WHERE id_manga = '$id'";
$resultPanel = $proses->list($getPanel);

$get_genre = "SELECT manga.*, genremanga.*, genre.* FROM manga JOIN genremanga ON manga.id = genremanga.id_manga JOIN genre ON genremanga.genre = genre.id WHERE genremanga.id_manga = $id";
$genre = $proses->list($get_genre);
?>

<div class="md:p-4 sm:ml-64">

   <!-- main content -->
   <div class="container-fluid w-full">
      <div class="mt-5 w-full">

         <?php foreach ($hasil2 as $x) { ?>
            <div class="w-full md:px-10">
               <div class="flex-col flex w-full justify-center items-center md:px-14 py-10 bg-secondary text-primary rounded-2xl">
                  <div class="flex md:flex-row flex-col justify-center items-center w-full ">
                     <div class="flex w-fit items-center">
                        <div class="flex justify-center">
                           <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="md:w-50 md:h-70 w-60 h-70 rounded-lg shadow-xl">
                        </div>
                     </div>
                     <div class="mx-3 py-5 md:w-1/2">
                        <div class="my-3 ml-2 md:my-5 w-full">
                           <div class="flex mb-5">
                              <p class="md:text-2xl font-bold text-3xl"><?php echo $x['nama'] ?></p>
                           </div>
                           <div class="flex">
                              <div class="w-36 md:w-52">
                                 <p class="info-manga">Chapter</p>
                              </div>
                              <p>:</p>
                              <p class="mx-2 text-lg"><?php echo $x['chapter'] ?></p>
                           </div>
                           <div class="flex">
                              <div class="w-36 md:w-52">
                                 <p class="info-manga">Author</p>
                              </div>
                              <p>:</p>
                              <p class="w-44 mx-2 text-lg"><?php echo $x['komikus'] ?></p>
                           </div>
                           <div class="flex">
                              <div class="w-36 md:w-52">
                                 <p class="info-manga">Status</p>
                              </div>
                              <p>:</p>
                              <p class="mx-2 text-lg"><?php echo $x['status'] ?></p>
                           </div>
                           <div class="flex">
                              <div class="w-36 md:w-52">
                                 <p class="info-manga">Umur pembaca</p>
                              </div>
                              <p>:</p>
                              <p class="mx-2 text-lg"><?php echo $x['Umur'] ?></p>
                           </div>
                           <div class="flex mt-5 gap-2">
                              <?php foreach ($genre as $s) { ?>
                                 <p class="bg-third px-4 py-1 text-secondary rounded-full text-lg font-semibold"><?php echo $s['genre'] ?></p>
                              <?php } ?>
                           </div>
                           <form action="menu/favorite.php?manga=<?php echo $manga ?>&user=<?php echo $name ?>" method="post" class="my-3">
                              <button type="submit" name="submit" class="flex items-center bg-third text-secondary px-3 py-2 rounded-3xl hover:bg-primary hover:text-third transition-all ease-in-out">
                                 <i class="fa-solid fa-star mr-2"></i>
                                 <p>Add to Favorite</p>
                              </button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="w-full flex md:mt-3 px-5 justify-center">
                     <div class="w-full">
                        <p class="text-4xl font-semibold my-4">Sipnosis</p>
                        <p><?php echo $x['sipnosis'] ?></p>

                     </div>
                  </div>
               </div>
            </div>
            <div class="chapter mt-10 mx-5">
               <?php for ($i = $x['chapter']; $i > 0; $i--) { ?>
                  <div class="my-5 border-b-2 pb-3">
                     <a href="direct.php?manga=<?php echo $x['nama'] ?>&user=<?php echo $name ?>&page=baca&chapter=<?php echo $i ?>">Chapter <?php echo $i ?></a>
                  </div>
               <?php } ?>
            </div>
         <?php } ?>
      </div>
   </div>

   <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
