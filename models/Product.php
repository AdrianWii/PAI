<?php

class Product {
    private $id, $category, $name, $quantity;

    function __construct($name, $category, $quantity) {
        $this->name = $name;
        $this->category = $category;
        $this->quantity = $quantity;
    }

    public function getId() {
        return $this->id;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    public function getName() {
        return $this->name;
    }


    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getQuantity() {
        return $this->quantity;
    }


    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }
}