<?php

require_once('controllers/DefaultController.php');

class Routing {
    public $routes = [];

    function __construct() {
        $this->routes = [
            'index' => [
                'controller' => 'DefaultController',
                'action' => 'index'],
            'login' => [
                'controller' => 'DefaultController',
                'action' => 'login'],
            'logout' => [
                'controller' => 'DefaultController',
                'action' => 'logout'],
        ];
    }

    function run() {
        $page = isset($_GET['page']) && isset($this->routes[$_GET['page']]) ? $_GET['page'] : 'index';
        if ($this->routes[$page]) {
            $className = $this->routes[$page]['controller'];
            $action = $this->routes[$page]['action'];
            $object = new $className;
            $object->$action();
        }
    }
}