<?php 

require '../../config/call.php';

$name = $_GET['user'];
$content = $_GET['content'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $manga = filter_input(INPUT_POST, 'manga' ,FILTER_SANITIZE_SPECIAL_CHARS);
    $id_manga = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql_getId = 'SELECT id FROM manga WHERE nama = :manga';
    $param = [':manga' => $manga];
    $get_idManga = $proses->show($sql_getId, $param);
    $id_mangaBaru = $get_idManga['id'];

    $sql = "UPDATE `manage_content` SET `id_manga` = '$id_mangaBaru' WHERE `id_manga` = '$id_manga' AND `content` = '$content'";
    $stmt = $proses->action($sql);

    echo '<script>window.location="../default.php?user=' . $name . '&acts=manageContent&content=banner"</script>';
}
?>