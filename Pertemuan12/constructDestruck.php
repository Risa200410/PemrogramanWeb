<?php
class Car
{
    private $brand;

    // kontruktor class Car, mencetak pesan "A A new car is created"
    public function __construct($brand)
    {
        echo "A new car is created. <br>";
    }

    // mengembalikan nilai brand
    public function getBrand()
    {
        return $this->brand;
    }

    // akan dipanggil otomatis jika objek Car tidak digunakan lagi, dan mencetak pesan.
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}

// intansi class Car
$car=new Car("Toyota");

// mencetak brand 
echo "Brand: " . $car->getBrand() . "<br>";
?>