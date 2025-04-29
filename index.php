<?php

require 'functions.php'; 
// require 'router.php';

// connect to the MySQL database
// initialize the PDO
// create a instance of PDO

class Person 
{
    public $name;
    public $age;

    public function breath()
    {
        echo $this->name . ' is breathing';
    }
}

$person = new Person();
$person->name = 'John';
$person->age = 25;
// dd($person);

// dd($person->name);
// dd($person->age);
$person->breath();
