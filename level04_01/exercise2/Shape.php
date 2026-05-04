<?php

abstract class Shape {

    protected $height;
    protected $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

    }
    abstract public function calculateArea();//Subclasses are required to implement abstract functions
}

?>
