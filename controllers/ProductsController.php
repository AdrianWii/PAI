<?php

require_once("AppController.php");
require_once __DIR__."/../models/Product.php";
require_once __DIR__."/../models/ProductMapper.php";

class ProductsController extends AppController
{
    public function __construct() {
        parent::__construct();
    }

    public function products(int $id): void
    {
        $productMapper = new ProductMapper();

        //TODO find all products with specify cat.

//        header('Content-type: application/json');
//        http_response_code(200);

        echo $productMapper->getProduct($id)? json_encode($productMapper->getProduct($id)) : '';
//        $this->render('products', ['products' => $productMapper->getProduct($id)]);
    }

}