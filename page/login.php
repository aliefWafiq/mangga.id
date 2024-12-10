<?php
require '../config/call.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = strip_tags($_POST['name']);
    $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);

    $sql = "SELECT * FROM user WHERE name = '$username'";
    $hasil = $proses->list($sql);

        foreach($hasil as $x){
        if (password_verify($password, $x['password'])) {
             $_SESSION['role'] = $x['role'];

             if ($x['role'] == 'admin') {
                echo "<script>window.location='direct.php?user=",$username,"&page=home';</script>";
             } else if ($x['role'] == 'user') {
                echo "<script>window.location='direct.php?user=",$username,"&page=home';</script>";
             }
        }
        else {
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
<div class="container">
        <!-- form -->
        <div class="form">
            <h1 class="my-10 text-center text-lg font-bold">Enter your account</h1>
            <div class="md:flex md:justify-center">
                <div class="mx-5 md:w-1/2 md:mx-auto">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"> 
                    <div class="relative">
                        <input type="text" required id="name" name="name" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="name" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Username</label>
                    </div>
                    <div class="relative">
                        <input type="password" required id="password" name="password" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="password" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Password</label>
                    </div>
                    <button type="submit" class="cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">Login</button>
                    </div>
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
