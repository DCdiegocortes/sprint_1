<?php
require_once "Shape.php";
require_once "Rectangle.php";
require_once "Triangle.php";

$triangle1 = new Triangle(14,25 );
echo "Area of square: " . $triangle1->calculateArea() . "\n";

$rectangle1 = new Rectangle(4, 12);
echo "Area of rectangle: " . $rectangle1->calculateArea() . "\n";

?>

