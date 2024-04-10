<?php
require_once "service/database.php";

$login_message = "";

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        header("location:dashboard.php");
    } else {
        $login_message =  "Akun tidak ditemukan";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php include "layout/header.html" ?>

    <h3>Login Akun</h3>

    <i>
        <?= $login_message ?>
    </i>
    <form method="post" action="login.php">
        <input type="text" name="username" id="username" placeholder="username">
        <br>
        <br>
        <input type="password" name="password" id="password" placeholder="password">
        <br>
        <br>
        <button type="submit" name="login">Login sekarang</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>