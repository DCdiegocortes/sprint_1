<?php


class Rectangle implements ShapeInterface
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        if($width <= 0 || $height <= 0){
            throw new InvalidArgumentException("Width and height must be greater than 0");
        }
        $this->width = $width;
        $this->height = $height;

    }

    public function calculateArea() // override
    {
        return $this->height * $this->width;
    }

}

?>
