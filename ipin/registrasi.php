<?php
require_once "service/database.php";
session_start();

$register_message = "";

if (isset($_SESSION["is_login"])) {
    header("Location: dashboard.php");
}

if (isset($_POST["daftar"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hash_password = hash("sha256", $password);

    try {
        $sql = "INSERT INTO users (username, password) VALUES 
        ('$username', '$hash_password')";

        if ($db->query($sql)) {
            $register_message = "Daftar akun berhasil, silahkan login";
        } else {
            $register_message = "Daftar akun gagal, silahkan coba lagi";
        }
    } catch (mysqli_sql_exception) {
        $register_message = "Username sudah digunakan, silahkan ganti yang lain";
    }
    $db->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>

<body>
    <?php include "layout/header.html" ?>

    <h3>Daftar Akun</h3>
    <i>
        <?= $register_message ?>
    </i>
    <form method="post" action="registrasi.php">
        <input type="text" name="username" id="username" placeholder="username">
        <br>
        <br>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <br>
        <button type="submit" name="daftar">Daftar sekarang</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>