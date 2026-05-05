<?php

require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";

$shapes = [
    new Rectangle(4, 12),
    new Rectangle(10, 20),
    new Rectangle(5, 8),
    new Triangle(10, 7),
    new Triangle(6, 15),
    new Triangle(14, 25),

];

foreach ($shapes as $currentShape) {
    echo "Area of " . get_class($currentShape) . ": " . $currentShape->calculateArea() . "\n"; // get_class() > function that returns  the name of a  class

}

?>
