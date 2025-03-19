<?php 

require '../../config/call.php';

$name = $_GET['user'];
$content = $_GET['content'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $manga = filter_input(INPUT_POST, 'manga' ,FILTER_SANITIZE_SPECIAL_CHARS);

    $sql_getId = 'SELECT id FROM manga WHERE nama = :manga';
    $param = ['nama' => $manga];
    $get_idManga = $proses->show($param, $sql_getId);
    $id_manga = $get_idManga['id'];

    $sql = "UPDATE `manage_content` SET `manga` = `$manga` WHERE `id_manga` = `$id_manga` AND content = `$content`";
    $stmt = $proses->action($sql);
}
?>