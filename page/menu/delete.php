<?php 
$manga = $_GET['manga'];
$user = $_GET['user'];
$source = $_GET['source'];

$sql2 = "SELECT * FROM manga WHERE id = :manga";
$param = ['manga' => $manga];
$hasil = $proses->show($sql2, $param);

$sql3 = "SELECT * FROM panel_manga WHERE id_manga = '$manga'";
$hasilPanel = $proses->list($sql3);

$sql4 = "SELECT * FROM manga WHERE id = :id";
$param = [":id"=> $manga];
$namaManga = $proses->show($sql4, $param);

if($source == 'list'){
    unlink("../img/cover-manga/". $hasil['cover']);

    foreach ($hasilPanel as $x) {
        unlink("../img/panel_manga/". $namaManga['nama'] . "/" . $x['panel']);
        rmdir("../img/panel_manga/". $namaManga["nama"]);
    }

    $sql = "DELETE FROM manga WHERE id = $manga";
    $proses->action($sql);

    echo '<script>window.location="default.php?user='. $user .'&acts"</script>';
}else {
    $content = $_GET['content'];
    echo $content;
    echo $manga;
    $sql = "DELETE manga.* FROM manga JOIN manage_content ON manga.id = manage_content.id_manga WHERE manage_content.id_manga = '$manga' AND manage_content.content = '$content'";
    $proses->action($sql);

    echo '<script>window.location="default.php?user='. $user .'&acts=menuManageContent"</script>';
}
