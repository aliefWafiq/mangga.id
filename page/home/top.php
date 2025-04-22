<div class="md:p-4 sm:ml-64 h-full">
    <div class=" overflow-hidden flex min-w-full justify-center">
        <div class="flex flex-col">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-300 rounded-lg">
                    <table id="myTable" class="min-w-full">
                        <thead class="text-black border-b-2">
                            <tr>
                                <th scope="col" class="font-medium text-base py-3 px-6 capitalize">No.</th>
                                <th scope="col" class="w-1/3 font-medium text-base md:px-32 px-5 py-4">Manga</th>
                                <th scope="col" class="w-1/3 font-medium text-base md:px-32 px-5 py-4">Author</th>
                                <th scope="col" class="w-1/3 font-medium text-base md:px-32 px-5 py-4">Rating</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 text-sm font-medium text-gray-500">
                            <?php foreach ($top as $x) { ?>
                                <tr>
                                    <th scope="col" class="w-1/3 font-medium text-base md:px-32 px-5 py-4"><?php echo $x['top'] ?></th>
                                    <th scope="col" class="w-1/3 font-medium text-base md:px-20 px-5 py-4"><?php if (strlen($x['nama']) >= 19) {
                                                                                                                echo $judul = substr($x['nama'], 0, 18) . '...';
                                                                                                            } else {
                                                                                                                echo $x['nama'];
                                                                                                            }  ?></th>
                                    <th scope="col" class="w-1/3 font-medium text-base md:px-20 px-5 py-4"><?php echo $x['komikus']; ?></th>
                                    <th scope="col" class="w-1/3 font-medium text-base md:px-32 px-5 py-4"><?php echo $x['rating']; ?></th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
