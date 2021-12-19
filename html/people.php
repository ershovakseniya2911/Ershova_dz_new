<?php

class people
{
public $name;
public $age;

public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
}
    public function go()
    {
        echo "$this->name go";
    }
}