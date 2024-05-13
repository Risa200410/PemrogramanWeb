<?php

class Car
{
    private $model;
    private $color;

    // konstruktor class Car untuk menginisialisasi atribut
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    // mengembalikan nilai model
    public function getModel()
    {
        return $this->model;
    }

    // agar dapat mengubah warna 
    public function setColor($color)
    {
        $this->color = $color;
    }

    // mengembalikan nilai warna
    public function getColor()
    {
        return $this->color;
    }
}

// instansiasi objek
$car = new Car ("Toyota", "Blue");

// mencetak model dan warna mobil
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";

// mengubah warna mobil menjadi red/merah
$car->setColor("Red");

// mencetak warna setelah diubah
echo "Updated Color: " . $car->getColor() . "<br>";

?>