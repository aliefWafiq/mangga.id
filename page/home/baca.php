<?php
$manga = $_GET['manga'];

$idManga = "SELECT * FROM manga WHERE nama= :manga";
$param = [':manga' => $manga];

$resultId = $proses->show($idManga, $param);

$chapter = $_GET['chapter'];
$id = $resultId['id'];
$getPanel = "SELECT * FROM panel_manga WHERE id_manga = '$id' AND chapter = '$chapter'";
$resultPanel = $proses->list($getPanel);

$sql_getChapter = "SELECT manga.*, panel_manga.* FROM manga JOIN panel_manga on manga.id = panel_manga.id_manga WHERE panel_manga.id_manga = '$id'";
$chapter_manga = $proses->list($sql_getChapter);


$list_chapter = array();
$previous = $chapter - 1;
foreach($chapter_manga as $s){
    array_push($list_chapter, $s['chapter']);
};

if(in_array($previous, $list_chapter)){
    $previous = $chapter - 1;
}else{
    $previous = $chapter;
}
?>

<body class="bg-black">
   <div class="md:p-4 sm:ml-64">
      <!-- main content -->
      <div class="container-fluid w-full">
         <div class="mt-5 w-full flex flex-col items-center">
            <?php foreach ($resultPanel as $x) { ?>
               <div class="flex w-full justify-center">
                  <div class="w-2/3 flex justify-center overflow-hidden">
                     <img src="../img/panel_manga/<?php echo $manga ?>/<?php echo $x['chapter'] ?>/<?php echo $x['panel'] ?>" alt="" class="object-cover w-full h-full">
                  </div>
               </div>
            <?php } ?>
            <div class="flex justify-between w-1/2 bg-secondary fixed bottom-2 h-14 rounded-t-xl overflow-hidden">
               <a class="bg-third h-full flex-grow flex justify-center items-center" href="direct.php?manga=<?php echo $manga ?>&user=<?php echo $name ?>&page=baca&chapter=<?php echo $previous ?>">
                  <i class="text-xl text-white fa-solid fa-arrow-left"></i>
               </a>
               <div class="flex justify-center items-center w-3/4">
                  <p class="text-xl font-semibold">Chapter <?php echo $chapter ?></p>
               </div>
               <form action="menu/level.php?user=<?php echo $name ?>&manga=<?php echo $manga ?>&chapter=<?php echo $chapter ?>" method="post" class="flex-grow flex justify-center items-center h-full">
                  <button type="submit" class="bg-third h-full w-full cursor-pointer">
                     <i class="text-xl text-white fa-solid fa-arrow-right"></i>
                  </button>
               </form>
            </div>
         </div>
      </div>
</body>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
