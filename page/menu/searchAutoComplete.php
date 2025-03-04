<?php
require '../../config/call.php';

$keyword = isset($_GET['q']) ? $_GET['q'] : '';

$sql = "SELECT * FROM manga WHERE nama LIKE '$keyword' LIMIT 10";
$result = $proses->list($sql);

echo json_encode($result);