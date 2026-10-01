<?php 
class Employee {
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function display() {
        echo "<hr><h2>Employee Details:</h2>";
        echo "<p>Employee Name: " . $this->name . "</p>";
        echo "<p>Employee Age: " . $this->age . "</p>";
        echo "<p>Employee Gender: " . $this->gender . "</p>";
    }
}

class PartTimeEmployee extends Employee {
    public $hourlyRate;   

    public function __construct($name, $age, $gender, $hourlyRate) {
        parent::__construct($name, $age, $gender);
        $this->hourlyRate = $hourlyRate;
    }   

    public function display() {
        parent::display();
        echo "<p>Hourly Rate: " . $this->hourlyRate . "</p>";
        echo "<p>Monthly Salary: " . ($this->hourlyRate * 8 * 20) . "</p>";
    }
}

class FullTimeEmployee extends Employee {
    public $monthlySalary;

    public function __construct($name, $age, $gender, $monthlySalary) {
        parent::__construct($name, $age, $gender);
        $this->monthlySalary = $monthlySalary;
    }

    public function display() {
        parent::display();
        echo "<p>Monthly Salary: " . $this->monthlySalary . "</p>";
    }
}

$e1 = new PartTimeEmployee("Mustafa", 13, "Male", 1500);
$e2 = new FullTimeEmployee("Shahwaiz", 19, "Male", 15000);

$e1->display();
$e2->display();