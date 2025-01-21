<?php
$idManga = $_GET['manga'];
$select2 = "SELECT * FROM manga WHERE id = '$idManga'";
$result2 = $proses->list($select2);
?>

<div class="md:p-4 sm:ml-64 md:mt-10">
    <form action="menu/addPanel.php?user=<?php echo $name ?>&manga=<?php echo $idManga ?>" method="post" enctype="multipart/form-data">
        <div class="mx-5 p-6">
            <div class="relative">
                <input type="number" id="chapter" name="chapter" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                <label for="chapter" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Chapter</label>
            </div>

            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-lg text-gray-500 font-semibold dark:text-gray-400">max upload 20 file!!</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" name="uploadfile[]" multiple />
                </label>
            </div>
            <input type="submit" name="edit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
        </div>
    </form>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>