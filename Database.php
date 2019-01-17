<?php

require_once 'Parameters.php';

class Database {
    private $servername, $username, $password, $database;

    public function __construct() {
        $this->servername = SERVERNAME;
        $this->username = USERNAME;
        $this->password = PASSWORD;
        $this->database = DATABASE;
    }

    public function connect(){
        try{
            return new PDO("mysql:
                host=$this->servername;
                dbname=$this->database", $this->username, $this->password);
        } catch (PDOException $e){
            die( "Connection failed: ".$e->getMessage());
        }
    }
}