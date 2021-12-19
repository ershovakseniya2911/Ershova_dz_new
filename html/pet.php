<?php

class pet
{
    public $name;
    public $age;
    public $color;

    public function __construct($name, $age, $color){
        $this->name = $name;
        $this->age = $age;
        $this->color =$color;

}
    public function go(){
        echo "$this->name go";
    }
         public function eat(){
             echo "$this->name eat";
         }
              public function sleep()
    {
        echo "$this->name sleep";
    }
}