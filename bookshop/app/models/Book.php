<?php

class Book
{
    public $id;
    public $title;
    public $author;
    public $description;
    public $price;
    public $rating;
    public $picture;
    public $category;

    function __construct(
        $id,
        $author,
        $category,
        $description,
        $picture,
        $price,
        $rating,
        $title
    ) {
        $this->id          = $id;
        $this->author      = $author;
        $this->category    = $category;
        $this->description = $description;
        $this->picture     = $picture;
        $this->price       = $price;
        $this->rating      = $rating;
        $this->title       = $title;
    }
}

?>