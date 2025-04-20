<?php
require '../config/call.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strip_tags($_POST['name']);
    $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);

    $sql = "SELECT * FROM user WHERE name = '$username'";
    $hasil = $proses->list($sql);

    foreach ($hasil as $x) {
        if (password_verify($password, $x['password'])) {
            $_SESSION['role'] = $x['role'];

            if ($x['role'] == 'admin') {
                echo "<script>window.location='direct.php?user=", $username, "&page=home';</script>";
            } else if ($x['role'] == 'user') {
                echo "<script>window.location='direct.php?user=", $username, "&page=home';</script>";
            }
        } else {
            $error_message = "Username or password incorrect.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../src/output.css?<?= time() ?>">
</head>

<body>
    <div class="container-fluid h-screen w-full">
        <!-- form -->
        <div class="form flex md:flex-row flex-col justify-center items-center h-full w-full">
            <div class="flex flex-col items-center md:items-end justify-center w-full md:w-1/2 px-10 text-center md:text-start">
                <h1 class="md:text-5xl text-4xl font-bold md:w-1/2">Masukkan akun wahai user</h1>
                <p class="md:w-1/2 mt-3">“A Genius Lives Only One Story Above Madness.” – Arthur Schopenhauer</p>
            </div>
            <div class="w-full md:w-1/2 mt-10 md:mt-0 flex justify-center md:justify-start">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="md:w-1/2">
                    <div class="relative">
                        <input type="text" required id="name" name="name" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="name" class="labelInput">Username</label>
                    </div>
                    <div class="relative">
                        <input type="password" required id="password" name="password" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="password" class="labelInput">Password</label>
                    </div>
                    <button type="submit" class="cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">Login</button>
                    <a href="regis.php" class="mx-5 text-third font-semibold underline">Belum punya akun</a>
                </form>
            </div>
        </div>
        <?php
        if (isset($error_message)) {
            echo '<p class="text-red-500 mt-2 text-center font-semibold">' . $error_message . '</p>';
        }
        ?>
    </div>
</body>

</html>
