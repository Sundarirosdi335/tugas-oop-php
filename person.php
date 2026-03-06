<?php

class Person {
    public $firstName;
    public $lastName;

    function sayHello($name){
        return "Hello $name, nama saya $this->firstName $this->lastName <br>";
    }

    function sayGoodBye($name){
        return "Good Bye $name, dari $this->firstName $this->lastName <br>";
    }
}

$eko = new Person();
$eko->firstName = "Eko";
$eko->lastName = "Eko";

$joko = new Person();
$joko->firstName = "Joko";
$joko->lastName = "Nugroho";

$budi = new Person();
$budi->firstName = "Budi";
$budi->lastName = "Nugraha";

echo $eko->sayHello("Andi");
echo $joko->sayHello("Siti");
echo $budi->sayGoodBye("Rina");

?>
