<?php

require '../../config/call.php';

$name = $_GET['user'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $manga = filter_input(INPUT_POST, "manga", FILTER_SANITIZE_SPECIAL_CHARS);




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

    if ($stmt->execute()) {
        $id_manga = $proses->getDb()->lastInsertId();

        echo '<script>window.location="../default.php?user=' . $name . '&acts"</script>';
    }
}
