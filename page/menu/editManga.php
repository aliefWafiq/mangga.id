<?php

require '../../config/call.php';

$name = $_GET['user'];
$select = "SELECT * FROM user WHERE name = '$name'";
$result = $proses->list($select);

$idManga = $_GET['manga'];
$select2 = "SELECT * FROM manga WHERE id = '$idManga'";
$result2 = $proses->list($select2);

$select3 = "SELECT * FROM manga WHERE id = :id";
$param = [':id' => $idManga];
$selectCover = $proses->show($select3, $param);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gantiNama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $komikus = filter_input(INPUT_POST, "komikus", FILTER_SANITIZE_SPECIAL_CHARS);
    $sipnosis = filter_input(INPUT_POST, "sipnosis", FILTER_SANITIZE_SPECIAL_CHARS);
    $umur = filter_input(INPUT_POST, "umur", FILTER_VALIDATE_INT);
    $chapter = filter_input(INPUT_POST, "chapter", FILTER_VALIDATE_INT);
    $status = filter_input(INPUT_POST, "status", FILTER_SANITIZE_SPECIAL_CHARS);
    $genre = filter_input(INPUT_POST, "genre", FILTER_SANITIZE_SPECIAL_CHARS);
    $rating = filter_input(INPUT_POST, "rating", FILTER_SANITIZE_SPECIAL_CHARS);

    $foto = $_FILES["uploadfile"]["name"];
    if ($selectCover['cover'] != $foto) {
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../../img/cover-manga/" . $foto;

        if (move_uploaded_file($tempname, $folder)) {
            $sql4 = "UPDATE `manga` SET `cover` = '$foto', `nama` = '$gantiNama', `chapter` = '$chapter', `sipnosis` = '$sipnosis', `komikus` = '$komikus', `status` = '$status', `Genre` = '$genre', `Umur` = '$umur', `rating` = '$rating' WHERE `id` = '$idManga'";
            $stmt = $proses->action($sql4);
            
            unlink("../img/cover-manga/". $hasil['cover']);
           
            echo '<script>window.location="../default.php?user='. $name .'&acts"</script>';
        } else {
            echo "Gagal mengunggah file gambar";
        }
    }else {
        $sql4 = "UPDATE `manga` SET `cover` = '$foto', `nama` = '$gantiNama', `chapter` = '$chapter', `sipnosis` = '$sipnosis', `komikus` = '$komikus', `status` = '$status', `Genre` = '$genre', `Umur` = '$umur', `rating` = '$rating' WHERE `id` = '$idManga'";
        $stmt = $proses->action($sql4);

        echo '<script>window.location="../default.php?user='. $name .'&acts"</script>';
    }
}
