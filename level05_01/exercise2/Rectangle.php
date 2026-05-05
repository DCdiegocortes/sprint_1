<?php

class Rectangle extends Shape {

    public function calculateArea() {// override
        return $this->height * $this->width;
    }

}

?>