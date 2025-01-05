<?php
require '../../config/call.php';

$user = $_GET['user'];
$manga = $_GET['manga'];

$getUser = 'SELECT * FROM user WHERE name = :user';
$param = [':user' => $user];
$dataUser = $proses->show($getUser, $param);

$getManga = 'SELECT * FROM manga WHERE nama = :manga';
$param = [':manga' => $manga];
$dataManga = $proses->show($getManga, $param);

$idUser = $dataUser['id'];
$idManga = $dataManga['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sql = 'INSERT INTO favorite (id_manga, id_user) VALUES (:id_manga, :id_user)';
    $stmt = $proses->getDb()->prepare($sql);
    $stmt->bindParam(':id_manga', $idManga);
    $stmt->bindParam(':id_user', $idUser);

    if($stmt->execute()){
        echo '<script>window.location="../direct.php?manga='. $manga .'&user='. $user .'&page=detailManga"</script>';
    }
}