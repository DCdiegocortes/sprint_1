<?php

class Triangle extends Shape {

    private const AREA_DIVISOR = 2;

    public function calculateArea()//override
    {
        return $this->height * $this->width / self::AREA_DIVISOR;
    }
}

?>
