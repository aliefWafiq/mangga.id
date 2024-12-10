<?php
$name = $_GET['user'];
$sql = "SELECT * FROM user WHERE name='$name'";
$hasil = $proses->list($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
</head>

<body>
    <div class="md:p-4 sm:ml-64">
        <?php foreach ($hasil as $x) { ?>
            <div class="flex py-3 rounded-3xl md:mt-5 mx-3 md:mx-0">
                <?php foreach ($hasil as $x) { ?>
                    <div>
                        <div class="md:w-40 md:h-40 w-24 h-24 rounded-full bg-black">
                            <img src="../img/<?php echo $x['foto']; ?>" alt="" class=" w-full h-full overflow-hidden rounded-full">
                        </div>
                    </div>
                    <div class="md:py-6 py-2 px-5 w-full">
                        <p class="md:text-2xl text-xl"><?php echo $x['name'] ?></p>
                        <p class="md:text-lg text-base">Level 100</p>
                        <div class="bg-yellow-100 h-2 w-full rounded-xl">
                            <div class="bg-yellow-300 h-2 w-1/2 rounded-xl"></div>
                        </div>
                    </div>
                    <a href="direct.php?user=<?php echo $name ?>&page=editProfile" class="h-10 absolute">
                        <button class="bg-red-400 md:ml-5 text-sm w-8 h-8 text-white rounded-full hover:bg-red-500"><i class="fa-solid fa-pen-to-square"></i></button>
                    </a>
                <?php } ?>
            </div>
            <?php foreach ($hasil as $x) { ?>
                <p class="ml-5 text-lg">Bio :</p>
                <div class="bio mx-5 bg-slate-100 h-auto border-slate-400 border-2 rounded-2xl">
                    <p class="md:p-5 p-2"><?php echo $x['bio'] ?></p>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</body>

</html>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>