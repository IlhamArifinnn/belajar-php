<?php
// Sertakan file dbkoneksi.php
require 'dbkoneksi.php';

// Cek apakah ID paramedik ada dalam request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus paramedik berdasarkan ID
    $sql = "DELETE FROM paramedik WHERE id = :id";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':id', $id);

    // Eksekusi query
    $stmt->execute();

    // Redirect kembali ke halaman data_paramedik.php
    header("Location: data_paramedik.php");
} else {
    // Jika tidak ada ID dalam request, redirect ke halaman data_paramedik.php
    header("Location: data_paramedik.php");
}
