<?php
    include 'db.php';
    include 'proses.php';

    $db = new koneksi;
    $koneksi = $db->DbConnect();
    $proses = new proses($koneksi);
?>