<div class="flex flex-col justify-center">
    <form action="menu/editContent.php?user=<?php echo $name ?>&content=card_recom" method="post" enctype="multipart/form-data" class="w-full px-20 flex flex-col flex-no-wrap">
        <?php foreach ($list_content as $x) { ?>
            <div class="flex items-center my-4">
                <div class="lg:w-48 lg:h-72 w-24 h-40 bg-black rounded-2xl">
                    <img src="../img/cover-manga/<?php echo $x['cover'] ?>" alt="" class="w-full rounded-2xl h-full" />
                </div>
                <div class="mx-5 w-1/2">
                    <div class="flex flex-col ">
                        <label for="manga">Manga:</label>
                        <input type="text" class="manga w-full rounded-lg" name="manga[]" autocomplete="off" value="<?php echo isset($x['nama']) ? $x['nama'] : ''; ?>">
                    </div>
                    <input type="number" value="<?php echo isset($x['id']) ? $x['id'] : ''; ?>" class="hidden" name="id[]">

                    <div class="my-3">
                        <button type="button" onclick="confirmDelete(<?php echo $x['id'] ?>)" class="px-5 py-2 text-white font-semibold rounded-lg bg-red-600">Delete</button>
                    </div>
                    <script>
                        function confirmDelete(id) {
                            Swal.fire({
                                title: "Are you sure?",
                                text: "You won't be able to revert this!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#3085d6",
                                cancelButtonColor: "#d33",
                                confirmButtonText: "Yes, delete it!"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Redirect ke halaman delete dengan ID yang sesuai
                                    window.location.href = `default.php?user=<?php echo $name ?>&acts=delete&source=manageContent&manga=${id}&content=card_recom`;
                                }
                            });
                        }
                    </script>
                </div>
            </div>
        <?php } ?>
        <div id="newCard"></div>
        <button type="button" onclick="addCard()" class="my-5 border border-black rounded-lg py-3">Tambahkan Card +</button>
        <div>
            <input type="submit" name="submit" class="mt-3 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
        </div>
    </form>
</div>