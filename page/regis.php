<?php
include '../config/call.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_VALIDATE_INT);
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $proses->getDb()->prepare("SELECT name FROM user WHERE ? = name");
    $param = array($_POST['name']);
    $stmt->execute($param);


    if ($stmt->rowCount() > 0) {
        echo "Sorry, username already exists";
    } else {
        $sql2 = 'INSERT INTO user (name, password, email) VALUES (:name, :hash, :email)';
        $stmt = $proses->getDb()->prepare($sql2);
        $stmt->bindParam(':name', $username);
        $stmt->bindParam(':hash', $hash);
        $stmt->bindParam(':email', $email);
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
    <div class="container">
        <!-- form -->
        <div class="form">
            <h1 class="my-10 text-center text-lg font-bold">please complete the registration</h1>
            <div class="md:flex md:justify-center">
                <form class="mx-5 md:w-1/2 md:mx-auto" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <div class="relative">
                        <input type="text" required id="username" name="name" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="username" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Username</label>
                    </div>
                    <div class="relative">
                        <input type="text" required id="email" name="email" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="email" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Email</label>
                    </div>
                    <div class="relative">
                        <input type="password" required id="password" name="password" placeholder="" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-600 appearance-none focus:ring-1 peer"><br>
                        <label for="password" class="absolute text-sm top-3 bg-white px-3 start-2.5 -translate-y-4 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto duration-300 transform origin-[0]">Password</label>
                    </div>
                    <input type="submit" name="submit" class="cursor-pointer border bg-transparent px-3 py-2 rounded-lg hover:text-white border-black hover:bg-sky-500 hover:border-0">
                </form>
            </div>
        </div>
    </div>

    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>