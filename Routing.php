<?php

require_once('controllers/DefaultController.php');
require_once('controllers/ProductsController.php');

class Routing {
    public $routes = [];

    function __construct() {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'
            ],
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login']
            ,
            'logout' => [
                'controller' => 'DefaultController',
                'action' => 'logout'
            ],
            'products' => [
                'controller' => 'ProductsController',
                'action' => 'products'
            ],
            'new_user' => [
                'controller' => 'NewUserController',
                'action' => 'newUser'
            ],
        ];
    }

    function run()
    {
        $page = isset($_GET['page']) && isset($this->routes[$_GET['page']]) ? $_GET['page'] : 'index';
        if ($this->routes[$page]) {
            $className = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];
            $object = new $className;

            $id = $_GET['id'] ?? '';
            $object->$action($id);
        }
    }
}