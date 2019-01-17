<?php
require_once 'Product.php';
require_once __DIR__ . "/../Database.php";

class ProductMapper {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function getProduct(int $id)
    {
        try {
            $stmt = $this->database->connect()->prepare('
                SELECT * FROM product WHERE category = :id;
            ');
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $product;
//            return new Product($product['name'], $product['category'], $product['quantity']);
        } catch (PDOException $e) {
            die('Error ' . $e->getMessage());
        }
    }
}