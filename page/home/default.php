<?php
if(empty($_SESSION['role'])){}else{ header('location:login.php?logindulu'); }
require '../../config/call.php';
session_start();

$name = $_GET['user'];

$username = 'SELECT * FROM user WHERE name = "$name"';
$hasil = $proses->list($username);

$role = 'SELECT * FROM user';
$hasil2 = $proses->list($role);
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
        <!-- /.navbar -->
        
        <!-- Content Wrapper. Contains page content -->
        <?php 
        foreach($hasil2 as $row){
            if($row['role'] == 'admin'){
                include '../layout/nav.php';
                require 'profile.php';
            }else {
                include '../layout/nav.php';
                require 'profile.php';
            }
        }
        ?>
      
</body>

</html>