<?php
require_once "AbstractLibrary.php";
require_once "Author.php";

class Library extends AbstractLibrary
{

    // Method accepts the name of the author, 
    //creates instance of the Author class,
    // adds the instance in $authors array 
    //and returns created instance
    public function addAuthor(string $authorName): Author {
       $author = new Author($authorName);
       $this->authors[] = $author;
       return $author;
    }


    
    /**
     * Method accepts author name and Book. 
     * Finds author in $authors array and adds book to this array.
     * The method must set $book's $author property 
     * with the found author also.
     * This method is equivalent of Author::addBook
     *
     */
     public function addBookForAuthor($authorName, Book $book){
        foreach ($this->authors as  $author) {
            if($author->getName() == $authorName){
               $createdBook = $author->addBook($book->getTitle(), $book->getPrice());
               $createdBook->setAuthor($author);
            }
        }
     }

     
    /**
     * Method returns books for given author
     */
    public function getBooksForAuthor($authorName){
        foreach($this->authors as $author){
            if($author->getName() == $authorName ){
                return $author->getBooks();
            }
        }
    }


    /**
     * Method searches for book and returns instance of Book
     */
    public function search(string $bookName): Book{
        foreach ($this->authors as  $author) {
           foreach ($author->getBooks() as $book) {
             if($book->getTitle() == $bookName){
                return $book;
             }
           }
        }
    }

    
    /**
     * This method must print every author and 
     * for each author all its books in the following format
     * AuthorName
     * ----------------------
     * BookName - price
     * Book2Name - price
     * ...
     *
     * AnotherAuthorName
     * ----------------------
     * AnotherBookName - price
     * ...
     */
    public function print(){
        foreach ($this->authors as  $author) {
            echo $author->getName().'</br>';
            foreach ($author->getBooks() as $book) {
                echo $book->getTitle().'</br>';
                echo $book->getPrice().'</br>';
            }
         }
    }
}