<?php


interface Shape
{
    public function calculateArea();
}

// implementasi class Shape
class Circle implements Shape
{
    private $radius;

    // konstruktor class Circle untuk inisialisasi radius
    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    // untuk menghitung luas
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// implementasi class Shape
class Rectangle implements Shape
{
    private $width;
    private $height;

    // konstruktor class Rectangle
    public function __construct($width, $height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    // method untuk menghitung luas
    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// mencetak luas 
function printArea(Shape $shape)
{
    echo "Area: " . $shape->calculateArea() . "<br>";
}

// membuat objek
$circle=new Circle(5);
$rectangle=new Rectangle(4, 6);

// mencetak luas lingkaran dan persegi panjang
printArea($circle);
printArea($rectangle);

?>