<?php
class Animal
{
    protected $name; //protected agar dapat diakses dari class Animal maupun turunannya.

    // konstruktor class Animal
    public function __construct($name)
    {
        $this->name=$name;
    }

    // metode untuk hewan sedang makan
    public function eat()
    {
        echo $this->name . " is eating.<br>";
    }

    // metode jika hewan sedang tidur
    public function sleep()
    {
        echo $this->name . " is sleeping.<br>";
    }
}

// subclass/turunan class Animal
class Cat extends Animal
{
    // mencetak pesan "says meow!"
    public function meow()
    {
        echo $this->name . " says meow!<br>";
    }
}

// subclass Animal
class Dog extends Animal
{
    // mencetak pesan "says woof!"
    public function bark()
    {
        echo $this->name . " says woof!<br>";
    }
}

// instansiasi objek
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

// memanggil method eat() untuk cat, dan sleep() untuk dog
$cat->eat();
$dog->sleep();

// memanggil method meow() untuk cat, dan bark() untuk dog
$cat->meow();
$dog->bark();
?>