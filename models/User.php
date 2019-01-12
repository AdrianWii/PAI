<?php

class User {
    private $id, $username, $password, $role;

    function __construct($id, $password, $role, $username) {
        $this->id = $id;
        $this->password = $password;
        $this->role = $role;
        $this->username = $username;
    }

    public function getID() {
        return $this->id;
    }

    public function getRole() {
        return $this->role;
    }

    function getPassword() {
        return $this->password;
    }

    function __toString() {
        return $this->username;
    }
}