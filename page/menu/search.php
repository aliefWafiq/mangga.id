<?php
require '../../config/call.php';

$user = $_GET['user'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $manga = filter_input(INPUT_POST, "manga", FILTER_SANITIZE_SPECIAL_CHARS);

    $getManga = "SELECT * FROM manga WHERE nama = :manga";

    echo '<script>window.location="../direct.php?user=' . $user . '&manga='. $manga .'&page=search"</script>';
}