<?php
if(!empty($_SESSION)){ }else{ session_start(); }
if(empty($_SESSION['role'] == "" )){}else{ header('location:login.php?logindulu'); }

require '../config/call.php';

$name = $_GET['user'];
$page = $_GET['page'];

$role = "SELECT * FROM user WHERE name = '$name'";
$hasil = $proses->list($role);

$manga = "SELECT * FROM manga ORDER BY id DESC LIMIT 8";
$sortManga = $proses->list($manga);

$manga = "SELECT * FROM manga";
$hasilManga = $proses->list($manga);

$tes = "SELECT * FROM manga WHERE top != 'none'";
$tes2 = $proses->list($tes);

function compareTop($a, $b) {
    return $a['top'] - $b['top'];
}

usort($tes2, 'compareTop');

foreach ($hasil as $row) {
    if ($row['role'] == 'user') {
       echo '<script>let isAdmin = false;</script>';
    } else {
       echo '<script>let isAdmin = true;</script>';
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="../src/output.css?<?= time() ?>">
</head>
<body>
    <div class="wrapper">
        <!-- Navbar -->
         <?php
        require 'layout/nav.php';
        ?>
        <!-- /.navbar -->
        
        <!-- Content Wrapper. Contains page content -->
        <?php 
        foreach($hasil as $row){
            if($page == 'home'){
                require 'home/home.php';
            }else if($page == 'top'){
                require 'home/top.php';
            }else if($page == 'profile'){
                require 'home/profile.php';
            }else if($page == 'genre'){
                require 'home/genre.php';
            }else if($page == 'editProfile'){
                require 'home/editProfile.php';
            }else if($page == 'detailManga'){
                require 'home/manga.php';
            }else if($page == 'genre'){
                require 'home/genre.php';
            }else if($page == 'baca'){
                require 'home/baca.php';
            }
        }
        ?>
      
</body>

</html>