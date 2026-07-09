<?php
// PHP switch Statement
$num1 = 15;
$num2 = 3;

$option = 3;

switch($option) {
    case 1:
        $res = $num1 + $num2;
        echo "<p>$num1 + $num2 = $res</p>";
    break;
    case 2:
        $res = $num1 - $num2;
        echo "<p>$num1 - $num2 = $res</p>";
    break;
    case 3:
        $res = $num1 * $num2;
        echo "<p>$num1 X $num2 = $res</p>";
    break;
    case 4:
        $res = $num1 / $num2;
        echo "<p>$num1 / $num2 = $res</p>";
    break;
    case 5:
        $res = $num1 % $num2;
        echo "<p>$num1 % $num2 = $res</p>";
    break;
    default:
        echo "<p>Invalid Input!</p>";
}

$alphabet = "E";

switch($alphabet) {
    case "A":
    case "a":
    case "E":
    case "e":
    case "I":
    case "i":
    case "O":
    case "o":
    case "U":
    case "u":
        echo "<p>'$alphabet' is a vowel</p>";
        break;
    default:
        echo "<p>'$alphabet' is a consonent</p>";        
}

// PHP match Expression
// $favcolor = "blue";
$favcolor = "white";

$text = match($favcolor) {
  "red" => "Your favorite color is red!",
  "blue" => "Your favorite color is blue!",
  "green" => "Your favorite color is green!",
  default => "Your favorite color is neither red, blue, nor green! but $favcolor",
};

echo "<p>$text</p>";

// Match Multiple Values
$alphabet = 'U';

$text = match($alphabet) {
    "a", "A", "e", "E", "i", "I", "o", "O", "u", "U" => "'$alphabet' is a vowel",
    default => "'$alphabet' is a consonent",
};

echo "<p>$text</p>";

// PHP Loops
// FOR
for($cnt = 1; $cnt <= 3; $cnt++) {
    echo "Syed Murtaza Hussain<br>";
}

$tableof = 19;
echo "<p>Displaying table of $tableof</p>";

for($cnt = 11; $cnt <= 10; $cnt++) {
    $mul = $cnt * $tableof;
    echo "$tableof X $cnt = $mul<br>";
}

$cnt = 11;
while($cnt <= 10) {
    $mul = $cnt * $tableof;
    echo "$tableof X $cnt = $mul<br>";
    $cnt++;
}

$cnt = 1;
do {
    $mul = $cnt * $tableof;
    echo "$tableof X $cnt = $mul<br>";
    $cnt++;
}while($cnt <= 10);


$names = ["Maria", "Mohammad", "Mohib", "Latif", "Mustafa", "Muqaddar", "Yasir", "Shawaiz", "Mujtaba"];

for($index = 0; $index < count($names); $index++) {
    echo "<p>" . $index + 1 . ". Dear " . $names[$index] . ", how do you do?</p>";
}

foreach($names as $name) {
    echo "<p>Dear $name, how do you do?</p>";
}