<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
// PHP Associative Arrays

$student = array("name" => "Maria", "dob" => "14-Jan-2008", "gender" => "female");
pr($student);

// OR
$student = [
    "name" => "Maria", 
    "dob" => "14-Jan-2008", 
    "gender" => "female"
    ];
pr($student);

// Access Array Item
echo "<p>" . $student["name"] . "</p>";
echo "<p>" . $student["dob"] . "</p>";
echo "<p>" . $student["gender"] . "</p>";

pr($student);

foreach($student as $key => $value) {
    echo "<p><b>$key:</b> $value</p>";    
}

// Change Value of Array Item
$student["name"] = "Maria Mateen";
pr($student);

// Add Item to Associative Arrays
$student["area"] = "Kashmir Road";
pr($student);

// Add Multiple Items to Associative Arrays
$student += ["email" => "mariaabdulmateen@gmail.com", "phone" => "0321-1234567"];
pr($student);

// Remove Item From an Associative Array
unset($student["gender"]);
pr($student);

// PHP array_diff() Function
$cars = ["brand" => "Ford", "model" => "Mustang", "year" => 1964];
pr($cars);

$newarray = array_diff($cars, ["Mustang", 1964]);
pr($newarray);

// PHP Sorting Arrays
pr($student);

// ascending order, according to the value
asort($student);
pr($student);

// decending order, according to the value
arsort($student);
pr($student);

// ascending order, according to the key
ksort($student);
pr($student);

// decending order, according to the key
krsort($student);
pr($student);

// PHP Multidimensional Arrays
// Indexed + Associative
$students = [
    ["name" => "Owais", "dob" => "14-Apr-2009", "gender" => "male"],
    ["name" => "Hamza", "dob" => "20-Nov-2010", "gender" => "male"],
    ["name" => "Mohammad", "dob" => "15-Aug-2011", "gender" => "male"],
    ["name" => "Yasir", "dob" => "12-Feb-2006", "gender" => "male"],
    ["name" => "Shawaiz", "dob" => "12-May-2007", "gender" => "male"],
    ["name" => "Mohib", "dob" => "03-Aug-2007", "gender" => "male"],
    ["name" => "Rafil", "dob" => "24-Sep-2003", "gender" => "male"],
    ["name" => "Latif", "dob" => "07-Jun-2005", "gender" => "male"],
    ["name" => "Mustafa", "dob" => "21-Jan-2011", "gender" => "male"],
    ["name" => "Muqaddar", "dob" => "29-Sep-2009", "gender" => "male"],
    ["name" => "Khazeena", "dob" => "17-May-2008", "gender" => "female"],
    ["name" => "Maria", "dob" => "14-Jan-2008", "gender" => "female"],
];

pr($students);

// Associative + Associative
$students = [
    "Student1686606" => ["name" => "Owais", "dob" => "14-Apr-2009", "gender" => "male"],
    "Student1693287" => ["name" => "Khazeena", "dob" => "17-May-2008", "gender" => "female"],
    "Student1694745" => ["name" => "Muqaddar", "dob" => "29-Sep-2009", "gender" => "male"],
    "Student1700365" => ["name" => "Yasir", "dob" => "12-Feb-2006", "gender" => "male"],
    "Student1700975" => ["name" => "Mustafa", "dob" => "21-Jan-2011", "gender" => "male"],
    "Student1701018" => ["name" => "Mohammad", "dob" => "15-Aug-2011", "gender" => "male"],
    "Student1701028" => ["name" => "Maria", "dob" => "14-Jan-2008", "gender" => "female"],
    "Student1706991" => ["name" => "Mohib", "dob" => "03-Aug-2007", "gender" => "male"],
    "Student1707042" => ["name" => "Latif", "dob" => "07-Jun-2005", "gender" => "male"],
    "Student1695486" => ["name" => "Shawaiz", "dob" => "12-May-2007", "gender" => "male"],
    "Student1723408" => ["name" => "Rafil", "dob" => "24-Sep-2003", "gender" => "male"],
    "Student1686823" => ["name" => "Hamza", "dob" => "20-Nov-2010", "gender" => "male"],
];
pr($students);

foreach($students as $id => $data) {
    echo "<hr><br><b>Enrollment # </b>$id";
    foreach($data as $key => $value) {
        echo "<p><b>$key:</b> $value</p>"; 
    }
}