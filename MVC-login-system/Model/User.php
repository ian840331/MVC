<?php
include_once ("Model/Database.php");

class User {

	private $id;

	public function getUser($id) {
		$db = new Database();
		$sql = "select * from users where `id` = $id limit 1";
		$res = $db->fetch($sql);
		$db->close_connect();

		$arr = array();
		if ($res[0]) {
			$arr['id'] = $res[0]['id'];
			$arr['username'] = $res[0]['username'];
			$arr['status'] = $res[0]['status'];
		}
		return $arr;
	}

	public function getUserID()
	{
		return $this->id;
	}

	public function isExist($username, $password = null) {
		$db = new Database();
		if ($password) {
			$sql = "select id, username, password from users where username = '{$username}' and password = '{$password}'";
			$res = $db->fetch($sql);
			if (empty($res)) {
				return false;
			}
			else {
				$this->id = $res[0]['id'];
				return true;
			}
		}
		else {
			$sql = "select * from users where username = '{$username}'";
			$res = $db->fetch($sql);
			if (empty($res)) {
				return false;
			}
			else {
				return true;
			}
		}
		$db->close_connect();
	}

	public function insert($newUser) {
		$db = new Database();
		$sql = "INSERT INTO users (username, password, first_name, last_name, email, status)
		VALUES ('{$newUser['username']}', '{$newUser['password']}', '{$newUser['first_name']}', '{$newUser['last_name']}', '{$newUser['email']}', '{$newUser['status']}')";
		// echo htmlspecialchars ( $sql );
		$res = $db->execute($sql);
		$db->close_connect();

		return $res;
	}
}

?>