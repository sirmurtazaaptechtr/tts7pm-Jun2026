<?php
class Student {
    // Properties
    public $name;
    public $age;
    public $gender;

    // Method to display student data
    public function show_data() {
        echo "<hr><u>Name: " . $this->name . "</u><br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }
}
// Creating objects of the Student class
$student1 = new Student();
$student2 = new Student();
$student3 = new Student();

// Assigning values to the properties of each student object
$student1->name = "Muqaddar Shaheer";
$student1->age = 18;
$student1->gender = "Male";

$student2->name = "Abdul Latif";
$student2->age = 21;
$student2->gender = "Male";

$student3->name = "Muhammad Mustafa";
$student3->age = 13;
$student3->gender = "Male";

// Displaying the data of each student object
$student1->show_data();
$student2->show_data();
$student3->show_data();