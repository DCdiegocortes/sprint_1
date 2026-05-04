<?php

abstract class Shape {

    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;

    }
    abstract public function calculateArea();//Subclasses are required to implement abstract functions
}

?>
