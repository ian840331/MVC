<?php
include_once("app/models/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
	public function invokeBook()
	{
		if (!isset($_GET['book']))
		{
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getBookList();
			include 'app/views/booklist.php';
		}
		else
		{
			// show the requested book
			$book = $this->model->getBook($_GET['book']);
			include 'app/views/bookDetails.php';
		}
	}

    public function addBook( $title, $author, $description )
    {

        $book = new Book( $title, $author, $description );

        return $this->model->addBook( $book );
    }

   public function addUser( $username, $password, $email, $firstName, $lastName )
    {
if ( $this->model->checkUsernameAvailability( $username ) != false) {
    return "duplicated";

        }
        $user = new User( null, $username, $password,  $firstName, $lastName, $email, 0 );
        return $this->model->addUser( $user );
    }

  public function login( $username, $password )
  {
      return $this->model->getUser( trim($username), $password );

    }


    	public function invokeContact()
	{
			// $books = $this->model->getBookList();
			include 'app/views/contact.php';
    }

        	public function invokeAbout()
	{
			// $books = $this->model->getBookList();
			include 'app/views/about.php';
    }
  	public function invokeSignIn()
	{
			// $books = $this->model->getBookList();
			include 'app/views/signIn.php';
    }

        	public function invokeSignUp()
	{
			// $books = $this->model->getBookList();
			include 'app/views/signUp.php';
    }
}

?>
