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
        } else if ($content == 'top_list') {
            include 'formManageContent/editTop.php';
        } else if ($content == 'card_recom') {
            include 'formManageContent/cardRekom.php';
        } else if ($content == 'card_action') {
            include 'formManageContent/cardAction.php';
        } else if ($content == 'card_romance') {
            include 'formManageContent/cardRomance.php';
        }

        ?>

    </div>
</div>

<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>
<script src="../index.js"></script>
<script>
    let manga = [<?php echo $stringManga; ?>]

    let mangaElements = document.getElementsByClassName("manga")
    for (let i = 0; i < mangaElements.length; i++) {
        autocomplete(mangaElements[i], manga);
    }

    let inputBaru = document.getElementById("inputBaru")
    inputBaru.addEventListener("input", function() {
        autocomplete(inputBaru, manga)
    })

    function addBanner() {
        Swal.fire({
            title: "Tambah Banner",
            html: `
        <form id="form-add-banner" action="menu/addContent.php?user=<?php echo $name ?>&content=<?php echo $content ?>" method="POST">
            <div class="mb-3 flex flex-col">
                <label for="judul-banner" class="form-label text-start mb-2">Judul Manga</label>
                <input type="text" class="form-control rounded-lg manga" autocomplete="off" id="inputBaru" name="manga">
            </div>
            <button type="submit" class="bg-green-500 text-white px-5 py-3 rounded-lg">Simpan</button>
        </form>
        `,
            showCancelButton: true,
            showConfirmButton: false,
            cancelButtonColor: "#d33"
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("form-add-banner");
                const formData = new FormData(form);
                fetch(form.action, {
                        method: form.method,
                        body: formData,
                    })
                    .then((response) => response.json())
                    .then((data) => console.log(data))
                    .catch((error) => console.error(error));
            }
        });
    }

    function addCard() {
        Swal.fire({
            title: "Tambah Card",
            html: `
        <form id="form-add-card" action="menu/addContent.php?user=<?php echo $name ?>&content=<?php echo $content ?>" method="POST">
            <div class="mb-3 flex flex-col">
                <label for="judul-card" class="form-label text-start mb-2">Judul Manga</label>
                <input type="text" class="form-control rounded-lg manga" autocomplete="off" id="inputBaru" name="manga">
            </div>
            <button type="submit" class="bg-green-500 text-white px-5 py-3 rounded-lg">Simpan</button>
        </form>
        `,
            showCancelButton: true,
            showConfirmButton: false,
            showCancelButton: true,
            customClass: {
                confirmButton: 'bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700',
                cancelButton: 'bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700 ml-2'
            },
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("form-add-card");
                const formData = new FormData(form);
                fetch(form.action, {
                        method: form.method,
                        body: formData,
                    })
                    .then((response) => response.json())
                    .then((data) => console.log(data))
                    .catch((error) => console.error(error));
            }
        });
    }

    function deleteRow(button) {
        button.parentElement.remove();
    }
</script>
