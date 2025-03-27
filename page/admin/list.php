<?php

$name = $_GET['user'];
$username = 'SELECT * FROM user WHERE name = :name';
$param = [':name' => $name];
$hasil = $proses->show($username, $param);
?>
<div class="md:p-4 sm:ml-64 md:mt-5">
    <div class="mx-4">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-16 py-3">
                            <span class="sr-only">Image</span>
                        </th>
                        <th scope="col" class="px-6 py-3 text-base text-center">
                            Manga
                        </th>
                        <th scope="col" class="px-6 py-3 text-base text-center">
                            Author
                        </th>
                        <th scope="col" class="px-6 py-3 text-base text-center">
                            Chapter
                        </th>
                        <th scope="col" class="px-6 py-3 text-base text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <?php foreach ($hasil2 as $x) { ?>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="p-4">
                                <img src="../img/cover-manga/<?php echo $x['cover'] ?>" class="w-16 md:w-32 max-w-full max-h-full rounded-xl" alt="cover">
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 text-xl dark:text-white text-center">
                                <?php echo $x['nama'] ?>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 text-xl dark:text-white text-center">
                                <?php echo $x['komikus'] ?>
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-900 text-xl dark:text-white text-center">
                                <?php echo $x['chapter'] ?>
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex text-xl">
                                    <a href="default.php?user=<?php echo $name ?>&manga=<?php echo $x['id'] ?>&acts=panel" class="px-2 mx-1 py-1 text-white font-semibold rounded-xl bg-blue-500">Panel</a> 
                                    <a href="default.php?user=<?php echo $name ?>&manga=<?php echo $x['id'] ?>&acts=edit" class="px-2 mx-1 py-1 text-white font-semibold rounded-xl bg-yellow-500">edit</a>
                                    <a href="default.php?user=<?php echo $name ?>&manga=<?php echo $x['id'] ?>&acts=delete&source=list" class="px-2 mx-1 py-1 text-white font-semibold rounded-xl bg-red-700">delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>