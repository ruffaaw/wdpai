<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';


class SecurityController extends AppController
{
    public function login()
    {
        $userRepository = new UserRepository();

        if(!$this->isPost()) {
            return $this->render('login');
        }

        if(isset($_POST['register'])) {
            return $this->render('register');
        }

        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = $userRepository->getUser($email);

        if(!$user) {
            $this->render('login', ['messages' => ['User not exist!']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email not exist!']]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ["Wrong password"]]);
        }

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/products");
    }

    public function redirectToRegister(){
        if(isset($_POST['register'])) {
            return $this->render('register');
        }
        $this->login();
    }
}