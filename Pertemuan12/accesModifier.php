<?php
class Animal
{
    public $name;
    public $age;
    public $color;

    // dipanggil saat membuat instansi baru, menginisiasi atribut dengan nilai
    public function __construct($name, $age, $color)
    {
        $this->name=$name;
        $this->age=$age;
        $this->color=$color;
    }

    // untuk mengembalikan nama hewan
    public function getName()
    {
        return $this->name;
    }

    // untuk mengembalikan umur hewan
    protected function getAge()
    {
        return $this->age;
    }

    // untuk mengembalikan warna hewan
    private function getColor()
    {
        return $this->color;
    }
}

// instansiasi class Animal dengan nama dog
$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->name . "<br>";
echo "Age: " . $animal->getAge() . "<br>";
echo "Color: " . $animal->getColor() . "<br>";
?>