<?php
require '../../config/call.php';

$content = $_GET['content'];
$name = $_GET['user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $manga = filter_input(INPUT_POST, "manga", FILTER_SANITIZE_SPECIAL_CHARS);
    $set_content = $content;

    $sql_idManga = "SELECT id FROM manga WHERE nama = :nama";
    $param = [':nama' => $manga];
    $get_idManga = $proses->show($sql_idManga, $param);

    $sql = "INSERT INTO manage_content (id_manga, content) VALUES (:id_manga, :content)";
    $stmt = $proses->getDb()->prepare($sql);
    $stmt->bindParam(':id_manga', $get_idManga['id']);
    $stmt->bindParam(':content', $set_content);
    $stmt->execute();

    echo '<script>window.location="../default.php?user=' . $name . '&acts=manageContent&content=banner"</script>';
    // if ($get_idManga) { 
    //     $id_manga = $get_idManga['id'];

    //     $sql_check = "SELECT COUNT(*) FROM manage_content WHERE id_manga = :id_manga AND content = :content";
    //     $stmt_check = $proses->getDb()->prepare($sql_check);
    //     $stmt_check->bindParam(':id_manga', $id_manga);
    //     $stmt_check->bindParam(':content', $set_content);
    //     $stmt_check->execute();
    //     $count = $stmt_check->fetchColumn();

}