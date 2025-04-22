<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $del = "UPDATE `manga` SET `top` = 'none'";
    $exeDel = $proses->action($del);

    $top1 = filter_input(INPUT_POST, "top1", FILTER_SANITIZE_SPECIAL_CHARS);
    $top2 = filter_input(INPUT_POST, "top2", FILTER_SANITIZE_SPECIAL_CHARS);
    $top3 = filter_input(INPUT_POST, "top3", FILTER_SANITIZE_SPECIAL_CHARS);
    $top4 = filter_input(INPUT_POST, "top4", FILTER_SANITIZE_SPECIAL_CHARS);
    $top5 = filter_input(INPUT_POST, "top5", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql4 = "UPDATE `manga` SET `top` = '1' WHERE `nama` = '$top1'";
    $sql5 = "UPDATE `manga` SET `top` = '2' WHERE `nama` = '$top2'";
    $sql6 = "UPDATE `manga` SET `top` = '3' WHERE `nama` = '$top3'";
    $sql7 = "UPDATE `manga` SET `top` = '4' WHERE `nama` = '$top4'";
    $sql8 = "UPDATE `manga` SET `top` = '5' WHERE `nama` = '$top5'";
    $stmt = $proses->action($sql4);
    $stmt2 = $proses->action($sql5);
    $stmt3 = $proses->action($sql6);
    $stmt4 = $proses->action($sql7);
    $stmt5 = $proses->action($sql8);
}
