<?php


class Person {

    public $name;
    public $surname;
    public $age;
    private $unava = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function pozdrav(){
        echo('Ahoj, já jsem ' . $this->$name);
    }
    
}
