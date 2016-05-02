<?php

include_once( "model/Book.php" );

class Model
{
    public function getBookList()
    {
        // here goes some hardcoded values to simulate the database

        $db = "model/db.inc";
        if ( ! file_exists( $db )) {
            echo "Database does not exist";
            exit;
        }

        $books_record    = file( $db );
        $number_of_books = count( $books_record );
        $books_array     = Array();

        if ($number_of_books == 0) {
            echo "No data found";
            exit;
        }
        for ($i = 0; $i < $number_of_books; $i ++) {

            $line = explode( "#", $books_record[$i] );

            $title       = $line[0];
            $author      = $line[1];
            $description = $line[2];
            $book        = new Book( $title, $author, $description );

            array_push( $books_array, $book );
        }

        return $books_array;
    }

    public function getBook( $title )
    {
        // we use the previous function to get all the books and then we return the requested one.
        // in a real life scenario this will be done through a db select command
        $allBooks = $this->getBookList();

        foreach ($allBooks as $book) {
            if ($book->title == $title) {
                return $book;
            }
        }

        return false;
    }

    public function addBook( $book )
    {
        $db   = "model/db.inc";
        $file = fopen( $db, "a" );

        if ($file != false) {

            $book_message = $book->title . "#" . $book->author . "#"
                            . $book->description . "\n";

            fwrite( $file, $book_message );
            fclose( $file );
            return true;
        } else {
            echo false;
        }
    }
}


?>