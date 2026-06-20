<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo "<p>This is php code</p>";
Echo "<p>My name is Hussain</p>";

$color = 'red';
$COLOR = 'green';

echo "<p>The color is $color</p>";
echo "<p>The color is $COLOR</p>";

// This is a single-line comment
# This is also a single-line comment

/*
This is a 
Multiline comment 
in php code
*/

// Output welcome message
echo 'Welcome Sir Murtaza!<br>';

echo 'Welcome Aptech!<br>'; // Output welcome message


echo 5 /* + 3 */ + 6 . "<br>";
echo 5 + 3 + 6 . "<br>";


$name = "Ali Raza";
$age = 16;

function myfun () {
    global $name,$age;

    $gender = 'male';
    echo "<p>Dear $name, You are $age years old $gender.</p>";
}

echo "<p>Dear $name, You are $age years old.</p>";

myfun();


function counter () {
    static $number = 0;
    $number++;
    echo $number . "<br>";
}

counter();
counter();
counter();
counter();
counter();
counter();
?>
</body>
</html>