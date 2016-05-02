<?php
/**
 * Created by PhpStorm.
 * User: yj
 * Date: 24/08/15
 * Time: 4:34 PM
 */

class User {
public $id;
    public $username;
    public $password;
    public $firstName;
    public $lastName;
    public $email;
    public $status;

    function __construct(
        $id,
        $username,
        $password,
        $firstName,
        $lastName,
        $email,
        $status

    ) {
        $this->email = $email;
        $this->firstName = $firstName;
        $this->id = $id;
        $this->lastName = $lastName;
        $this->password = $password;
        $this->status = $status;
        $this->username = $username;
    }
} 