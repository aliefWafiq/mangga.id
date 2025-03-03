<?php
    $content = $_GET['content'];
    $sql_content = "SELECT manga.* FROM manga JOIN manage_content ON manga.id = manage_content.id_manga WHERE manage_content.content = '$content'";
    $list_content = $proses->list($sql_content);
?>
<div class="md:p-4 flex justify-end">
    <!-- main content -->
    <div class="container-fluid xl:w-4/5">

    <?php 

    if($content == 'banner'){
        include 'formManageContent/banner.php';
    }else if($content == 'card_rekom'){
        include 'formManageContent/cardRekom.php';
    }

    ?>    

    </div>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
    var glide01 = new Glide(".glide-01", {
        type: "slider",
        focusAt: "center",
        perView: 1,
        autoplay: 4000,
        animationDuration: 3000,
        gap: 0,
        classes: {
            activeNav: "[&>*]:bg-slate-700",
        },
    });

    glide01.mount();
</script>