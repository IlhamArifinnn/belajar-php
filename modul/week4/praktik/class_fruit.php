<?php
class Fruit
{
    // Property
    public $name;
    public $color;

    // Method
    function getName()
    {
        return $this->name;
    }

    function getColor()
    {
        return $this->color;
    }
}

// Object
$apple = new Fruit();
$apple->name = "Apple";
$apple->color = "Red";

$banana = new Fruit();
$banana->name = "Banana";
$banana->color = "Yellow";

echo $apple->getName();
echo $apple->getColor();
echo "<br><br>";
echo $banana->getName();
echo $banana->getColor();
