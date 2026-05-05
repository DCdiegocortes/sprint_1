<?php

class Circle implements ShapeInterface

{
    private const PI = 3.1416;
    private $radius;

    public function __construct($radius)
    {
        if($radius <= 0){
            throw new InvalidArgumentException("Radius must be greater than 0");
        }
        $this->radius = $radius;
    }

    public function calculateArea() // override
    {
        return self::PI * ($this->radius * $this->radius);
    }

}

?>