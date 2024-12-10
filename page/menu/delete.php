<?php 
$manga = $_GET['manga'];
$user = $_GET['user'];

$sql2 = "SELECT * FROM manga WHERE id = :manga";
$param = ['manga' => $manga];
$hasil = $proses->show($sql2, $param);

$sql3 = "SELECT * FROM panel_manga WHERE id_manga = '$manga'";
$hasilPanel = $proses->list($sql3);

unlink("../img/cover-manga/". $hasil['cover']);

foreach ($hasilPanel as $x) {
    unlink("../img/panel_manga/". $x['panel']);
}

$sql = "DELETE FROM manga WHERE id = $manga";
$proses->action($sql);

echo '<script>window.location="default.php?user='. $user .'&acts"</script>';