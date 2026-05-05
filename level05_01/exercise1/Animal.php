<?php

abstract class Animal implements AnimalInterface
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

?>

