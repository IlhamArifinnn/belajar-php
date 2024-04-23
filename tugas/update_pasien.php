<?php
//1. Sertakan koneksi database
require 'dbkoneksi.php';

// Periksa apakah parameter id telah disertakan dalam URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk mendapatkan data pasien berdasarkan ID
    $query = $dbh->prepare('SELECT * FROM pasien WHERE id = ?');
    $query->execute([$id]);
    $pasien = $query->fetch(PDO::FETCH_ASSOC);

    // Periksa apakah pasien dengan ID yang diberikan ditemukan
    if (!$pasien) {
        echo "Pasien tidak ditemukan.";
        exit;
    }
} else {
    echo "ID Pasien tidak disediakan.";
    exit;
}

// Periksa apakah formulir telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data yang dikirimkan melalui formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kelurahan_id = $_POST['kelurahan_id'];

    // Query untuk mengupdate data pasien
    $query = $dbh->prepare('UPDATE pasien SET kode = ?, nama = ?, tmp_lahir = ?, tgl_lahir = ?, gender = ?, email = ?, alamat = ?, kelurahan_id = ? WHERE id = ?');
    $result = $query->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan_id, $id]);

    // Periksa apakah pembaruan berhasil
    if ($result) {
        // Redirect ke halaman data pasien setelah update
        header("Location: data_pasien.php");
        exit;
    } else {
        echo "Gagal memperbarui data pasien.";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Update Pasien</title>
</head>

<body>
    <div class="container mt-1">
        <h2 class="text-center mb-3">Update Data Pasien</h2>
        <form method="POST">
            <div class="form-group row">
                <label for="kode" class="col-4 col-form-label">Kode:</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $pasien['kode']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama:</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $pasien['nama']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir:</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?php echo $pasien['tmp_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir:</label>
                <div class="col-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $pasien['tgl_lahir']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-4 col-form-label">Jenis Kelamin:</label>
                <div class="col-8">
                    <select class="form-control" id="gender" name="gender">
                        <option value="L" <?php if ($pasien['gender'] == 'L') echo 'selected'; ?>>Laki-Laki</option>
                        <option value="P" <?php if ($pasien['gender'] == 'P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email:</label>
                <div class="col-8">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $pasien['email']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-4 col-form-label">Alamat:</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $pasien['alamat']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="kelurahan_id" class="col-4 col-form-label">Kelurahan ID:</label>
                <div class="col-8">
                    <input type="text" class="form-control" id="kelurahan_id" name="kelurahan_id" value="<?php echo $pasien['kelurahan_id']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>