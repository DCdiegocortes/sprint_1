<?php

class Triangle implements ShapeInterface
{

    private const AREA_DIVISOR = 2;
    private $base;
    private $height;

    public function __construct($base, $height)
    {
        if($base <= 0 || $height <= 0){
            throw new InvalidArgumentException("Base and height must be greater than 0");
        }
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea()//override
    {
        return $this->height * $this->base / self::AREA_DIVISOR;
    }
}

?>