<?php
require_once "Author.php";


class Book
{
    private string $title;
    private float $price;
    private Author $author;

    // TODO Generate getters and setters of properties


    public function getTitle(){
        return $this->title;
    }


    public function getPrice(){
        return $this->price;
    }


    public function getAuthor(){
        return $this->author;
    }


    public function setTitle($title){
         $this->title = $title;
    }


    public function setPrice($price){
         $this->price = $price;
    }


    public function setAuthor($author){
         $this->author = $author;
    }

    // TODO Generate constructor for all attributes. 
    //$author argument of the constructor can be optional
    public function __construct($title, $price, $author=null){
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }
}