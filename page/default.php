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

$role = "SELECT * FROM user WHERE name = '$name'";
$hasil = $proses->list($role);


$manga = 'SELECT * FROM manga';
$hasil2 = $proses->list($manga);

$name = $_GET['user'];

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
        if (!empty($_GET['acts'] == 'delete')) {
            require 'menu/delete.php';
        } else if (!empty($_GET['acts'] == 'edit')) {
            require 'layout/editManga.php';
        } else if (!empty($_GET['acts'] == 'add')) {
            require 'layout/addManga.php';
        } else if (!empty($_GET['acts'] == 'panel')) {
            include 'layout/addPanel.php';
        }else if(!empty($_GET['acts'] == 'menuManageContent')){
            require 'layout/menuManageContent.php';
        }else if (!empty($_GET['acts'] == 'manageContent')){
            require 'layout/manageContent.php';
        } else {
            require 'admin/list.php';
        }
        ?>

</body>

</html>