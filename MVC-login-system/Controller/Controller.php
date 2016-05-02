<?php

include_once ("Model/User.php");

class Controller {

	public function login() {
		include ("View/Login.php");
	}

	public function register() {
		include ("View/Register.php");
	}

	public function profile($id) {
		$u = new User();
		$user = $u->getUser($id);
		if(empty($user)) {
			echo "This user is not exist!";
			exit();
		}
		include ("View/Profile.php");
	}

	public function validate($username, $password) {
		$u = new User();
		if ($u->isExist(trim($username), trim($password))) {
			header('Location: ?page=profile&id='.$u->getUserID());
		}
		else {
			echo "You may input wrong Username or Password";
		}
	}

	public function addUser($request) {
		$u = new User();
		if ($u->isExist($request['username'])) {
			echo "The Username is already exist. Please try another username";
		}
		else {
			$u->insert($request);
			echo "Register Successfully!";
		}
	}
}

?>