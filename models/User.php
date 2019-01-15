<?php

class User {
    private $id, $email, $password, $role = "ROLE_USER", $name, $surname;

    function __construct($name, $surname, $password, $email) {
        $this->name = $name;
        $this->surname = $surname;
        $this->password = $password;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function getSurname() {
        return $this->surname;
    }

    public function setSurname($surname): void {
        $this->surname = $surname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    function getPassword() {
        return $this->password;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function getID() {
        return $this->id;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

}