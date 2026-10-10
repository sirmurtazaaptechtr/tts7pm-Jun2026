<?php
class School {
    public static $school_name;
    public static $school_address;

    public static function setSchoolName($name) {
        self::$school_name = $name;
    }

    public static function setSchoolAddress($address) {
        self::$school_address = $address;
    }

    public static function getSchoolInfo() {
        echo "<p>School Name: " . self::$school_name . "</p>" .
               "<p>School Address: " . self::$school_address . "</p>";
    }
}

School::setSchoolName("Greenwood High");
School::setSchoolAddress("123 Main St, Springfield");
School::getSchoolInfo();
?>