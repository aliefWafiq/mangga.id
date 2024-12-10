<?php
if (empty($_SESSION['role'])) {
} else {
    header('location:login.php?logindulu');
}
require '../../config/call.php';
session_start();

$name = $_GET['user'];

if ($name == 'admin') {
    require '../layout/navAdmin2.php';
} else {
    require '../layout/nav2.php';
}

$username = 'SELECT * FROM user WHERE name = "$name"';
$hasil = $proses->list($username);

$selectManga = "SELECT * FROM manga";
$result = $proses->list($selectManga);
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
                <div class="flex flex-row flex-wrap md:mx-10 xs:mx-5">
                <?php
                foreach ($result as $x) { ?>
                    <div class="md:mx-2 mt-4">
                     <a href="home/manga.php?manga=<?php echo $x['nama'] ?>&user=<?php echo $name ?>">
                        <div class="bg-slate-100 border-solid border-2 border-gray-200 lg:w-48 lg:h-72 ml-2 w-28 h-48 rounded-xl">
                           <div class="lg:w-full lg:h-40 w-full h-20 bg-black rounded-t-xl">
                              <img src="../../img/cover-manga/<?php echo $x['cover']; ?>" alt="" class="w-full rounded-t-xl object-cover h-full" />
                              <p class="font-semibold text-center md:text-xl text-base md:mt-2 mb-5 nama-manga"><?php if(strlen($x['nama']) >= 19){
                                                                                                               echo $judul = substr($x['nama'], 0, 16).'...'; }else{
                                                                                                               echo $x['nama']; }?>
                              </p>
                              <div class="bg-gray-200 text-center md:mx-3 md:mt-10">
                                 <p class="text-base md:py-1">Chapter <?php echo $x['chapter'] ?></p>
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