<?php

include_once("Controller/Controller.php");

$controller = new Controller();

//Login Page
if ($_GET['page'] == 'login') {
	$controller->login();
}

// Profile page
if ($_GET['page'] == 'profile') {
	if (!isset($_GET['id'])) {
		$controller->profile(1);
	}
	else {
		$controller->profile($_GET['id']);
	}
}

// Registration Page
if ($_GET['page'] == 'register') {
	$controller->register();
}

// Login submit
if ($_GET['action'] == 'login') {
	$controller->validate($_POST['username'], $_POST['password']);
}

// Register submit
if ($_GET['action'] == 'register') {
	$controller->addUser($_POST);
}
?>