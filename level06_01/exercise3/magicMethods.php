<?php

class Book{

    private $title;
    private $author;
    private $totalPages;
    private $price;

    public function __construct($title, $author, $totalPages, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->totalPages = $totalPages;
        $this->price = $price;
    }

    public function __get($property) // access to private or nonexistent properties
    {
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    public function __toString() // object as text
    {
        return "Title: $this->title, Author: $this->author, Total Pages: $this->totalPages, price: $this->price" ;
    }

}

?>
