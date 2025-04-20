<?php
include '../config/call.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $level = 1;

    $stmt = $proses->getDb()->prepare("SELECT name FROM user WHERE ? = name");
    $param = array($_POST['name']);
    $stmt->execute($param);


    if ($stmt->rowCount() > 0) {
        echo "Sorry, username already exists";
    } else {
        $sql2 = 'INSERT INTO user (name, password, email, level) VALUES (:name, :hash, :email, :level)';
        $stmt = $proses->getDb()->prepare($sql2);
        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':hash', $hash);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':level', $level);
        if($stmt->execute()){
            echo "<script>window.location='direct.php?user=",$username,"&page=home';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/output.css?<?= time() ?>">
    <title>Regis</title>
    <link rel="stylesheet" href='../files/bower_components/sweetalert/css/sweetalert2.min.css' media="screen" />
</head>

<body>
    <div class="container-fluid h-screen w-full">
        <!-- form -->
        <div class="form flex md:flex-row flex-col justify-center items-center h-full w-full">
            <div class="flex flex-col items-center md:items-end justify-center w-full md:w-1/2 px-10 text-center md:text-start">
                <h1 class="md:text-5xl text-4xl font-bold md:w-1/2">Daftar guild dulu king</h1>
                <p class="md:w-1/2 mt-3"> “Do not change the world to suit your desires; first, change yourself” – Descartes, Discourse on Method</p>
            </div>
            <div class="w-full md:w-1/2 mt-10 md:mt-0 flex justify-center md:justify-start">
                <form class="md:w-1/2" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <div class="relative">
                        <input type="text" required id="username" name="name" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="username" class="labelInput">Username</label>
                    </div>
                    <div class="relative">
                        <input type="text" required id="email" name="email" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="email" class="labelInput">Email</label>
                    </div>
                    <div class="relative">
                        <input type="password" required id="password" name="password" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="password" class="labelInput">Password</label>
                    </div>
                    <input type="submit" name="submit" class="cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
                    <a href="login.php" class="mx-5 text-third font-semibold underline">Udah punya akun</a>
                </form>
            </div>
        </div>
    </div>

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
