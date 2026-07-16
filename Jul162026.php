<?php
function pr ($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
} 
// PHP Arrays
// PHP Indexed Arrays

// Create Arrays in PHP
$names = array("Mohammad", "Khazeena", "Maria", "Owais", "Hamza", "Rafil", "Latif", "Shawaiz", "Mohib", "Mujtaba", "Muqaddar", "Mustafa");
// OR
$names = ["Mohammad", "Khazeena", "Maria", "Owais", "Hamza", "Rafil", "Latif", "Shawaiz", "Mohib", "Mujtaba", "Muqaddar", "Mustafa"];

// PHP Access Array Items
pr($names);

echo "<p>" . $names[3] . "</p>";

foreach($names as $index => $name) {
    $sr = $index + 1;
    echo "<p>$sr. Hello $name</p>";
}

for($index = 0; $index < count($names); $index++) {
    $sr = $index + 1;
    $name = $names[$index];
    echo "<p>$sr. Dear $name, How are you?</p>";
}

// PHP Update Array Items
$names[6] = "Abdul Latif";
pr($names);

array_splice($names,5,1,"Rafil Sohail");

// PHP Add Array Items
// at end
array_push($names,"Hussain");
pr($names);

// at start
array_unshift($names,"Syed");
pr($names);

// anywhere
array_splice($names,6,0,"Murtaza");
pr($names);

// PHP Remove Array Items
// at end
array_pop($names);
pr($names);

// at start
array_shift($names);
pr($names);

// anywhere
array_splice($names,5,1);
pr($names);

// PHP - Array Sorting Functions
// ascending
sort($names);
pr($names);

// decending
rsort($names);
pr($names);