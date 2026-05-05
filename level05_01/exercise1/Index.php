<?php
require_once "AnimalInterface.php";
require_once "Animal.php";
require_once "Cat.php";
require_once "Dog.php";

$cat1 = new Cat("Sioux");
echo $cat1->talk() . "\n";
$dog2 = new Dog("Toby");
echo $dog2->talk() . "\n";

?>
