<?php
// Define the interface
interface IAnimal {
    public function makeSound();
}

class Dog implements IAnimal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        echo "<p>{$this->name} says Woof!</p>";
    }
}

class Cat implements IAnimal {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        echo "<p>{$this->name} says Meow!</p>";
    }
}


$d1 = new Dog("Buddy");
$d2 = new Dog("Max");
$c1 = new Cat("Kitty");
$c2 = new Cat("Fluffy");

$d1->makeSound();
$d2->makeSound();
$c1->makeSound();
$c2->makeSound();   
