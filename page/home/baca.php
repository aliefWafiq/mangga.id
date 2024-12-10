<?php
$manga = $_GET['manga'];
$namaManga = "SELECT * FROM manga WHERE nama='$manga'";
$idManga = "SELECT * FROM manga WHERE nama= :manga";
$param = [':manga' => $manga];

$hasil2 = $proses->list($namaManga);
$resultId = $proses->show($idManga, $param);

$chapter = $_GET['chapter'];
$id = $resultId['id'];
$getPanel = "SELECT * FROM panel_manga WHERE id_manga = '$id' AND chapter = '$chapter'";
$resultPanel = $proses->list($getPanel);
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

   <body class="bg-black">
      <div class="md:p-4 sm:ml-64">
         <!-- main content -->
         <div class="container-fluid w-full">
            <div class="mt-5 w-full">
               <?php foreach ($resultPanel as $x) { ?>
                  <div class="flex w-full justify-center">
                    <div class="w-2/3 flex justify-center overflow-hidden">
                        <img src="../img/panel_manga/<?php echo $manga ?>/<?php echo $x['panel'] ?>" alt="" class="object-cover w-full h-full">
                    </div>
                  </div>
               <?php } ?>
            </div>
         </div>
   </body>
   <script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

</html>