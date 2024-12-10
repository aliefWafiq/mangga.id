<?php
if (empty($_SESSION['role'])) {
} else {
    header('location:login.php?logindulu');
}
require '../../config/call.php';
session_start();

$name = $_GET['user'];

if ($name == 'admin') {
    require '../layout/navAdmin2.php';
} else {
    require '../layout/nav2.php';
}

$select2 = "SELECT * FROM manga";
$result2 = $proses->list($select2);

$selectTop = "SELECT * FROM manga WHERE top != 'none'";
$exeTop = $proses->list($selectTop);

function compare($a, $b)
{
    return $a['top'] - $b['top'];
}

usort($exeTop, 'compare');

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


?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/output.css?<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="md:p-4 sm:ml-64">
        <form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>?user=admin">
            <div class="mx-5 px-3 py-3" id="edit">
                <?php foreach ($exeTop as $b) { ?>
                    <div class="flex flex-col">
                        <label for="top<?php echo $b['top'] ?>" class="md:ml-3 mt-5">Top <?php echo $b['top'] ?></label>
                        <select id="top<?php echo $b['top'] ?>" name="top<?php echo $b['top'] ?>">
                        <option value="<?php echo $b['nama'] ?>"><?php echo $b['nama'] ?></option>
                        <?php foreach ($result2 as $x) {  ?>
                            <option value="<?php echo $x['nama'] ?>"><?php echo $x['nama'] ?></option>
                        <?php }?>
                        </select>
                    </div>
                <?php } ?>
                <input type="submit" name="edit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
            </div>
        </form>
    </div>
</body>