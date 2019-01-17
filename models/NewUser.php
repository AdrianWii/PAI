<?php

class NewUser {
    private $name, $surname, $email, $password, $role="User_Role";

    public function __construct($name, $surname, $email, $password, $role) {
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->role = $role;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setSurname($surname): void {
        $this->surname = $surname;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }
}