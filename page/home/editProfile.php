<?php
$select = "SELECT * FROM user WHERE name = '$name'";
$result = $proses->list($select);
?>

<div class="md:p-4 sm:ml-64 md:mt-10">
    <!-- error -->
    <form action="menu/editProfile.php?user=<?php echo $name ?>" method="post" enctype="multipart/form-data">
        <div class="mx-5 ">
            <?php foreach ($result as $x) { ?>
                <div class="relative">
                    <input type="text" value="<?php echo $x['name'];  ?>" id="username" name="nama" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="username" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Username</label>
                </div>
                <div class="relative">
                    <input type="text" value="<?php echo $x['email']; ?>" id="email" name="email" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="email" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Email</label>
                </div>
                <div class="relative">
                    <input type="password" value="<?php echo $x['password']; ?>" id="password" name="password" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                    <label for="password" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Password</label>
                </div>
                <div class="relative">
                    <textarea maxlength="200" id="bio" name="bio" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border h-32 border-gray-600 appearance-none focus:ring-1 peer"><?php echo $x['bio']; ?></textarea><br>
                    <label for="bio" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Bio</label>
                </div>
                <div class="form-group">
                    <input type="file" id="uploadfile" name="uploadfile">
                    <input type="hidden" name="existing_file" value="<?php echo $x['foto']; ?>">
                </div>
                <input type="submit" name="submit" class="mt-5 cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
            <?php } ?>
        </div>
    </form>
</div>

<script src="../../node_modules/flowbite/dist/flowbite.min.js"></script>
<script>
    <?php foreach ($result as $x) { ?>
        const fileInput = document.querySelector('input[type="file"]');

        const myFile = new File(['foto'], '<?php echo $x['foto'] ?>', {
            type: 'text/plain',
        });

        // Now let's create a DataTransfer to get a FileList
        const dataTransfer = new DataTransfer();
        dataTransfer.items.add(myFile);
        fileInput.files = dataTransfer.files;
    <?php } ?>
</script>