<?php
include 'menu/searchAutoComplete.php';

$content = $_GET['content'];
$sql_content = "SELECT manga.* FROM manga JOIN manage_content ON manga.id = manage_content.id_manga WHERE manage_content.content = '$content'";
$list_content = $proses->list($sql_content);
?>
<div class="md:p-4 flex justify-end ">
    <!-- main content -->
    <div class="container-fluid xl:w-4/5">

        <?php

        if ($content == 'banner') {
            include 'formManageContent/banner.php';
        } else if ($content == 'card_rekom') {
            include 'formManageContent/cardRekom.php';
        }

        ?>

    </div>
</div>

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="../index.js"></script>
<script>
    //  var glide01 = new Glide(".glide-01", {
    //      type: "slider",
    //      focusAt: "center",
    //      perView: 1,
    //      autoplay: 4000,
    //      animationDuration: 3000,
    //      gap: 0,
    //      classes: {
    //          activeNav: "[&>*]:bg-slate-700",
    //      },
    //  });

    // glide01.mount();

    let manga = [<?php echo $stringManga; ?>]

    let mangaElements = document.getElementsByClassName("manga");
    for (let i = 0; i < mangaElements.length; i++) {
        autocomplete(mangaElements[i], manga);
    }

    <?php //foreach($list_content as $x){ ?>
   
    <?php //} ?>

    function addBanner() {
        let container = document.getElementById("newBanner");
        let div = document.createElement("div");
        div.innerHTML = `
            <div class="flex flex-col mt-3 mb-4 w-full">
                <label for="manga">Manga:</label>
                <div class="flex w-full">
                    <div class="w-1/2">
                        <input type="text" class="manga w-full" name="manga" autocomplete="off">
                    </div>
                    <button type="button" onclick="confirmDelete()">Delete</button>
                </div>
            </div>
    `;
        container.appendChild(div);

        let mangaElements = document.getElementsByClassName("manga");
        for (let i = 0; i < mangaElements.length; i++) {
            autocomplete(mangaElements[i], manga);
        }
    }

    function deleteRow(button) {
        button.parentElement.remove();
    }
</script>