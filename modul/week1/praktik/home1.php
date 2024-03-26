<?php
include_once 'atas.php';
?>

<h1>Welcome Home!</h1>



<div class="container mb-5 p-5">
    <h1 class="text-center mb-4">Triangle Area Calculator</h1>
    <form action="" method="post">
        <div class="form-floating mb-3">
            <label for="base">Base (in cm)</label>
            <input type="number" class="form-control" id="base" name="base" required>
        </div>
        <div class="form-floating mb-3">
            <label for="height">Height (in cm)</label>
            <input type="number" class="form-control" id="height" name="height" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Calculate Area</button>
    </form>
</div>

<?php
include_once 'bawah.php';
?>