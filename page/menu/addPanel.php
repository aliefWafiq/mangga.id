<?php

require '../../config/call.php';

$name = $_GET['user'];
$manga = $_GET['manga'];

$sqlManga = "SELECT * FROM manga WHERE id = :id";
$param = [':id' => $manga];
$namaManga = $proses->show($sqlManga, $param);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $chapter = filter_input(INPUT_POST, "chapter", FILTER_VALIDATE_INT);

    foreach ($_FILES['uploadfile']['name'] as $index => $panel) {
        if (empty($panel) || $_FILES['uploadfile']['size'][$index] <= 0 || $_FILES['uploadfile']['error'][$index] != 0) {
            echo '<script>window.location="../default.php?user=' . $name . '&manga=' . $manga . '&acts=panel&isidulu"</script>';
        } else {
            $folderPanel = "../../img/panel_manga/" . $namaManga['nama'] . "/" . $chapter;

            if (!is_dir($folderPanel)) {
                mkdir($folderPanel, 0777, true);
            }

            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'][$index], "../../img/panel_manga/" . $namaManga['nama'] . "/" . $chapter . "/" . $panel)) {
                    $sql = "INSERT INTO panel_manga (id_manga, panel, chapter) VALUES (:idManga, :panel, :chapter)";
                    $stmt = $proses->getDb()->prepare($sql);
                    $stmt->bindParam(":idManga", $manga);
                    $stmt->bindParam(':panel', $panel);
                    $stmt->bindParam(':chapter', $chapter);
            }
        }
    }
    if ($stmt->execute()) {
        $updateManga = "UPDATE manga SET chapter = :chapter WHERE id = :id";
        $stmtUpdate = $proses->getDb()->prepare($updateManga);
        $stmtUpdate->bindParam(':chapter', $chapter);
        $stmtUpdate->bindParam(':id', $manga);
        $stmtUpdate->execute();
        echo '<script>window.location="../default.php?user=' . $name . '&acts"</script>';
    }
}
