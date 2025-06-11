<?php
include '../../config/call.php';

$name = $_GET['user'];
$getFotoProfile = "SELECT * FROM user WHERE name = :name";
$param = ['name' => $name];
$fotoProfile = $proses->show($getFotoProfile, $param);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gantiNama = filter_input(INPUT_POST, "nama", FILTER_SANITIZE_SPECIAL_CHARS);
    $bio = filter_input(INPUT_POST, "bio", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $foto = $_FILES["uploadfile"]["name"];

    if ($fotoProfile['foto'] != $foto) {

        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../../img/" . $foto;

        $username = "SELECT * FROM user WHERE name = '$name'";
        $hasil = $proses->action($username);


        if (empty($foto)) {
            echo "Masukan foto";
        } else {
            if (move_uploaded_file($tempname, $folder)) {
                $sql4 = "UPDATE user SET foto = '$foto', name = '$gantiNama', email = '$email', bio = '$bio' WHERE name = '$name'";
                $stmt = $proses->action($sql4);

                unlink("../../img/" . $fotoProfile['foto']);

                echo "<script>window.location='../direct.php?user=", $gantiNama, "&page=profile';</script>";
            } else {
                echo "Gagal mengunggah file gambar";
            }
        }
    } else {
        $sql4 = "UPDATE user SET foto = '$foto', name = '$gantiNama', email = '$email', bio = '$bio' WHERE name = '$name'";
        $stmt = $proses->action($sql4);

        echo "<script>window.location='../direct.php?user=", $gantiNama, "&page=profile';</script>";
    }
}
