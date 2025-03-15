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

    // buat input form

    function addBanner() {
        Swal.fire({
            title: "Tambah Banner",
            html: `
            <form id="form-add-banner">
                <div class="mb-3">
                    <label for="judul-banner" class="form-label">Judul Banner</label>
                    <input type="text" class="form-control" id="judul-banner" name="judul-banner">
                </div>
            </form>
        `,
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Simpan",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.isConfirmed) {
                const form = document.getElementById("form-add-banner");
                const formData = new FormData(form);
                fetch("default.php?user=<?php echo $name ?>&acts=add&source=manageContent&manga=${id}&content=banner", {
                        method: "POST",
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