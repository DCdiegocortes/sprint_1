<?php

class Dog extends Animal
{
    public function talk()
    {
        return $this->name . " : Woof woof!"; // no getter for name> accessing it directly > protected from the parent class
    }
}

?>
