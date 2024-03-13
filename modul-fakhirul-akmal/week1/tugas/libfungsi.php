<?php
function kelulusan($rerata)
{
    if ($rerata >= 55) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function grade($rerata)
{
    if ($rerata <= 100 && $rerata > 84) {
        return "A";
    } elseif ($rerata <= 84 && $rerata > 69) {
        return "B";
    } elseif ($rerata <= 69 && $rerata > 55) {
        return "C";
    } elseif ($rerata <= 55 && $rerata > 35) {
        return "D";
    } elseif ($rerata <= 35) {
        return "E";
    } else {
        return "I";
    }
}

function predikat($rerata)
{
    if ($rerata >= 85 && $rerata <= 100) {
        return "Sangat Memuaskan";
    } elseif ($rerata >= 75 && $rerata < 85) {
        return "Memuaskan";
    } elseif ($rerata >= 65 && $rerata < 75) {
        return "Cukup";
    } elseif ($rerata >= 55 && $rerata < 65) {
        return "Kurang";
    } else {
        return "Sangat Kurang";
    }
}
