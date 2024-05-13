<?php
interface Shape
{
    // method calculateArea untuk mengimplemenatasikan Shape
    public function calculateArea();
}

// untuk mengimplementasikan shape
interface Color
{
    public function getColor();
}
// 2 metoh diatas terpisah karena menangani fungsionalitas yang berbeda

// class untuk mengimplementasikan 2 method diatas
class Circle implements Shape, Color
{
    private $radius; //menyimpan radius dalam acces modifier private
    private $color; // menyimpan color/warna

    // konstruktor class Circle untuk menginisialisasi radius dan color
    public function __construct($radius, $color)
    {
        $this->radius=$radius;
        $this->color=$color;
    }

    // untuk mencari luas Circle/lingkaran
    public function calculateArea()
    {
        return pi()*pow($this->radius, 2);
    }

    // untuk mengembalikan nilai warna
    public function getColor()
    {
        return $this->color;
    }
}

// membuat objek
$circle = new Circle(5, "Blue");

// mencetak luas dan warna lingkaran
echo "Area of Circle: " . $circle->calculateArea() . "<br>";
echo "Color of Circle: " . $circle->getColor() . "<br>";
?>