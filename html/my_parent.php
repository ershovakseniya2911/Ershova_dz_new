<?php

class my_parent
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sleep()
    {
        echo 'sleep';
    }
}
class my_child extends my_parent
{
    public $shool;
   public function __construct($name, $age, $shool);
    {
parent::__construct($name, $age);
$this->shool = $shool;
    }

}