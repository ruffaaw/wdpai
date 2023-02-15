<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class RegisterController extends AppController
{
    public function register() {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];

        if (empty($name)) {
            return $this->render('register', ['messages' => ['Nie wpisano imiona']]);
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                return $this->render('register', ['messages' => ['Niepoprawny format imienia']]);
            }
        }

        if (empty($surname)) {
            return $this->render('register', ['messages' => ['Nie wpisano nazwiska']]);
        } else {
            if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
                return $this->render('register', ['messages' => ['Niepoprawny format nazwiska']]);
            }
        }

        if (empty($email)) {
            return $this->render('register', ['messages' => ['Nie wpisano loginu']]);
        } else {
            $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
            if (!preg_match ($pattern, $email) ) {
                return $this->render('register', ['messages' => ['NIepoprawny format emaila']]);
            }
        }

        if (empty($password)) {
            return $this->render('register', ['messages' => ['Nie wpisano hasla']]);
        }

        if(empty($phone)) {
            return $this->render('register', ['messages' => ['Not entered number phone']]);
        } else{
            if(!preg_match("/^[0-9]*$/",$phone)) {
                return $this->render('register', ['messages' => ['Invalid phone number format']]);
            }
        }

        $userRepository = new UserRepository();

        $userRepository->addUser($name, $surname, $email, $this->password_hash($password, PASSWORD_BCRYPT, 12));

        return $this->render('products');
    }
}