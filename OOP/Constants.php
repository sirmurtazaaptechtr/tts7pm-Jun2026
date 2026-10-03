<?php
class Greetings {
    const HELLO = "Hello, World!";
    const GOODBYE = "Goodbye, World!";
    const MESSAGE = "Thank you for visiting W3Schools.com!";
    
    public function showGreetings() {
        echo self::HELLO . "<br>";
        echo self::GOODBYE . "<br>";
        echo self::MESSAGE . "<br>";
    }

    // Static method to display greetings
    public static function displayGreetings() {
        echo self::HELLO . "<br>";
        echo self::GOODBYE . "<br>";
        echo self::MESSAGE . "<br>";
    }

}

$greet1 = new Greetings();
$greet1->showGreetings();

echo "<hr>";
echo Greetings::HELLO . "<br>"; 
echo Greetings::GOODBYE . "<br>"; 
echo Greetings::MESSAGE . "<br>";

echo "<hr>";
Greetings::displayGreetings();

?>