<?php
// Abstract base class
abstract class Car {
  public $make;
  public $model;

  
  // Non-abstract method
  public function __construct($make, $model) {
      $this->make = $make;
      $this->model = $model;
  }
  
  // Abstract method - forces child classes to implement it
  abstract public function intro();
}

class Suzuki extends Car {
  public function intro() {
    echo "<p>I am a $this->make $this->model.</p>";
  }
}

$c1 = new Suzuki("Suzuki", "Swift");
$c2 = new Suzuki("Suzuki", "WaganR");

$c1->intro();
$c2->intro();


abstract class Animal {
  public $name;

  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function makeSound();
}

class Dog extends Animal {
  public function makeSound() {
    echo "<p>$this->name says Woof!</p>";
  }
}

class Cat extends Animal {
  public function makeSound() {
    echo "<p>$this->name says Meow!</p>";
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