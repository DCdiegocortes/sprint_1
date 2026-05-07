<?php

require_once "Book.php";

$bookList = [
    new Book("The Great Gatsby", "F. Scott Fitzgerald", 180, 10.99),
    new Book("To Kill a Mockingbird", "Harper Lee", 281, 7.99),
    new Book("1984", "George Orwell", 328, 8.99)
];

foreach ($bookList as $currentBook) {
    echo $currentBook . "\n"; // will call __TOSTRING method of the Book class
}
echo "----------------------------------------------------  \n";

foreach ($bookList as $currentBook) {
    echo "Title: " . $currentBook->title . ", Author: " . $currentBook->author . ", Pages: "
                   . $currentBook->totalPages . ", Price: $" . $currentBook->price . "\n"; // calls __TOGET method of the Book class to access private propertie
}

?>
