<?php

/**
 * Task 2
 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
 * Luas, Keliling dan Volume
 * p = 29, l = 16, t = 7
 */

// code..
require_once 'class_balok.php';

$balok1 = new Balok(29, 16, 7);


echo "Luas balok1 = " . $balok1->getLuas();
echo "<br> keliling balok1 = " . $balok1->getKeliling();
echo "<br> volume balok1 = " . $balok1->getVolume();
