<?php
// if (empty($_SESSION['role'])) {
// } else {
//     header('location:login.php?logindulu');
// }
// require '../../config/call.php';
// session_start();

// $name = $_GET['user'];

$select2 = "SELECT * FROM manga";
$result2 = $proses->list($select2);

$selectTop = "SELECT * FROM manga WHERE top != 'none'";
$exeTop = $proses->list($selectTop);

function compare($a, $b)
{
    return $a['top'] - $b['top'];
}

usort($exeTop, 'compare');
?>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>?user=admin">
    <div class="mx-5 px-20 py-3" id="edit">
        <?php foreach ($exeTop as $b) { ?>
            <div class="flex items-center mb-10">
                <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black rounded-2xl">
                    <img src="../img/cover-manga/<?php echo $b['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                </div>

                <div class="mx-5 w-1/2">
                    <div class="flex flex-col ">
                        <label for="top<?php echo $b['top'] ?>" class="text-xl my-3">Top <?php echo $b['top'] ?></label>
                        <select id="top<?php echo $b['top'] ?>" name="top<?php echo $b['top'] ?>">
                            <option value="<?php echo $b['nama'] ?>"><?php echo $b['nama'] ?></option>
                            <?php foreach ($result2 as $x) { ?>
                                <option value="<?php echo $x['nama'] ?>"><?php echo $x['nama'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <input type="number" value="<?php echo isset($b['id']) ? $b['id'] : ''; ?>" class="hidden" name="id[]">

                    <div>
                        <button type="submit" name="edit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">Edit</button>
                    </div>
                </div>
            </div>
        <?php } ?>
</form>
