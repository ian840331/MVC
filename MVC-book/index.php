<?php
include_once( "controller/Controller.php" );

$controller = new Controller();
$controller->invoke();

if ($_GET['op'] == "add") {
    include( "view/addBook.php" );
    if ( ! empty( $_POST['title'] ) || ! empty( $_POST['author'] )
         || ! empty( $_POST['description'] )
    ) {
        //echo $_POST['title'];
        if ($controller->addBook(
            $_POST['title'],
            $_POST['author'],
            $_POST['description']
        )) {
            echo "<script>window.location='index.php'</script>";
        }
    }
}

?>