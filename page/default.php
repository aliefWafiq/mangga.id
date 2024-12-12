<?php
if(!empty($_SESSION)){ }else{ session_start(); }
if(empty($_SESSION['role'] == "" )){}else{ header('location:login.php?logindulu'); }

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

if (!empty($_GET['acts'] == 'delete')) {
    require 'menu/delete.php';
} elseif (!empty($_GET['acts'] == 'edit')) {
    include 'layout/nav.php';
    require 'layout/editManga.php';
}else if(!empty($_GET['acts'] == 'add')) {
    include 'layout/nav.php';
    require 'layout/addManga.php';
}else if(!empty($_GET['acts'] == 'panel')) {
    include 'layout/nav.php';
    include 'layout/addPanel.php';
}else {
    include 'layout/nav.php';
    require 'admin/list.php';
}
