<?php
if (!empty($_SESSION)) {
} else {
    session_start();
}
if (empty($_SESSION['role'] == "")) {
} else {
    header('location:login.php?logindulu');
}

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

$sql_content = "SELECT manga.* FROM manga JOIN manage_content ON manga.id = manage_content.id_manga";
$content = $proses->list($sql_content);

function compareTop($a, $b)
{
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>
    <link rel="stylesheet" href="../src/output.css?<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        foreach ($hasil as $row) {
            if ($page == 'home') {
                require 'home/home.php';
            } else if ($page == 'top') {
                require 'home/top.php';
            } else if ($page == 'profile') {
                require 'home/profile.php';
            } else if ($page == 'genre') {
                require 'home/genre.php';
            } else if ($page == 'editProfile') {
                require 'home/editProfile.php';
            } else if ($page == 'detailManga') {
                require 'home/manga.php';
            } else if ($page == 'genre') {
                require 'home/genre.php';
            }else if ($page == 'seeMore'){
                require 'home/all-manga.php';
            } else if ($page == 'baca') {
                require 'home/baca.php';
            } else if ($page == 'search') {
                require 'layout/searchManga.php';
            }
        }
        ?>

</body>

</html>