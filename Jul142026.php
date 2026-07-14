<?php declare(strict_types=1);
// PHP Functions
function my_fun () {
    echo "<p>";
    echo "This is my function";
    echo "</p>";
}

function greet (string $name) {
    echo "<p> Welcome $name</p>";
}

function show_message (string $name, string $message) {
    echo "<p>Dear $name,</p>";
    echo "<p>$message</p>";
}

function squrer (int $number) : int {
    $square = $number * $number;
    return $square;
}
// PHP Default Parameter Value
function show_bio (string $name, float $age, string $gender = "male", string $city = "Karachi") : void {
    echo "<ul>";
    echo "<li><b>Name: </b>$name</li>";
    echo "<li><b>Age: </b>$age</li>";
    echo "<li><b>Gender: </b>$gender</li>";
    echo "<li><b>City: </b>$city</li>";
    echo "</ul>";
}

// Variable Number of Parameters
function total (float $num1,  float $num2, float ...$nums) : float {
    $sum = $num1 + $num2;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum;
}

// Passing Arguments by Reference
function swap (int &$a, int &$b) : void {
    echo "<p>Inside Before Swap : ($a,$b)</p>";
    $temp = $a;
    $a = $b;
    $b = $temp;
    echo "<p>Inside After Swap : ($a,$b)</p>";
}


my_fun();
my_fun();
my_fun();
my_fun();

greet("Abdul Latif");
greet("Rafil Sohail");
greet("Mustafa");
greet("Ali Husnain");
greet("Shawaiz Sheikh");

show_message("Mohib","Good Bye see you in the morning.");
show_message("Owais Yamin","Welcome to Php Class.");

$res = squrer(8);
echo "<p>$res</p>";

echo "<p>" . squrer(12) . "</p>";

$num = 18;
echo "<p>" . squrer($num) . "</p>";

echo "<p>" . squrer(7) . "</p>";

echo "<p>" . total(12,10) . "</p>";
echo "<p>" . total(10,2,7) . "</p>";
echo "<p>" . total(10,2,8,2) . "</p>";
echo "<p>" . total(10,2,5,8,17) . "</p>";

show_bio("Ali Raza", 45, "male", "Gujranwala");
show_bio("Jumman Bukhari", 18);
show_bio("Maria Mateen", 17, "female");

$num1 = 12;
$num2 = 6;

echo "<p>Outside Before Swap : ($num1,$num2)</p>";
swap($num1, $num2);
echo "<p>Outside Before Swap : ($num1,$num2)</p>";
?>