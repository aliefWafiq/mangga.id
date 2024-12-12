<?php

require '../../config/call.php';

$name = $_GET['user'];
$manga = $_GET['manga'];

$sqlManga = "SELECT * FROM manga WHERE id = :id";
$param = [':id' => $manga];
$namaManga = $proses->show($sqlManga, $param);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chapter = filter_input(INPUT_POST, "chapter", FILTER_VALIDATE_INT);

    $panel = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../img/panel_manga/" . $namaManga['nama'] . "/" . $panel;


    if (move_uploaded_file($tempname, $folder)) {
        $sql = "INSERT INTO panel_manga (id_manga, chapter, panel) VALUES (:idManga, :chapter, :panel)";
        $stmt = $proses->getDb()->prepare($sql);
        $stmt->bindParam(":idManga", $manga);
        $stmt->bindParam(':chapter', $chapter);
        $stmt->bindParam(':panel', $panel);

        if ($stmt->execute()) {
            $updateManga = "UPDATE manga SET chapter = :chapter WHERE id = :id";
            $stmtUpdate = $proses->getDb()->prepare($updateManga);
            $stmtUpdate->bindParam(':chapter', $chapter);
            $stmtUpdate->bindParam(':id', $manga);
            $stmtUpdate->execute();
            
            echo '<script>window.location="../default.php?user=' . $name . '&acts"</script>';
        }
    }
}
