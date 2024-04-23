<?php
// Sertakan file dbkoneksi.php
require 'dbkoneksi.php';

// Cek apakah ID pasien ada dalam request
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus pasien berdasarkan ID
    $sql = "DELETE FROM periksa WHERE id = :id";

    // Prepare statement
    $stmt = $dbh->prepare($sql);

    // Bind parameter
    $stmt->bindParam(':id', $id);

    // Eksekusi query
    $stmt->execute();

    // Redirect kembali ke halaman dataperiksa.php
    header("Location: data_periksa.php");
} else {
    // Jika tidak ada ID dalam request, redirect ke halaman data_periksa.php
    header("Location: data_periksa.php");
}
?>