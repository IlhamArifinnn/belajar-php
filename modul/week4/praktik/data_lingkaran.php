<?php
// panggil class_lingkaran dengan require_once
require_once "class_lingkaran.php";

echo "Nilai PHI = " . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran 1 = " . $lingkaran1->getLuas();
echo "<br/>Luas Lingkaran 2 = " . $lingkaran2->getLuas();

echo "<br/>Keliling Lingkaran 1 = " . $lingkaran1->getKeliling();
echo "<br/>Keliling Lingkaran 2 = " . $lingkaran2->getKeliling();
