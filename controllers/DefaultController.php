<?php

require_once("AppController.php");
require_once __DIR__ . "/../models/User.php";
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . "/../models/UserMapper.php";
require_once __DIR__ . "/../Database.php";


class DefaultController extends AppController {
    private $database;

    public function __construct() {
        $this->database = new Database();
        parent::__construct();
    }

    public function index() {

        //todo pobrac wszystkie gategorie
        $this->render('index');
    }

    public function login() {
//        $stmt = $this->database->connect()->prepare('
//            SELECT * FROM user WHERE email = :email;
//        ');
//        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
//        $stmt->execute();
//        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//        print_r($users);
//        $user = null;
//        if ($this->isPost()) {
//            foreach ($users as $u) {
//                if ($u->getEmail() === $_POST['email']){
//                    $user = $u;
//                    break;
//                }
//            }
//
//            if(!$user){
//                $this->render('login', ['message' =>
//                ['Email not found']]);
//            }
//
//            //todo add md5
//            if ($user->getPassword() !== $_POST['password']) {
//                $this->render('login', ['message' => ['Wrong password']]);
//            } else {
//                $_SESSION["email"] = $user->getEmail();
//                $_SESSION["role"] = $user->getRole();
//
//                $url = "http://$_SERVER[HTTP_HOST]/";
//                header("Location: {$url}?page=index");
//                exit();
//            }
//        }

        $this->render('login');
    }
}