<?php
include_once( "app/controllers/Controller.php" );

$controller = new Controller();
$controller->invokeSignUp();

if (isset($_POST['submit'])) {

    $firstName = empty($_POST['firstName'])? "" : $_POST['firstName'];
    $lastName = empty($_POST['lastName'])? "" : $_POST['lastName'];
    $username = empty($_POST['username'])? "" : $_POST['username'];
    $email = empty($_POST['email'])? "" : $_POST['email'];
    $password = empty($_POST['password'])? "" : $_POST['password'];

    $result = $controller->addUser(
           $username, $password, $email, $firstName, $lastName
        );

    if ( $result == "duplicated") {
            echo "<script>alert('This username has been registered!')</script>";
    } else if($result == false) {
            echo "<script>alert('Add User Error!')</script>";
    }
    
    else
    {
            echo "<script>window.location='index.php'</script>";
                
        }
}
?>
