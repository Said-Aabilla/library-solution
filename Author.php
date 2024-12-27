<?php

require_once "Book.php";

class Author
{
    private string $name;
    private $books = [];


    // TODO Generate getters and setters of properties

    public function setName($name){
        $this->name = $name;
    }
 
    public function setBooks($books){
        $this->books = $books;
    }


    public function getName(){
        return $this->name ;
    }

    public function getBooks(){
       return  $this->books ;
    }

    // TODO Generate constructor for all attributes. 
    //$books argument of the constructor can be optional

    public function __construct($name, $books = []){
        $this->name = $name;
        $this->books = $books;
    }

    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */
    public function addBook(string $title, float $price) : Book
    {
        $book = new Book($title, $price);
        //Add into $books array and return it
        $this->books[] = $book; //books.push($book)
        return $book;
    }
}