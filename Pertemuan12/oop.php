<?php
class Car 
{
    public $brand; // membuat atribut brand

    // metode untuk mencetak pesan mulai
    public function startEngine()
    {
        echo "Engine started!";
    }
}

// membuat objek car1 dengan brand Toyota
$car1 = new Car();
$car1->brand="Toyota";

// membuat objek car2 dengan brand Honda
$car2 = new Car();
$car2->brand="Honda";

// memanggil metode startEngine untuk car1
$car1-> startEngine();
// mencetak brand pada objek car2
echo $car2->brand;
?>