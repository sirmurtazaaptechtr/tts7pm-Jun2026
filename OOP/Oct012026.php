<?php
class Fruit {
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function display() {
        echo "<p>This fruit is a " . $this->name . " and its color is " . $this->color . ".</p>";
    }

    // function __destruct() {
    //     echo "<p>The End.</p><hr>";
    // }

}

$f1 = new Fruit("Apple", "Red");
$f2 = new Fruit("Banana", "Yellow");
$f3 = new Fruit("Grapes", "Purple");

$f1->setColor("Green");
$f3->setColor("Red");

$f1->display();
$f2->display();
$f3->display();