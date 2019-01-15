<?php
require_once 'User.php';
require_once __DIR__ . "/../Database.php";

class UserMapper {
    private $database;
    public function __construct() {
        $this->database = new Database();
    }

}