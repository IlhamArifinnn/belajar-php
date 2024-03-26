<?php
// Nama class biasakan diawali dengan huruf besar
class Lingkaran
{
    private $jarijari; // property
    const PHI = 3.14; // konstanta

    function __construct($r)
    {
        $this->jarijari = $r;
    }

    function getLuas()
    {
        return self::PHI * $this->jarijari * $this->jarijari;
    }

    function getKeliling()
    {
        return 2 * self::PHI * $this->jarijari;
    }
}
