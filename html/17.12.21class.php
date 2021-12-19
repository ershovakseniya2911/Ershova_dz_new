<?php
/*require_once 'people.php';
$person = new people('Tom', 15);
/*$person->name ='Tom';
$person->age ='10';*/
/*$person->go();

$person2 = new people('Bob', 11);
/*$person2->name ='Bob';
$person2->age ='11';*/
/*$person2->go();

//print_r($person);
//print_r($person2);*/

/*require_once 'pet.php';
$person = new pet('Tom', 7, 'blue');
$person->name ='Tom';
$person->age ='7';
$person->color = 'blue';
$person->go();
$person->eat();
$person->sleep();

$person2 = new pet('Bob', 11, 'blue');
$person2->name ='Bob';
$person2->age ='11';
$person2->color = 'blue';
$person2->go();
$person2->eat();
$person2->sleep();


print_r($person);
print_r($person2);
?>*/
$par = new my_parent('tom', '40');
$child = new my_child( 'bob', '10');
$child->sleep();
