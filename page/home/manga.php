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
?>

<div class="md:p-4 sm:ml-64">
   
   <!-- main content -->
   <div class="container-fluid w-full">
      <div class="mt-5 w-full">

         <?php foreach ($hasil2 as $x) { ?>
            <div class="flex w-full">
               <div class="bg-slate-100 flex rounded-t-3xl border-2 shadow-lg w-full justify-center items-center">
                  <div class="flex lg:w-1/5 items-center">
                     <div class="flex justify-center">
                        <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="md:w-50 md:h-70 w-60 h-70 rounded-lg shadow-xl">
                     </div>
                  </div>
                  <div class="mx-3 py-5 w-1/2">
                     <div class="my-3 ml-2 md:my-5 w-full">
                        <div class="flex mb-3">
                           <p class="md:text-2xl font-bold text-3xl text-center"><?php echo $x['nama'] ?></p>
                        </div>
                        <div class="flex">
                           <div class="w-36 md:w-52">
                              <p class="info-manga">Chapter</p>
                           </div>
                           <p>:</p>
                           <p class="mx-2"><?php echo $x['chapter'] ?></p>
                        </div>
                        <div class="flex">
                           <div class="w-36 md:w-52">
                              <p class="info-manga">Author</p>
                           </div>
                           <p>:</p>
                           <p class="w-44 mx-2"><?php echo $x['komikus'] ?></p>
                        </div>
                        <div class="flex">
                           <div class="w-36 md:w-52">
                              <p class="info-manga">Status</p>
                           </div>
                           <p>:</p>
                           <p class="mx-2"><?php echo $x['status'] ?></p>
                        </div>
                        <div class="flex">
                           <div class="w-36 md:w-52">
                              <p class="info-manga">Genre</p>
                           </div>
                           <p>:</p>
                           <p class="mx-2"><?php echo $x['Genre'] ?></p>
                        </div>
                        <div class="flex">
                           <div class="w-36 md:w-52">
                              <p class="info-manga">Umur pembaca</p>
                           </div>
                           <p>:</p>
                           <p class="mx-2"><?php echo $x['Umur'] ?></p>
                        </div>
                        <div class="w-full break-words">
                           <p class="text-2xl font-semibold mt-4 text-slate-700">Sipnosis</p>
                           <!-- <div class="text-wrap w-96 bg-slate-600 h-full"> -->
                           <p><?php echo $x['sipnosis'] ?></p>
                           <!-- </div> -->
                        </div>
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