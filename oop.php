<?php
class Book {
    
    private $title;
    private $availableCopies;

    // TODO: Add properties as Private
    public function __construct($title, $availableCopies) {
         // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // TODO: Add getTitle method
    public function getTitle() {
        return $this->title;
    }

    // TODO: Add getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // TODO: Add borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false; 
        }
    }

    // TODO: Add returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // TODO: Add properties as Private
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        // TODO: Initialize properties
        $this->name = $name;
    }

    // TODO: Add getName method
    public function getName() {
        return $this->name;
    }

    // TODO: Add borrowBook method
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo $this->name . " successfully borrowed " . $book->getTitle() . "\n";
        } else {
            echo $book->getTitle() . " is not available for " . $this->name . " to borrow.\n";
        }
    }

    // TODO: Add returnBook method
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " successfully returned " . $book->getTitle() . "\n";
    }
}

// TODO: Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies after borrowing
echo $book1->getTitle() . " - Available Copies: " . $book1->getAvailableCopies() . "\n";
echo $book2->getTitle() . " - Available Copies: " . $book2->getAvailableCopies() . "\n";

// Members return books
$member1->returnBook($book1);
$member2->returnBook($book2);

// TODO: Print Available Copies with their names:
echo $book1->getTitle() . " - Available Copies: " . $book1->getAvailableCopies() . "\n";
echo $book2->getTitle() . " - Available Copies: " . $book2->getAvailableCopies() . "\n";
?>
