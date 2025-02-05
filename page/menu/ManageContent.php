<?php

require '../../config/call.php';

$content = $_GET['content'];
$name = $_GET['user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $manga = filter_input(INPUT_POST, "manga", FILTER_SANITIZE_SPECIAL_CHARS);
    $set_content = $content;

    $sql_idManga = "SELECT * FROM manga WHERE nama = :nama";
    $param = [':nama' => $manga];
    $get_idManga = $proses->show($sql_idManga, $param);
    $id_manga = $get_idManga['id'];

    $sql = "INSERT INTO manage_content (id_manga, content) VALUES (:id_manga, :content)";
    $stmt = $proses->getDb()->prepare($sql);
    $stmt->bindParam(':id_manga', $id_manga);
    $stmt->bindParam(':content', $set_content);

    if ($stmt->execute()) {
        echo '<script>window.location="../default.php?user=' . $name . '&acts"</script>';
    }
}
