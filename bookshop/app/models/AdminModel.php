<?php

include_once( "../app/models/Book.php" );
include_once( "../app/models/User.php" );
include_once( "../app/models/Order.php" );
include_once( "../app/models/DBHelper.php" );
class Model
{
    /////////// BOOK /////////////
    public function getBookList()
    {
        // here goes some hardcoded values to simulate the database

        $db  = new DBHelper();
        $sql = "select * from Books";
        $res = $db->execute_sql( $sql );
        $db->close_connect();

//var_dump($res);
// echo count($res);
        $number_of_books = count( $res );
        //echo $number_of_books;

        $books_array = Array();

        if ($number_of_books == 0) {
            echo "No data found";
            exit;
        }

        foreach ($res as $row) {
            $book = new Book(
                $row['id'],
                $row['author'],
                $row['category'],
                $row['description'],
                $row['picture'],
                $row['price'],
                $row['rating'],
                $row['title']
            );

            array_push( $books_array, $book );
        }

        return $books_array;
    }

    public function getBook( $id )
    {
        // we use the previous function to get all the books and then we return the requested one.
        // in a real life scenario this will be done through a db select command
        $allBooks = $this->getBookList();

        foreach ($allBooks as $book) {
            if ($book->id == $id) {
                return $book;
            }
        }

        return false;
    }

    public function addBook( $book )
    {
        $db  = new DBHelper();
        $sql = "insert into Books VALUES (NULL, '$book->title',
'$book->author', '$book->description', '$book->price', '$book->rating', '$book->picture', '$book->category')";
        //echo htmlspecialchars ( $sql );
        $res = $db->execute_sql( $sql );
        $db->close_connect();

        return true;
    }


    /////////// User /////////////
    public function getUserList()
    {
        // here goes some hardcoded values to simulate the database

        $db  = new DBHelper();
        $sql = "select * from Users";
        $res = $db->execute_sql( $sql );
        $db->close_connect();

//var_dump($res);
// echo count($res);
        $number_of_users = count( $res );
        //echo $number_of_books;

        $users_array = Array();

        if ($number_of_users == 0) {
            echo "No data found";
            exit;
        }

        foreach ($res as $row) {
            $user = new User(
                $row['id'],
                $row['username'],
                $row['password'],
                $row['first_name'],
                $row['last_name'],
                $row['email'],
                $row['status']
            );

            array_push( $users_array, $user );
        }

        return $users_array;
    }

    public function getUser( $id )
    {
        $db  = new DBHelper();
        $sql = "select * from Users where id = '$id' limit 1";
        $res = $db->execute_sql( $sql );
        $db->close_connect();

        if (empty( $res )) {
            return false;
        } else {
            $row  = $res[0];
            $user = new User(
                $row['id'],
                $row['username'],
                $row['password'],
                $row['first_name'],
                $row['last_name'],
                $row['email'],
                $row['status']
            );

            return $user;
        }
    }

    public function addUser( $user )
    {
        $db  = new DBHelper();
        $sql = "insert into Users VALUES (NULL, '$user->username',
'$user->password', '$user->firstName', '$user->lastName', '$user->email', null)";
        //echo htmlspecialchars ( $sql );
        $res = $db->execute_sql( $sql );
        $db->close_connect();

        return true;
    }

    public function checkUsernameAvailability( $username )
    {
        $db = new DBHelper();
        $sql
            = "SELECT username from users WHERE username = '{$username}' LIMIT 1";

        //echo htmlspecialchars ( $sql );
        $res = $db->execute_sql( $sql );
        $db->close_connect();
        if (count( $res ) == 1) {
            return "<p><b>Error:</b> Username already exists!</p>";
        } else {
            return false;
        }
    }

    /////////// Order /////////////
    public function getOrderList()
    {
        // here goes some hardcoded values to simulate the database

        $db  = new DBHelper();
        $sql = "select * from Orders";
        $res = $db->execute_sql( $sql );
        $db->close_connect();

//var_dump($res);
// echo count($res);
        $number_of_orders = count( $res );
        //echo $number_of_books;

        $orders_array = Array();

        if ($number_of_orders == 0) {
            echo "No data found";
            exit;
        }

        foreach ($res as $row) {
            $order = new Order(
                $row['id'],
                $row['user_id'],
                $row['book_id'],
                $row['qty'],
                $row['order_time']
            );

            array_push( $orders_array, $order );
        }

        return $orders_array;
    }

    public function getOrder( $id )
    {
        $db  = new DBHelper();
        $sql = "select * from Orders where id = '$id' limit 1";
        $res = $db->execute_sql( $sql );
        $db->close_connect();

        if (empty( $res )) {
            return false;
        } else {
            $row   = $res[0];
            $order = new Order(
                $row['id'],
                $row['user_id'],
                $row['book_id'],
                $row['qty'],
                $row['order_time']
            );

            return $order;
        }
    }

    public function addOrder( $order )
    {
        $db  = new DBHelper();
        $sql = "insert into Orders VALUES (NULL, '$order->userId',
'$order->bookId', '$order->qty', '$order->orderTime')";
        //echo htmlspecialchars ( $sql );
        $res = $db->execute_sql( $sql );
        $db->close_connect();

        return true;
    }
}


?>
