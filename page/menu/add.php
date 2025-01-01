<?php

require '../../config/call.php';

$name = $_GET['user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $komikus = filter_input(INPUT_POST, "komikus", FILTER_SANITIZE_SPECIAL_CHARS);
    $sipnosis = filter_input(INPUT_POST, "sipnosis", FILTER_SANITIZE_SPECIAL_CHARS);
    $umur = filter_input(INPUT_POST, "umur", FILTER_VALIDATE_INT);
    $status = filter_input(INPUT_POST, "status", FILTER_SANITIZE_SPECIAL_CHARS);
    $genre = $_POST['genre'];
    $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS);
    $waktu = date('Y-m-d H:i:s');

    $stmt = $proses->getDb()->prepare("SELECT nama FROM manga WHERE ? = nama");
    $param = array($_POST['nama']);
    $stmt->execute($param);

    $foto = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../img/cover-manga/" . $foto;

    $folderPanel = "../../img/panel_manga/". $nama;
    mkdir($folderPanel);

    if (empty($foto)) {
        echo "Masukan foto";
    } else {
        if (move_uploaded_file($tempname, $folder)) {
            $sql = "INSERT INTO manga (nama,cover,komikus,Umur,status,sipnosis, waktu, type) VALUES (:nama, :cover, :komikus, :Umur, :status, :sipnosis, :waktu, :type)";
            $stmt = $proses->getDb()->prepare($sql);
            $stmt->bindParam(':cover', $foto);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':komikus', $komikus);
            $stmt->bindParam(':Umur', $umur);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':sipnosis', $sipnosis);
            $stmt->bindParam(':waktu', $waktu);
            $stmt->bindParam(':type', $type);

            if($stmt->execute()){
                $id_manga = $proses->getDb()->lastInsertId();

                foreach($genre as $genre){
                    $sql = "INSERT INTO genre (genre, id_manga) VALUES ('$genre', '$id_manga')";
                    $stmt = $proses->getDb()->prepare($sql);
                    $stmt->execute();
                }

                // echo '<script>window.location="../default.php?user='. $name .'&acts"</script>';
            }
        }
    }
}