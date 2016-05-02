<?php
include_once( "../app/controllers/AdminController.php" );

$controller = new AdminController();
$controller->editData();


if (isset($_POST['submit'])) {

    $title = empty($_POST['title'])? "" : $_POST['title'];
    $author = empty($_POST['author'])? "" : $_POST['author'];
    $description = empty($_POST['description'])? "" : $_POST['description'];
    $category = empty($_POST['category'])? "" : $_POST['category'];
    $picture = empty($_POST['picture'])? "" : $_POST['picture'];
    $price = empty($_POST['price'])? "" : $_POST['price'];

 if ($controller->addBook(
            $title, $author, $description, $category, $picture, $price 
        )) {
            echo "<script>window.location='data.php'</script>";
        }
}
?>

