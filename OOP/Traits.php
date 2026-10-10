<?php
trait AnimalTrait {
    public function eat() {
        echo "<p>{$this->name} is eating food.</p>";
    }
    public function sleep() {
        echo "<p>{$this->name} is sleeping.</p>";
    }
    public function play() {
        echo "<p>{$this->name} is playing.</p>";
    }

    abstract public function makeSound();
}

class Horse {
    use AnimalTrait;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }   

    public function makeSound() {
        echo "<p>{$this->name} is neighing.</p>";
    }        
}

class Cow {
    use AnimalTrait;

    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function makeSound() {
        echo "<p>{$this->name} is mooing.</p>";
    }        
}

$h1 = new Horse("Spirit");
$h1->eat();
$h1->sleep();
$h1->play();
$h1->makeSound();

echo "<hr>";

$c1 = new Cow("Bessie");
$c1->eat();
$c1->sleep();
$c1->play();
$c1->makeSound();
?>