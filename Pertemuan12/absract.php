<?php

abstract class Shape
{
    // mengembalikan luas dari bentuk(shape) yang ada
    abstract public function calculateArea();
}

class Circle extends Shape //subclass dari class Shape
{
    // mendeklarasikan radius dengan level acces mdofier private
    private $radius;

    // kontruktor class Circle, untuk menginisialisasi $radius
    public function __construct($radius)
    {
        $this->radius=$radius;

    }

    // mengimplementasikan metode abstrak, menghitung luas lingkaran dengan pi
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// subclass dari class Shape
class Rectangle extends Shape
{
    private $width;
    private $height;

    // kontruktor class Rectangle
    public function __construct($width, $height)
    {
        $this->width=$width;
        $this->height= $height;
    }

    // untuk menghitung luas persegi panjang
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}


// membuat inntansi dari Circle dan Rectangle
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

// mencetak luas lingkaran dan persegi panjang
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Area of Rectangle: " . $rectangle->calculateArea() . "<br>";

?>