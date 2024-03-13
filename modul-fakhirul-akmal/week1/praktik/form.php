<?php
include_once 'atas.php';
?>

<h1>Welcome Home!</h1>

<div class="container my-5">
    <h1 class="text-center mb-4">Triangle Area Calculator</h1>
    <form action="form.php" method="post">
        <div class="form-floating mb-3">
            <label for="base">Base</label>
            <input type="number" class="form-control" id="base" name="base" required>
        </div>
        <div class="form-floating mb-3">
            <label for="height">Height</label>
            <input type="number" class="form-control" id="height" name="height" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
    </form>
</div>


<?php
require_once 'libfungsi.php'; ?>


<?php
if (isset($_POST['submit'])) {
    $base = $_POST['base'];
    $height = $_POST['height'];
    $area = hitungLuasSegitiga($base, $height);
    $type = deteksiJenisSegitiga($base, $height);
?>
    <div class="mt-4 mb-3">
        <h2>Hasil:</h2>
        <p>Alas: <?php echo $base ?> cm</p>
        <p>Tinggi: <?php echo $height ?> cm</p>
        <p>Luas Segitiga: <?php echo $area ?> cm</p>
        <p>Jenis Segitiga: <?php echo $type ?></p>
    </div>
<?php
}
?>

<?php
include_once 'bawah.php';
?>