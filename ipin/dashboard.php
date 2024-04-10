<?php

session_start();

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman dashboard</title>
</head>

<body>

    <?php include "layout/header.html" ?>

    <h2>Selamat datang <?= $_SESSION["username"] ?></h2>

    <form action="dashboard.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>

    <?php include "layout/footer.html" ?>
</body>

</html>