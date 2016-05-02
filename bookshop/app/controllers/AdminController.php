<?php
include_once("../app/models/AdminModel.php");

class AdminController {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();

    } 
	
    public function addBook( $title, $author, $description, $category, $picture, $price )
    {

        $book = new Book( null,  $author, $category, $description, $picture, $price, 0, $title );

        return $this->model->addBook( $book );
    }

	public function invokeData()
	{
			// no special book is requested, we'll show a list of all available books
			$books = $this->model->getBookList();
			$users = $this->model->getUserList();
			$orders = $this->model->getOrderList();
			include '../app/views/admin/data.php';
	}


    	public function editData()
	{
			// no special book is requested, we'll show a list of all available books
			// $books = $this->model->getBookList();
			include '../app/views/admin/forms.php';
	}
}

?>
