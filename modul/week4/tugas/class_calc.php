<?php
class Calculator
{
    // Properties
    public $bilangan1;
    public $bilangan2;

    // Constructor
    public function __construct($bilangan1, $bilangan2)
    {
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2;
    }

    // Method Pertambahan
    public function pertambahan()
    {
        return $this->bilangan1 + $this->bilangan2;
    }

    // Method Pengurangan
    public function pengurangan()
    {
        return $this->bilangan1 - $this->bilangan2;
    }

    // Method Pembagian
    public function pembagian()
    {
        if ($this->bilangan2 != 0) {
            return $this->bilangan1 / $this->bilangan2;
        } else {
            return "Error: Pembagian dengan nol tidak dapat dilakukan.";
        }
    }

    // Method Perkalian
    public function perkalian()
    {
        return $this->bilangan1 * $this->bilangan2;
    }
}

// Membuat objek Calculator
$calculator = new Calculator(10, 5);

// Memanggil method dan menampilkan hasilnya
echo "Pertambahan: " . $calculator->pertambahan() . "<br>";
echo "Pengurangan: " . $calculator->pengurangan() . "<br>";
echo "Pembagian: " . $calculator->pembagian() . "<br>";
echo "Perkalian: " . $calculator->perkalian() . "<br>";
