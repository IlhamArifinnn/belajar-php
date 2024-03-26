<?php

function hitungLuasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

function deteksiJenisSegitiga($base, $height)
{
    if ($base == $height) {
        return "Segitiga Sama Sisi";
    } elseif ($base == 0.5 * $height || $height == 0.5 * $base) {
        return "Segitiga Siku-siku";
    } else {
        return "Segitiga Biasa";
    }
}
