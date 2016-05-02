<?php
include_once( "app/controllers/Controller.php" );
	session_start();

$controller = new Controller();
$controller->invokeBook();

if ($_GET['op'] == "login") {

    $username = empty($_POST['username'])? "" : $_POST['username'];
    $password = empty($_POST['password'])? "" : $_POST['password'];
    //echo $_POST['title'];
    $user = $controller->login($username, $password);
    if ($user != false) {
		$_SESSION['user_id'] = $user->id;
        
		$_SESSION['username'] = $user->username;

        if ($user->username == "admin") {
            echo "<script>window.location='admin/data.php'</script>";
        } else {
            echo "<script>window.location='index.php'</script>";
        }
    } else{
            echo "<script>window.location='index.php?msg=loginFail'</script>";
    }

}

?>
